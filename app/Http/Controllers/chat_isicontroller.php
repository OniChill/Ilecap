<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\dosen_feed;
use App\dosen;
use App\mahasiswa;
use App\mahasiswa_feed;
use App\komentar_dosen;
use App\komentar_mhs;
use App\Post;
use App\kelas;
use App\detail_anggota_kelas;
class chat_isicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function isi(Request $request , $id)
    {
        if($request->session()->get('id_dosen')){
            $userId = $request->session()->get('id_dosen');
            $user = dosen::find($userId);
            $cek = 'dosen';
            $kls = kelas::orderBy('created_at', 'desc')->where('user_id',$userId)->get();
            $kls_mhs =detail_anggota_kelas::orderBy('created_at', 'desc')->where('user_id',$userId)->get();
            $nama_kelas= kelas::find($id);
        }elseif ($request->session()->get('id_mahasiswa')) {
            $userId = $request->session()->get('id_mahasiswa');
            $user = mahasiswa::find($userId);
            $cek = 'mahasiswa';
            $kls = kelas::orderBy('created_at', 'desc')->where('user_id',$userId)->get();
            $kls_mhs =detail_anggota_kelas::orderBy('created_at', 'desc')->where('user_id',$userId)->get();
            $nama_kelas= detail_anggota_kelas::find($id);
        }

    return view('Chat.chat',compact('user','kls','cek','nama_kelas','kls_mhs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
