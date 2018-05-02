<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;

class HomeController extends Controller
{
    protected $product_gestion;

    public function __construct(
        ProductRepository $product_gestion) {
        $this->product_gestion = $product_gestion;
    }

    public function index()
    {
        $products = $this->product_gestion->getAllActive();
        return view('front.index', [
            'products' => $products,
        ]);
    }

}
