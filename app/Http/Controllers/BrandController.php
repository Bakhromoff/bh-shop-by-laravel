<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brands.create');
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
            'name' => 'required|max:30',
            'image' => 'required|mimes:jpg,png,jpeg,svg,avif|max:2048'
        ]);
        $brand = new Brand;
        $brand->name = $request->name;
        $image = md5(time().rand(1,999)).'.'.$request->file('image')->extension();
        $request->file('image')->storeAs('public/brand_images/', $image);
        $brand->image = $image;
        $brand->save();
        return redirect()->route('brands.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        return view('admin.brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $request->validate([
            'name' => 'required|max:30',
        ]);
        $brand->name = $request->name;
        if($request->has('image')) {
            $request->validate([
                'image' => 'required|mimes:jpg,png,jpeg,svg,avif|max:2048',
            ]);
            $new_image = md5(time().rand(1,999)).'.'.$request->file('image')->extension();
            $request->file('image')->storeAs('public/brand_images/', $new_image);
            if($request->file('image')->storeAs('public/brand_images/', $new_image)) {
                if(file_exists('storage/brand_images/'.$brand->image)) {
                    unlink('storage/brand_images/'.$brand->image);
                }
            }
            $brand->image = $new_image;
        }
        $brand->save();
        return redirect()->route('brands.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        if(file_exists('storage/brand_images/'.$brand->image)) {
            unlink('storage/brand_images/'.$brand->image);
        }
        return redirect()->back();
    }
}
