<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use App\Models\Cart;
use App\Models\Product;
use App\Models\OrderProduct;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        $products = Product::all();
        return view('admin.orders.index', compact('orders', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        $request->validate([
            'address' => 'required',
            'phone' => 'required',
        ]);
        $order = new Order;
        $order->user_id = \Auth::user()->id;
        $order->user_address = $request->address;
        $order->user_phone = $request->phone;
        $order->user_order_summary = $request->summary;
        $order->user_order_status = 0;
        $order->user_paid_status = 0;
        $order->user_order_products = \Auth::user()->carts->pluck('product_id')->toArray();
        $order->user_product_counts = \Auth::user()->carts->pluck('count')->toArray();
        $order->save();
        Cart::where('user_id', \Auth::user()->id)->delete();
        return redirect()->route('index')->withErrors(['alert' => 'Xaridingiz tasdiqlandi!']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $order->user_order_status = $request->order_status;
        $order->user_paid_status = $request->paid_status;
        $order->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
