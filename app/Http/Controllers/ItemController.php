<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function getDetail($slug) {
        $product = Product::where('slug', $slug)->where('status', true)->firstorfail();;

        return view('products.show')->withProduct($product);
    }
}
