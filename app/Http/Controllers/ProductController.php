<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->paginate(10);
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_ru' => 'required|max:70',
            'name_uz' => 'required|max:70',
            'description_ru' => 'required',
            'description_uz' => 'required',
            'price' => 'required',
            'category_id' => 'required|numeric',
            'image' => 'required|mimes:jpg,png,jpeg,svg|max:4096',
        ]);
            $product = new Product;
            $product->name_ru = $request->name_ru;
            $product->name_uz = $request->name_uz;
            $product->description_ru = $request->description_ru;
            $product->description_uz = $request->description_uz;
            $product->price = $request->price;
            $product->category_id = $request->category_id;
            if($request->has('sale')) {
                $product->isSale = 1;
            } else {
                $product->isSale = 0;
            }
            if($request->has('discount')) {
                $product->discount = $request->discount;
            }
            $image = md5(microtime().rand(1,999)).'.'.$request->file('image')->extension();
            $request->file('image')->storeAs('public/product_images/', $image);
            $product->image = $image;
            $product->save();
            return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact('categories', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name_ru' => 'required|max:70',
            'name_uz' => 'required|max:70',
            'description_ru' => 'required',
            'description_uz' => 'required',
            'price' => 'required',
            'category_id' => 'required|numeric',
            $request->has('image') ? "'image' => 'required|mimes:jpg,png,jpeg,svg|max:4096'," : ""
        ]);
            if($product->price != $request->price) {
                $product->old_price = $product->price;
            }
            $product->name_ru = $request->name_ru;
            $product->name_uz = $request->name_uz;
            $product->description_ru = $request->description_ru;
            $product->description_uz = $request->description_uz;
            $product->price = $request->price;
            $product->category_id = $request->category_id;
            if($request->has('sale')) {
                $product->isSale = 1;
            } else {
                $product->isSale = 0;
            }
            if($request->has('discount')) {
                $product->discount = $request->discount;
            }
            if($request->has('image')) {
                $image = md5(microtime().rand(1,999)).'.'.$request->file('image')->extension();
            $request->file('image')->storeAs('public/product_images/', $image);
            if($request->file('image')->storeAs('public/product_images/', $image)) {
                if(file_exists('storage/product_images/'.$product->image)) {
                    unlink('storage/product_images/'.$product->image);
                }
            }
            $product->image = $image;
            }

            $product->save();
            return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        if(file_exists('storage/product_images/'.$product->image)) {
            unlink('storage/product_images/'.$product->image);
        }
        return redirect()->back();

    }
}
