<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Province;
use App\Repositories\OrderRepository;
use App\Http\Requests\OrderRequest;
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
        $provinces = Province::all();
        $districts = District::all();
        $data = $this->order_gestion->cart($request);
        return view('front.order.index', [
            'products' => $data['products'],
            'grand_total' => $data['grand_total'],
            'provinces' => $provinces,
            'districts' => $districts
        ]);
    }

    public function store(OrderRequest $request)
    {
        $data = $this->order_gestion->cart($request);        
        $data['member_id'] = 0;
        $data['order_status'] = getStatusOrder('pending');
        $request->merge($data);        
        $this->order_gestion->store($request);

        $request->session()->forget('carts');
        $request->session()->forget('quantities');
        return redirect('/');
    }
}
