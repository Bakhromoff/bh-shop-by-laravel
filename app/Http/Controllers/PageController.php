<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeadCategory;
use App\Models\Product;
use App\Models\Category;

class PageController extends Controller
{
    public function index(Request $request) {
        if ($request->has('search')) {
            $products = Product::where('name_uz', 'like', '%'.$request->search.'%')->orWhere('name_ru', 'like', '%'.$request->search.'%')->get();
        } else {
            $products = Product::all();
        }
        $categories = Category::all();
        $headcategories = HeadCategory::all();
        return view('index', compact('products', 'categories', 'headcategories'));
    }
    public function account() {
        return view('account');
    }
    public function admin() {
        return redirect()->route('categories.index');
    }
    public function wishlist() {
        return view('wishlist');
    }
}
