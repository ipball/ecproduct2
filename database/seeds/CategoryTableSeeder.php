<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data[0] = array('name'=>'Swift');
        $data[1] = array('name'=>'Regal');
        $data[2] = array('name'=>'Navigator');
        $data[3] = array('name'=>'Escalade ESV');
        $data[4] = array('name'=>'Land Cruiser');
        $data[5] = array('name'=>'Clubman');
        $data[6] = array('name'=>'Canyon');

        for($i=0; $i<7; $i++){
            DB::table('category')->insert($data[$i]);
        }
    }
}
