<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Card;

class CardController extends Controller
{
    public function store(Product $product) {
        $card = new Card;
        $card->user_id = \Auth::user()->id;
        $card->product_id = $product->id;
        $card->save();
        return redirect()->back()->withErrors(['alert' => 'The product added to card successfully!']);
    }
}
