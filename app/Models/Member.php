<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';

    // relation
    public function orders()
    {
        return $this->hasMany('App\Models\Orders');
    }
}
