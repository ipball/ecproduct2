<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Province;

class DistrictController extends Controller
{
    public function getByProvince($id){
        $province = Province::find($id);
        return response()->json(['data'=>$province->districts]);
    }
}
