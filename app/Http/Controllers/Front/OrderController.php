<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Repositories\OrderRepository;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    protected $order_gestion;

    public function __construct(
        OrderRepository $order_gestion) {
        $this->order_gestion = $order_gestion;
    }

    public function index(Request $request)
    {
        $data = $this->order_gestion->cart($request);
        return view('front.order.index', ['products' => $data['products'], 'grand_total' => $data['grand_total']]);
    }
}
