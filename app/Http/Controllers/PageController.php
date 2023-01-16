<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeadCategory;
use App\Models\Product;
use App\Models\Wish;
use App\Models\Category;
use App\Models\Ad;

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
        $ads = Ad::all();
        return view('index2', compact('products', 'categories', 'headcategories', 'ads'));
    }
    public function account() {
        return view('account');
    }
    public function admin() {
        return redirect()->route('categories.index');
    }
    public function wishes() {
        $wishes = Wish::where('user_id', \Auth::user()->id)->get();
        $products = Product::all();
        return view('wishlist', compact('products', 'wishes'));
    }
    public function cart() {
        return view('cart');
    }
}
