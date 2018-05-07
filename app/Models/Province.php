<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'province';
    
    /*
    * relation
    */
    public function districts()
    {
        return $this->hasMany('App\Models\District');
    }
}
