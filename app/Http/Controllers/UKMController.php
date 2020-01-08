<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ukm;

class UKMController extends Controller
{
    public function index(){
        $ukm = ukm::paginate(7);
        return view('ukm.index',['ukm'=>$ukm]);
    }
}
