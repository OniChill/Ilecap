<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dosen;
use App\mahasiswa;
class LoginController extends Controller
{
    public function index()
    {
        return view('Login.login');
    }
    public function login(Request $request)
    {
        $id = $request->id;
        $pass = $request->pass;
        if ( count(dosen::where(['id'=>$id,'password'=>$pass])->get()) > 0 ) {
            $request->session()->put('id_dosen',$id);
            return redirect('/chat');
        }elseif(count(mahasiswa::where(['id'=>$id,'password'=>$pass])->get()) > 0 ){
            $request->session()->put('id_mahasiswa',$id);
            return  redirect('/chat');
        }else{
            dd('anda siapa login" sembarangan');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('id_dosen');
        return redirect('login1');
    }
}
