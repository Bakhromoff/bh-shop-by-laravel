<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Wish;

class WishController extends Controller
{
    public function store(Product $product)
    {
        $check_wish = Wish::where('user_id', \Auth::user()->id)->where('product_id', $product->id);
        if($check_wish->count() === 0) {
            $wish = new Wish;
        $wish->user_id = \Auth::user()->id;
        $wish->product_id = $product->id;
        $wish->save();
        return redirect()->back()->withErrors(['alert' => 'The product added to wishlist successfully!']);
        } else {
            $check_wish->delete();
            return redirect()->back()->withErrors(['alert' => 'The product removed from wishlist!']);
        }


    }
    public function destroy(Product $product) {

    }
}
