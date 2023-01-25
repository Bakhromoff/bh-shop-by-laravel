<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Information;

class CartController extends Controller
{
    public function store(Request $request, Product $product) {
        $cart = new Cart;
        if($request->cart) {
            if($request->cart > 0) {
            $cart->user_id = \Auth::user()->id;
            $cart->product_id = $product->id;
            $cart->count = $request->cart;
            $cart->save();
        } else {
            return redirect()
            ->back();
        }
        } else {
        $cart->user_id = \Auth::user()->id;
        $cart->product_id = $product->id;
        $cart->count = 1;
        $cart->save();
    }
        return redirect()->back()->withErrors(['alert' => 'Mahsulot savatga qo`shildi!']);
    }
    // public function update(Request $request, Product $product) {

    // }

    public function destroy(Product $product) {
        Cart::where('product_id', $product->id)->delete();
        return redirect()->back();
    }

}
