<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

use App\Models\Product;

class CartController extends Controller
{
    protected $product_gestion;

    public function __construct(
        ProductRepository $product_gestion) {
        $this->product_gestion = $product_gestion;
    }

    public function index(Request $request)
    {
        $carts = $request->session()->exists('carts') ? $request->session()->get('carts') : [];
        $quantities = $request->session()->get('quantities');

        $product_ids = collect([]);
        foreach ($carts as $product_id) {
            $product_ids->push((int) $product_id);
        }        

        $products = Product::find($product_ids);
        $grand_total = 0;        
        foreach ($products as &$product) {
            $key = array_search($product->id, $carts);                        
            $product->cart_qty = $quantities[$key];
            $product->total = $product->cart_qty * $product->price;
            $product->key = $key;
            $grand_total += $product->total;            
        }                    
        return view('front.cart.index', ['products' => $products, 'grand_total' => $grand_total]);
    }

    public function addItem(Request $request)
    {        
        $carts = $request->session()->exists('carts') ? $request->session()->get('carts') : [];
        $product_id = $request->input('product_id');
        $quantity = $request->input('quantity');

        if (in_array($product_id, $carts)) {
            $key = array_search($product_id, $carts);
            $quantities = $request->session()->get('quantities');
            $quantities[$key] += $quantity;
            $request->session()->put('quantities', $quantities);
        } else {
            $request->session()->push('carts', $product_id);
            $request->session()->push('quantities', $quantity);
        }       

        return redirect('cart');
    }

    public function deleteItem(Request $request)
    {
        $carts = $request->session()->get('carts');
        $quantities = $request->session()->get('quantities');

        $quantities[$request->key] = '';
        $new_carts = array_diff($carts, array($request->product_id));

        $request->session()->put('quantities', $quantities);
        $request->session()->put('carts', $new_carts);

        return redirect('cart');
    }
}

