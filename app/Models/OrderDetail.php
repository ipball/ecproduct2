<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_detail';
    public $timestamps = false;

    // relation
    public function order()
    {
        return $this->belongsTo('App\Models\Order');
    }
    public function product()
    {
        return $this->hasOne('App\Models\Product');
    }
}
