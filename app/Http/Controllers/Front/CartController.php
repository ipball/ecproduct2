<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Repositories\OrderRepository;
use Illuminate\Http\Request;

class CartController extends Controller
{
    protected $order_gestion;

    public function __construct(
        OrderRepository $order_gestion) {
        $this->order_gestion = $order_gestion;
    }

    public function index(Request $request)
    {
        $data = $this->order_gestion->cart($request);
        return view('front.cart.index', ['products' => $data['products'], 'grand_total' => $data['grand_total']]);
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

        unset($carts[$request->key]);
        unset($quantities[$request->key]);

        $request->session()->put('quantities', $quantities);
        $request->session()->put('carts', $carts);

        return redirect('cart');
    }

    public function deleteAll(Request $request)
    {
        $request->session()->forget('carts');
        $request->session()->forget('quantities');

        return redirect('cart');
    }

    public function updateItem(Request $request)
    {        
        $quantities = $request->session()->get('quantities');

        foreach($quantities as $key => $quantity){
            $quantities[$key] = $request->input('quantity_' . $key);
        }
        $request->session()->put('quantities', $quantities);

        return redirect('cart');
    }
}

