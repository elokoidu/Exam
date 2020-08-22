<?php

namespace App\Http\Controllers;


class PagesController extends Controller {
    public  function getIndex() {
        return view('pages.welcome');
    }
    public function getProduct() {
        return view('pages.product');
    }
    public function getDetail() {
        return view('pages.detail');
    }
}
