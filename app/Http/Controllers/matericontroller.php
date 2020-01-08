<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;    
use App\dosen;
use App\mahasiswa;
use App\kelas;
use App\detail_anggota_kelas;
use App\materi_dosen;

use Session;
class matericontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id)
    {
     
            if($request->session()->get('id_dosen')){
                $userId = $request->session()->get('id_dosen');
                $user = dosen::find($userId);
                $cek = 'dosen';
                $kls = kelas::orderBy('created_at', 'desc')->where('user_id',$userId)->get();
                $nama_kelas= kelas::find($id);
                $users= mahasiswa::all();
                $dosen_materi= materi_dosen::where('kelas_id',$id)->get();
               
            }elseif ($request->session()->get('id_mahasiswa')) {
                $userId = $request->session()->get('id_mahasiswa');
                $user = mahasiswa::find($userId);
                $cek = 'mahasiswa';
                $kls = kelas::orderBy('created_at', 'desc')->where('user_id',$userId)->get();
                $nama_kelas= kelas::find($id);
                $users= mahasiswa::all();
                $dosen_materi= materi_dosen::where('kelas_id',$id)->get();
            }
           
            return view('materi.materi',compact('user','kls','cek','nama_kelas','users','dosen_materi'));
        
    }

    public function indexadd(Request $request,$id)
    {
     
            if($request->session()->get('id_dosen')){
                $userId = $request->session()->get('id_dosen');
                $user = dosen::find($userId);
                $cek = 'dosen';
                $kls = kelas::orderBy('created_at', 'desc')->where('user_id',$userId)->get();
                $nama_kelas= kelas::find($id);
                $users= mahasiswa::all();
                $materidsn= materi_dosen::find($id);

            }elseif ($request->session()->get('id_mahasiswa')) {
                $userId = $request->session()->get('id_mahasiswa');
                $user = mahasiswa::find($userId);
                $cek = 'mahasiswa';
                $kls = kelas::orderBy('created_at', 'desc')->where('user_id',$userId)->get();
                $nama_kelas= kelas::find($id);
            }
           
        return view('materi.materi_add',compact('user','kls','cek','nama_kelas','users','materidsn'));
        
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
        
      if($request->hasFile('materi') ){
        materi_dosen::create([
    		'dosen_id' => $request->iddsn,
            'kelas_id' => $request->idkls,
            'materi' => $request->file('materi')->store('materis'),
            'judul_materi' => $request->judul,
            'jenis_file'=>$request->file('materi')->getClientOriginalExtension()
        ]);
        return redirect()->back();
      }
      else{
        Echo "gagal";
      }
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
