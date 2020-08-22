<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use MongoDB\Driver\Session;

class ProductController extends Controller
{
    public function _construct() {
        $this->middleware('auth');
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'nimi' => 'required',
            'hind' => 'required',
            'tootekood' => 'required',
            'tootefoto' => 'required',
            'naitajad' => 'naitajad',
            'tootja' => 'required',
            'kategooria' => 'required',
        ));

        $product = new Product;

        $product->nimi = $request->nimi;
        $product->hind = $request->hind;
        $product->tootekood = $request->tootekood;
        $product->tootefoto = $request->tootefoto;
        $product->naitajad = $request->naitajad;
        $product->tootja = $request->tootja;
        $product->kategooria = $request->kategooria;
        error_log($product);
        die();
        $product->save();

        Session::flash('success', 'The product was saved!');

        return redirect()->route('products.show', $product->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show($id)
    {
        return view('products.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
