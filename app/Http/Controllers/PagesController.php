<?php

namespace App\Http\Controllers;

use App\Product;

class PagesController extends Controller {
    public  function getIndex() {
        $products = Product::orderBy('id', 'desc')->limit(20)->get();
        return view('pages.welcome')->withProducts($products);
    }
    public function getProduct() {
        return view('pages.product');
    }
    public function getDetail() {
        return view('pages.detail');
    }
}
