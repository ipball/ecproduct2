<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    /*
     * relation
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    /*
     * Accessors & Mutators
     */
    public function getFullImageAttribute()
    {
        return !empty($this->image) ? url('/img/'.$this->image) :  url('img/no_image_available.jpg');
    }

    public function getPriceCurrencyAttribute()
    {
        return number_format($this->price, 2);
    }

    public function getStockStatusAttribute()
    {
        return $this->quantity > 0 ? 'พร้อมขาย' : 'สินค้าหมด';
    }
}
