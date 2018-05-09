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

    public function province()
    {
        return $this->hasOne('App\Models\Province');
    }

    public function district()
    {
        return $this->hasOne('App\Models\District');
    }

    /*
     * Accessors & Mutators
     */
    public function getProvinceNameAttribute()
    {
        return $this->province->name_th;
    }

    public function getDistrictNameAttribute()
    {
        return $this->district->name_th;
    }
}
