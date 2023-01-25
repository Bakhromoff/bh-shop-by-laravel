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
        return redirect()->back()->withErrors(['alert' => 'Mahsulot saralanganlarga qo`shildi!']);
        } else {
            $check_wish->delete();
            return redirect()->back()->withErrors(['alert' => 'Mahsulot saralanganlardan o`chirildi!']);
        }


    }
    public function destroy(Product $product) {
            Wish::where('user_id', \Auth::user()->id)->where('product_id', $product->id)->delete();
            return redirect()->back()->withErrors(['alert' => 'Mahsulot saralanganlardan o`chirildi!']);
    }
}
