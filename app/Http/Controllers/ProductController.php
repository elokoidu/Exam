<?php

namespace App\Http\Controllers;

use App\Post;
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
        $products = Product::orderBy('id', 'desc')->paginate(20);
        return view('products.index')->withProducts($products);
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
            'tootja' => 'required',
            'kategooria' => 'required',
            'slug' => 'required|alpha_dash',
        ));

        $product = new Product;

        $product->nimi = $request->nimi;
        $product->hind = $request->hind;
        $product->tootekood = $request->tootekood;
        $product->tootefoto = $request->tootefoto;
        $product->naitajad = $request->naitajad;
        $product->tootja = $request->tootja;
        $product->kategooria = $request->kategooria;
        $product->slug = $request->slug;

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
        $product = Product::find($id);
        return view('products.show')->withProduct($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit')->withProduct($product);
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
        $this->validate($request, array(
            'tootekood' => 'required',
            'tootefoto' => 'required',
            'tootja' => 'required',
            'kategooria' => 'required',
        ));
        $product = Product::find($id);

        $product->tootekood = $request->input('tootekood');
        $product->tootefoto = $request->input('tootefoto');
        $product->näitajad = $request->input('näitajad');
        $product->tootja = $request->input('tootja');
        $product->kategooria = $request->input('kategooria');

        $product->save();

        return redirect()->route('products.show', $product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index');
    }
}
