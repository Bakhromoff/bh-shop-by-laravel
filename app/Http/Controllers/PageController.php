<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeadCategory;
use App\Models\Product;
use App\Models\Wish;
use App\Models\Category;
use App\Models\Ad;
use App\Models\Cart;
use App\Models\Brand;
use App\Models\Information;
use App\Models\User;

class PageController extends Controller
{
    public function index(Request $request) {
        $products = Product::all();
        $categories = Category::all();
        $headcategories = HeadCategory::all();
        $ads = Ad::all();
        $brands = Brand::orderBy('id', 'desc')->get();
        return view('index', compact('products', 'categories', 'headcategories', 'ads', 'brands'));
    }
    public function account() {
        return view('account');
    }
    public function admin() {
        $info = Information::first();
        return view('admin.index', compact('info'));
    }
    public function wishes() {
        $wishes = Wish::where('user_id', \Auth::user()->id)->get();
        $products = Product::all();
        return view('wishlist', compact('products', 'wishes'));
    }
    public function cart(Request $request) {
        $info = Information::first();
        $discount = 0;
        if($request) {
            if($request->coupon === $info->coupon) {
                $discount = 5000;
            }
        }
        $carts = Cart::all();
        $products = Product::all();
        return view('cart', compact('products', 'carts', 'discount'));
    }
    public function singleproduct(Product $product) {
        return view('singleproduct', compact('product'));
    }
    public function brand_products(Brand $brand) {
        $products = Product::where('name_uz', 'like', '%'.$brand->name.'%')->orWhere('name_ru', 'like', '%'.$brand->name.'%')->get();
        return view('brand_products', compact('products'));
    }
    public function search(Request $request) {
            $products = Product::where('name_uz', 'like', '%'.$request->name.'%')->orWhere('name_ru', 'like', '%'.$request->name.'%')->get();
            return view('search', compact('products'));
    }
    public function users() {
        $users = User::where('role', '!=', 'admin')->orderBy('id', 'DESC')->get();
        return view('admin.users', compact('users'));
    }
    public function contact() {
        $info = Information::first();
        return view('contact', compact('info'));
    }
}
