<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dosen;
use App\mahasiswa;
use App\admin;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        if($request->session()->get('id_dosen')){
            return  redirect('/sosmed');
        }elseif ($request->session()->get('id_mahasiswa')) {
            return  redirect('/sosmed');
        }
        return view('Login.login');
    }
    public function login(Request $request)
    {
        $id = $request->id;
        $pass = $request->pass;
        if ( count(dosen::where(['id'=>$id,'password'=>$pass])->get()) > 0 ) {
            $request->session()->put('id_dosen',$id);
            return redirect('/sosmed');
        }elseif(count(mahasiswa::where(['id'=>$id,'password'=>$pass])->get()) > 0 ){
            $request->session()->put('id_mahasiswa',$id);
            return  redirect('/sosmed');
        }elseif(count(admin::where(['username'=>$id,'pass'=>$pass])->get()) > 0 ){
            $request->session()->put('admin',$id);
            return  redirect('/dosen');
        }else{
            dd('anda siapa login" sembarangan');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('id_dosen');
        $request->session()->forget('id_mahasiswa');
        return redirect('login1');
    }
}
