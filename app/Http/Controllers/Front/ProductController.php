<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;

class ProductController extends Controller
{
    protected $product_gestion;

    public function __construct(
        ProductRepository $product_gestion) {
        $this->product_gestion = $product_gestion;
    }

    public function view($id)
    {
        $product = $this->product_gestion->getById($id);
        return view('front.product.view', [
            'product' => $product,
        ]);
    }

}
