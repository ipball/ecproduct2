<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data[0] = array(
            'username' => 'sompong',
            'password' => bcrypt('123456'),
            'name' => 'สมปอง สุขใจ',
            'tel' => '09833221398',
            'address' => '47/9 หมู่ 88 ต. หนองจงอาง',
            'district' => 'เมือง',
            'province' => 'กรุงเทพมหานคร',
            'postcode' => '12110',
            'email' => 'sompong@bahtsoft.com',
        );
        $data[1] = array(
            'username' => 'somchai',
            'password' => bcrypt('123456'),
            'name' => 'สมชาย อารมณ์ดี',
            'tel' => '0870122558',
            'address' => '98/36 หมู่ 85 ต. สะพานใหม่',
            'district' => 'นิเวศน์วิทย์',
            'province' => 'กรุงเทพมหานคร',
            'postcode' => '12190',
            'email' => 'somchai@bahtsoft.com',
        );
        for($i=0; $i<2; $i++){
            DB::table('members')->insert($data[$i]);
        }
    }
}
