<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

use App\Models\Product;
use Carbon\Carbon;

class CartController extends Controller
{
    protected $product_gestion;

    public function __construct(
        ProductRepository $product_gestion) {
        $this->product_gestion = $product_gestion;
    }

    public function index(Request $request)
    {
        $carts = $request->session()->get('carts');          
        $product_ids = collect([]);
        if(!empty($carts)){
            foreach ($carts as $cart) {
                $product_ids->push((int) $cart['product_id']);
            }
        }

        $products = Product::find($product_ids);
        $grand_total = 0;
        if(!empty($carts)){
            foreach($carts as $key => $cart){
                foreach($products as &$product){             
                    if($cart['product_id'] == $product->id){
                        $product->cart_qty = $carts[$key]['quantity'];
                        $product->total = $product->cart_qty * $product->price;
                        $grand_total += $product->total;
                    }
                }           
            }
        }
        return view('front.cart.index', ['products' => $products, 'grand_total' => $grand_total]);
    }

    public function addItem(Request $request)
    {
        $post_cart = array(
            'product_id' => $request->input('product_id'),
            'quantity' => $request->input('quantity'),
            'cart_date' => strtotime(Carbon::now())
        );
        
        $carts = $request->session()->get('carts');
        if ($request->session()->exists('carts')) {
            $index = -1;
            foreach ($carts as $key => $cart) {
                if ($cart['product_id'] == $request->input('product_id')) {
                    $index = $key;
                }
            }

            if ($index < 0) {
                $request->session()->push('carts', $post_cart);
            } else {
                $carts[$index]['quantity'] += $request->input('quantity');
                $request->session()->put('carts', $carts);
            }
        } else {
            $request->session()->push('carts', $post_cart);
        }        
        
        return redirect('cart');
    }

    public function removeItem()
    {

    }

    public function test()
    {
        
    }
}
