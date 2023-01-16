<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Ad::all();
        return view('admin.ads.index', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ads.create');
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
            'image' => 'required|mimes:jpg,png,jpeg,svg,avif|max:8192',
        ]);
        $ad = new Ad;
        $image = md5(time().rand(1,999)).'.'.$request->file('image')->extension();
        $request->file('image')->storeAs('public/ads_images/', $image);
        $ad->image = $image;
        $ad->save();
        return redirect()->route('ads.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function show(Ad $ad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function edit(Ad $ad)
    {

        return view('admin.ads.edit', compact('ad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ad $ad)
    {
        if($request->has('image')) {
            $request->validate([
                'image' => 'required|mimes:jpg,png,jpeg,svg,avif|max:8192',
            ]);
            $new_image = md5(time().rand(1,9999)).'.'.$request->file('image')->extension();
            $request->file('image')->storeAs('public/ads_images/', $new_image);
            if($request->file('image')->storeAs('public/ads_images/', $new_image)) {
                if(file_exists('storage/ads_images/'.$ad->image)) {
                    unlink('storage/ads_images/'.$ad->image);
                }
            }
            $ad->image = $new_image;
        }
        $ad->save();
        return redirect()->route('ads.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ad $ad)
    {
        $ad->delete();
        if(file_exists('storage/ads_images/'.$ad->image)) {
            unlink('storage/ads_images/'.$ad->image);
        }
        return redirect()->back();
    }
}
