<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Card;

class CardController extends Controller
{
    public function store(Request $request, Product $product) {
        $card = new Card;
        if($request->has('card')) {
            if($request->card > 0) {
            $card->user_id = \Auth::user()->id;
            $card->product_id = $product->id;
            $card->count = $request->card;
            $card->save();
        } else {
            return redirect()
            ->back();
        }
        } else {
        $card->user_id = \Auth::user()->id;
        $card->product_id = $product->id;
        $card->count = 1;
        $card->save();
    }
        return redirect()->back()->withErrors(['alert' => 'The product added to card successfully!']);
    }

    public function destroy(Product $product) {
        Card::where('product_id', $product->id)->delete();
        return redirect()->back();
    }
}
