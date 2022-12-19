<?php

namespace App\Http\Controllers;

use App\Models\HeadCategory;
use App\Models\Category;
use Illuminate\Http\Request;

class HeadCategoryController extends Controller
{
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
        return view('admin.headcategories.create');
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
            'name_ru' => 'required',
            'name_uz' => 'required',
            'emoji' => 'required',
        ]);
        HeadCategory::create($request->all());
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HeadCategory  $headCategory
     * @return \Illuminate\Http\Response
     */
    public function show(HeadCategory $headCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HeadCategory  $headCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(HeadCategory $headcategory)
    {
        return view('admin.headcategories.edit', compact('headcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HeadCategory  $headCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HeadCategory $headcategory)
    {
        $request->validate([
            'name_ru' => 'required|max:20',
            'name_uz' => 'required|max:20',
            'emoji' => 'required',
        ]);
        $headcategory->name_ru = $request->name_ru;
        $headcategory->name_uz = $request->name_uz;
        $headcategory->emoji = $request->emoji;
        $headcategory->save();
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HeadCategory  $headCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(HeadCategory $headcategory)
    {
        $categoriesCount = Category::where('head_category_id', $headcategory->id)->count();
        if($categoriesCount == 0) {
            $headcategory->delete();
            return redirect()->back();
        } else {
            return redirect()->back()->withErrors(['delete' => "Siz ushbu kategoriyani o`chira olmaysiz chunki Categories jadvalida bu kategoriyaga bog`liq ma`lumotlar bor"]);
        }
    }
}
