<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeadCategory;

class PageController extends Controller
{
    public function index() {
        return view('index');
    }
    public function account() {
        return view('account');
    }
    public function admin() {
        return redirect()->route('categories.index');
    }
}
