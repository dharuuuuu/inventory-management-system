<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max: 255',
            'message' => 'required',
        ]);

        Message::create($request->all());

        return redirect('/')->with('success', 'Message sent successfully.');
    }
}