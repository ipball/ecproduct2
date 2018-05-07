<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'district';

    /*
     * relation
     */
    public function province()
    {
        return $this->belongsTo('App\Models\Province');
    }
}
