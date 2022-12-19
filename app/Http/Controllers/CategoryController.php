<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\HeadCategory;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $headcategories = HeadCategory::all();
        $categories = Category::all();
        return view('admin.categories.index', compact('headcategories', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $headcategories = HeadCategory::all();
        return view('admin.categories.create', compact('headcategories'));
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
            'name_ru' => 'required|max:20',
            'name_uz' => 'required|max:20',
            'emoji' => 'required',
            'head_category_id' => 'required',
        ]);
        Category::create($request->all());
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $headcategories = HeadCategory::all();
        return view('admin.categories.edit', compact('category', 'headcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name_ru' => 'required|max:20',
            'name_uz' => 'required|max:20',
            'emoji' => 'required',
            'head_category_id' => 'required',
        ]);
        $category->name_ru = $request->name_ru;
        $category->name_uz = $request->name_uz;
        $category->emoji = $request->emoji;
        $category->head_category_id = $request->head_category_id;
        $category->save();
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $products = Product::where('category_id', $category->id)->count();
        if($products == 0) {
            $category->delete();
            return redirect()->back();
        } else {
            return redirect()->back()->withErrors(['delete' => "Siz ushbu kategoriyani o`chira olmaysiz chunki Products jadvalida bu kategoriyaga bog`liq ma`lumotlar bor"]);
        }
    }
}
