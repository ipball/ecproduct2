<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'category';

    /*
    * relation
    */
    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }
}
