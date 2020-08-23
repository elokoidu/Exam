<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\View;

class PagesController extends Controller {
    public  function getIndex() {
        $product = Product::orderBy('id', 'desc')->limit(20)->get();
        return view('pages.welcome')->withProducts($product);
    }
    public function getProduct() {
        return view::make('pages.product', ['products' => $products]);
    }
    public function getDetail() {
        $products = Product::first()->paginate(18)->get();
        return view::make('pages.detail', ['products' => $products]);
    }
}
