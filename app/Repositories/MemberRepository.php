<?php

namespace App\Repositories;

use App\Models\Member;

class MemberRepository extends BaseRepository
{    
    public function __construct(Member $member)
    {
        $this->model = $member;        
    }

    private function store($inputs, $id)
    {
        $data->username = $inputs['username'];
        $data->password = $inputs['password'];
        $data->name = $inputs['name'];
        $data->tel = $inputs['tel'];
        $data->email = $inputs['email'];
        $data->lineid = $inputs['lineid'];
        $data->address = $inputs['address'];        
        $data->district = $inputs['district'];        
        $data->province = $inputs['province'];  
        $data->postcode = $inputs['postcode'];  
        $data->is_active = $inputs['is_active'];
        $data->id = $id;
        $data->save();
    }    

    public function updateActive($inputs, $id)
    {
        $member = $this->getById($id);
        $member->is_active = $inputs['is_active'];
        $member->save();
    }

    public function destroy($member)
    {        
        $member->delete();
    }

}
