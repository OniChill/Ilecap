<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\dosen;
use App\mahasiswa;
use App\kelas;
use App\detail_anggota_kelas;
use App\chat_kelas;
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
            $chat = chat_kelas::orderBy('created_at', 'asc')->where('user_id',$userId)->where('kelas_id',$id)->get();
            $chat_all = chat_kelas::orderBy('created_at', 'asc')->where('kelas_id',$id)->where('user_id','!=',$userId)->get();
            
        }elseif ($request->session()->get('id_mahasiswa')) {
            $userId = $request->session()->get('id_mahasiswa');
            $user = mahasiswa::find($userId);
            $cek = 'mahasiswa';
            $kls = kelas::orderBy('created_at', 'desc')->where('user_id',$userId)->get();

            $kls_mhs =detail_anggota_kelas::orderBy('created_at', 'desc')->where('user_id',$userId)->get();
            $nama_kelas= kelas::find($id);
            
            $chat = chat_kelas::orderBy('created_at', 'asc')->where('user_id',$userId)->where('kelas_id',$id)->get();
            $chat_all = chat_kelas::orderBy('created_at', 'asc')->where('kelas_id',$id)->where('user_id','!=',$userId)->get();
        }

    return view('Chat.chat',compact('user','kls','cek','nama_kelas','kls_mhs','chat','chat_all'));
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
        chat_kelas::create([
            'kelas_id'=> $request->klsid,
          'user_id' => $request->id,
            'chat' =>$request->pesan,
            'nama' =>$request->nama,
        ]);
        
    return Redirect()->back();
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
