<?php

namespace App\Http\Controllers\BackOffice;

use App\Http\Controllers\Controller;
use App\Models\CategoryProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['product'] = Product::latest()->get();
        return view('backoffice.product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['category'] = CategoryProduct::all();
        return view('backoffice.product.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'image' => 'mimes:jpg,jpeg,png|max:2048'
            ],
        );
        $filename = "";
        $key =  Str::random(10);

        if ($request->image <> "") {
            $file = $request->image;
            $filename = 'assets/product' . '/' . $key . '.' . $file->extension();
            $file->move(public_path('assets/product'), $filename);
        }
        $data = $request->all();
        $data['slug'] = Str::slug($request->name_product);
        $data['image'] = $filename;
        Product::create($data);

        return redirect()->route('product.index')->with('success', 'Success Create Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $data['category'] = CategoryProduct::all();
        $data['product'] = $product;
        return view('backoffice.product.edit', $data);
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
    public function update(Request $request, Product $product)
    {
        $rules = [
            'name_product' => 'required|max:255',
        ];

        if ($request->slug != $product->slug) {
            $rules['slug'] = 'unique:products';
        }
        $filename = $product->image;
        $key =  Str::random(10);

        if ($request->image <> "") {
            $file = $request->image;
            $filename = 'assets/product' . '/' . $key . '.' . $file->extension();
            $file->move(public_path('assets/product'), $filename);
        }

        $validatedData = $request->validate($rules);
        $validatedData['slug'] = Str::slug($request->name_product);
        $validatedData['image'] = $filename;

        Product::where('id', $product->id)
            ->update($validatedData);
        return redirect()->route('product.index')->with('success', 'Product updated succesfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Success Delete Data');
    }
}
