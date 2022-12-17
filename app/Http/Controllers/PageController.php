<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('index');
    }
    public function account() {
        return view('account');
    }
    public function dashboard() {
        return view('admin.categories');
    }
}
