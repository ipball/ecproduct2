<?php

namespace App\Repositories;

use App\Models\Order;
use App\Models\OrderDetail;

class OrderRepository extends BaseRepository
{
    protected $order_detail;

    public function __construct(Order $order, OrderDetail $order_detail)
    {
        $this->model = $order;
        $this->order_detail = $order_detail;
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

}
