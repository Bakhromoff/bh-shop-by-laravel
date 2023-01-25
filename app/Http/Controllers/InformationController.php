<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;

class InformationController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'phone' => 'required',
            'email' => 'required',
            'address_uz' => 'required',
            'address_ru' => 'required',
            'coupon' => 'required',
        ]);
        $info = new Information;
        $info->phone = $request->phone;
        $info->email = $request->email;
        $info->address_uz = $request->address_uz;
        $info->address_ru = $request->address_ru;
        $info->coupon = $request->coupon;
        $info->save();
        return redirect()->back()->withErrors(['save' => "Saqlandi"]);
    }
    public function update(Information $info, Request $request) {
        $request->validate([
            'phone' => 'required',
            'email' => 'required',
            'address_uz' => 'required',
            'address_ru' => 'required',
            'coupon' => 'required',
        ]);
        $info->phone = $request->phone;
        $info->email = $request->email;
        $info->address_uz = $request->address_uz;
        $info->address_ru = $request->address_ru;
        $info->coupon = $request->coupon;
        $info->save();
        return redirect()->back()->withErrors(['save' => "Saqlandi"]);
    }
}
