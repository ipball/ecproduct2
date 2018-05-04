<?php

namespace App\Repositories;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;

class OrderRepository extends BaseRepository
{
    protected $order_detail;
    protected $product;

    public function __construct(Order $order, OrderDetail $order_detail, Product $product)
    {
        $this->model = $order;
        $this->order_detail = $order_detail;
        $this->product  = $product;
    }

    private function saveOrder($inputs)
    {
        $data->grand_total = $inputs['grand_total'];
        $data->member_id = $inputs['member_id'];
        $data->name = $inputs['name'];
        $data->tel = $inputs['tel'];
        $data->lineid = $inputs['lineid'];
        $data->address = $inputs['address'];
        $data->district = $inputs['district'];
        $data->province = $inputs['province'];
        $data->postcode = $inputs['postcode'];
        $data->order_status = $inputs['order_status'];
        $data->save();

        return $data;
    }

    public function updateStatus($inputs, $id)
    {
        $order = $this->getById($id);

        $order->order_status = $inputs['order_status'];

        $order->save();
    }

    public function store($inputs)
    {
        $order = $this->saveOrder($inputs);

        // Order detail        
        foreach ($inputs['order_details'] as $order_detail) {
            $detail = new $this->order_detail();
            $detail->product_id = $order_detail['product_id'];
            $detail->quantity = $order_detail['quantity'];
            $detail->price = $order_detail['price'];
            $order->order_details()->save($detail);
        }
    }

    public function destroy($order)
    {
        $order->order_details->detach();
        $order->delete();
    }

    public function cart($request)
    {
        $carts = $request->session()->exists('carts') ? $request->session()->get('carts') : [];
        $quantities = $request->session()->get('quantities');
        $product_ids = collect([]);
        foreach ($carts as $product_id) {
            $product_ids->push((int) $product_id);
        }        

        $products = $this->product->find($product_ids);
        $grand_total = 0;        
        foreach ($products as &$product) {
            $key = array_search($product->id, $carts);                        
            $product->cart_qty = $quantities[$key];
            $product->total = $product->cart_qty * $product->price;
            $product->key = $key;
            $grand_total += $product->total;            
        }

        return ['products' => $products, 'grand_total' => $grand_total];
    }

}
