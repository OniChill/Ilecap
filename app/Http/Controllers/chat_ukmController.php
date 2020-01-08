<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\dosen;
use App\mahasiswa;
use App\kelas;
use App\detail_anggota_kelas;
use App\chat_ukm;
use App\data_angota_ukm;

class chat_ukmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request , $id,$ukm_id)
    {
        
        if($request->session()->get('id_dosen')){
            $userId = $request->session()->get('id_dosen');
            $user = dosen::find($userId);
            $cek = 'dosen';
            $ukm = data_angota_ukm::find($id);
            $chat = chat_ukm::orderBy('created_at', 'asc')->where('anggota_id',$id)->where('ukm_id',$ukm_id)->get();
           
        }elseif ($request->session()->get('id_mahasiswa')) {
            $userId = $request->session()->get('id_mahasiswa');
            $user = mahasiswa::find($userId);
            $cek = 'mahasiswa';
            $ukm =data_angota_ukm::find($ukm_id);
            $chat = chat_ukm::orderBy('created_at', 'asc')->where('anggota_id',$id)->where('ukm_id',$ukm_id)->get();
        }

    return view('Chat.chat_ukm',compact('user','cek','ukm','chat'));
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
