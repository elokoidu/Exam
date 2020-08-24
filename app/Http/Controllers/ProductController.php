<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $this->validate($request, array(
            'name' => 'bail|required|unique:products,name|max:255',
            'price' => 'required|numeric',
            'code' => 'required|numeric|unique:products,code',
            'details' => 'required|max:255',
            'manufacturer' => 'required|max:255',
            'slug' => 'required|max:25|unique:products,slug|unique:products,id',
            'image' => 'nullable|mimes:jpeg,jpg,png|max:1024',
            'category' => 'integer|between:0,' . (count(config('enums.categories')) - 1),
        ));

        $product = new Product;

        $product->name = $request->name;
        $product->price = $request->price;
        $product->code = $request->code;
        $product->details = $request->details;
        $product->manufacturer = $request->manufacturer;
        $product->category = config('enums.categories')[$request->category];
        $product->slug = $request->slug;

        $product->save();

        if ($request->image) {
          $extension = $request->image->extension();
          $path = $product->id . '.' . $extension;
          $request->image->storeAs('upload', $path, 'public');
          $product->image = $path;
          $product->save();
        }

        // Session::flash('success', 'The product was saved!');

        return redirect()->route('products.show', $product->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        if (!$product) $product = Product::firstWhere('slug', $id);

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
        $product = Product::find($id);
        $rules = [
          'details' => 'required|max:255',
          'manufacturer' => 'required|max:255',
          'image' => 'nullable|mimes:jpeg,jpg,png|max:1024'
        ];

        if ($product->code != $request->code) $rules['code'] = 'required|numeric|unique:products,code';
        if ($product->category != $request->category) $rules['category'] = 'integer|between:0,' . (count(config('enums.categories')) - 1);

        $validatedData = $this->validate($request, $rules);

        if ($product->code != $request->code) $product->code = $request->code;
        if ($product->details != $request->details) $product->details = $request->details;
        if ($product->manufacturer != $request->manufacturer) $product->manufacturer = $request->manufacturer;
        if ($product->category != $request->category) $product->category = config('enums.categories')[$request->category];

        if ($request->image) {
          $extension = $request->image->extension();
          $path = $product->id . '.' . $extension;
          $request->image->storeAs('upload', $path, 'public');
          $product->image = $path;
        }

        $product->save();

        // Session::flash('success', 'The product was saved!');

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
