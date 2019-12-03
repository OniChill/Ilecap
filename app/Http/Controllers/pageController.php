<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function index()
    {
        return view('test');
    }

    public function test()
    {
        return view('chat.index');
    }
}
