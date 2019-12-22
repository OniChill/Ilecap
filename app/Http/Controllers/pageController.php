<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function index()
    {
        return view('sosmed.home');
    }

    public function test()
    {
        return view('sosmed.index');
    }
}
