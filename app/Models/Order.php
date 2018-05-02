<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    // relation
    public function order_details()
    {
        return $this->hasMany('App\Models\OrderDetail');
    }

    public function payment()
    {
        return $this->hasOne('App\Models\Payment');
    }
}
