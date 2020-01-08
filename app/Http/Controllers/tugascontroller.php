<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\dosen;
use App\mahasiswa;
use App\kelas;
use App\detail_anggota_kelas;
use App\materi_dosen;
use App\tugas_dosen;
use App\data_tugas_mahasiswa;

use Session;


class tugascontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request , $id)
    {
        if($request->session()->get('id_dosen')){
            $userId = $request->session()->get('id_dosen');
            $user = dosen::find($userId);
            $cek = 'dosen';
            $kls = kelas::orderBy('created_at', 'desc')->where('user_id',$userId)->get();
            $kls_mhs =detail_anggota_kelas::orderBy('created_at', 'desc')->where('user_id',$userId)->get();
            $nama_kelas= kelas::find($id);
            $tugas=tugas_dosen::orderBy('created_at', 'desc')->where('dosen_id',$userId)->where('kelas_id',$id)->get();
          
            
        }elseif ($request->session()->get('id_mahasiswa')) {
            $userId = $request->session()->get('id_mahasiswa');
            $user = mahasiswa::find($userId);
            $cek = 'mahasiswa';
            $kls = kelas::orderBy('created_at', 'desc')->where('user_id',$userId)->get();
            $kls_mhs =detail_anggota_kelas::orderBy('created_at', 'desc')->where('user_id',$userId)->get();
            $nama_kelas= kelas::find($id);
            $tugas=tugas_dosen::orderBy('created_at', 'desc')->where('kelas_id',$id)->get();
            
    }
    return view('tugas.tugas',compact('user','kls','cek','nama_kelas','kls_mhs','tugas'));
}

    
    public function indexadd(Request $request,$id)
    {
        if($request->session()->get('id_dosen')){
            $userId = $request->session()->get('id_dosen');
            $user = dosen::find($userId);
            $cek = 'dosen';
            $kls = kelas::orderBy('created_at', 'desc')->where('user_id',$userId)->get();
            $kls_mhs =detail_anggota_kelas::orderBy('created_at', 'desc')->where('user_id',$userId)->get();
            $nama_kelas= kelas::find($id);
            $tugas=tugas_dosen::orderBy('created_at', 'desc')->where('dosen_id',$userId)->where('kelas_id',$id)->get();
          
            
        }elseif ($request->session()->get('id_mahasiswa')) {
            $userId = $request->session()->get('id_mahasiswa');
            $user = mahasiswa::find($userId);
            $cek = 'mahasiswa';
            $kls = kelas::orderBy('created_at', 'desc')->where('user_id',$userId)->get();
            $kls_mhs =detail_anggota_kelas::orderBy('created_at', 'desc')->where('user_id',$userId)->get();
            $nama_kelas= kelas::find($id);
            $tugas=tugas_dosen::orderBy('created_at', 'desc')->where('kelas_id',$id)->get();
               
    }
    return view('tugas.tugasadd',compact('user','kls','cek','nama_kelas','kls_mhs','tugas'));
}

public function showdata(Request $request,$id)
{
    if($request->session()->get('id_dosen')){
        $userId = $request->session()->get('id_dosen');
        $user = dosen::find($userId);
        $cek = 'dosen';
        $kls = kelas::orderBy('created_at', 'desc')->where('user_id',$userId)->get();
        $kls_mhs =detail_anggota_kelas::orderBy('created_at', 'desc')->where('user_id',$userId)->get();
        $nama_kelas= kelas::find($id);
        $tugas=tugas_dosen::orderBy('created_at', 'desc')->where('dosen_id',$userId)->where('kelas_id',$id)->get();
        $data_tugas = data_tugas_mahasiswa::where('kelas_id',$id)->get();
      
        
    }elseif ($request->session()->get('id_mahasiswa')) {
        $userId = $request->session()->get('id_mahasiswa');
        $user = mahasiswa::find($userId);
        $cek = 'mahasiswa';
        $kls = kelas::orderBy('created_at', 'desc')->where('user_id',$userId)->get();
        $kls_mhs =detail_anggota_kelas::orderBy('created_at', 'desc')->where('user_id',$userId)->get();
        $nama_kelas= kelas::find($id);
        $tugas=tugas_dosen::orderBy('created_at', 'desc')->where('kelas_id',$id)->get();
        $data_tugas = data_tugas_mahasiswa::where('kelas_id',$id)->get();
}
return view('tugas.data',compact('user','kls','cek','nama_kelas','kls_mhs','tugas','data_tugas'));
}


public function indexjawab(Request $request,$id)
{
    if($request->session()->get('id_dosen')){
        $userId = $request->session()->get('id_dosen');
        $user = dosen::find($userId);
        $cek = 'dosen';
        $kls = kelas::orderBy('created_at', 'desc')->where('user_id',$userId)->get();
        $kls_mhs =detail_anggota_kelas::orderBy('created_at', 'desc')->where('user_id',$userId)->get();
        $nama_kelas= kelas::find($id);
        $tugas=tugas_dosen::orderBy('created_at', 'desc')->where('dosen_id',$userId)->where('kelas_id',$id)->get();
        $jawab =tugas_dosen::find($id);
        
    }elseif ($request->session()->get('id_mahasiswa')) {
        $userId = $request->session()->get('id_mahasiswa');
        $user = mahasiswa::find($userId);
        $cek = 'mahasiswa';
        $kls = kelas::orderBy('created_at', 'desc')->where('user_id',$userId)->get();
        $kls_mhs =detail_anggota_kelas::orderBy('created_at', 'desc')->where('user_id',$userId)->get();
        $nama_kelas= kelas::find($id);
        $tugas=tugas_dosen::orderBy('created_at', 'desc')->where('kelas_id',$id)->get();
        $jawab =tugas_dosen::find($id);
           
}
return view('tugas.jawab',compact('user','kls','cek','nama_kelas','kls_mhs','tugas','jawab'));
}


    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        tugas_dosen::create([
    		'dosen_id' => $request->iddsn,
            'kelas_id' => $request->idkls,
            'nama_tugas' => $request->tugas,
            'deskripsi' => $request->deskripsi,
         
        ]);
        return redirect()->back();     
    }


    public function storejawaban(Request $request)
    {
        data_tugas_mahasiswa::create([
            'id_tugas'=>$request->id,
    		'mahasiswa_id' => $request->iddsn,
            'kelas_id' => $request->idkls,
            'berkas' => $request->file('jawab')->store('jawaban'),
         
        ]);
       
        return redirect()->back();     
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
