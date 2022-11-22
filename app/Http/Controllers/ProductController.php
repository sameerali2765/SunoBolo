<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product()
    {
        return view ('Product.product');
    }

    public function product_detail()
    {
        return view ('Product.product-detail');
    }
}
