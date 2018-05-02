<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository extends BaseRepository
{    
    public function __construct(Product $product)
    {
        $this->model = $product;        
    }

    private function store($inputs, $id)
    {
        $data->barcode = $inputs['barcode'];
        $data->name = $inputs['name'];
        $data->brand = $inputs['brand'];
        $data->price = $inputs['price'];
        $data->quantity = $inputs['quantity'];
        $data->image = $inputs['image'];
        $data->detail = $inputs['detail'];        
        $data->category_id = $inputs['category_id'];
        $data->id = $id;
        $data->save();
    }    

    public function updateActive($inputs, $id)
    {
        $product = $this->getById($id);
        $product->is_active = $inputs['is_active'];
        $product->save();
    }

    public function updateQuantity($inputs, $id)
    {
        $product = $this->getById($id);
        $product->quantity += $inputs['quantity'];
        $product->save();
    }

    public function destroy($product)
    {        
        $product->delete();
    }

    public function getAllActive()
    {
        return $this->model->where('is_active', true)->get();
    }

}
