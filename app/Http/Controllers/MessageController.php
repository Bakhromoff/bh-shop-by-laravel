<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function index() {
        $messages = Message::all();
        return view('admin.messages', compact('messages'));
    }
    public function store(Request $request) {
        $request->validate([
            'customerName' => 'required',
            'customerEmail' => 'required',
            'contactMessage' => 'required',
        ]);
            Message::create($request->all());
            return redirect()->back()->withErrors(['alert' => 'Xabaringiz muvaffaqiyatli yuborildi!']);
    }
}
