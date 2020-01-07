<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dosen_feed;
use App\dosen;
use App\mahasiswa;
use App\mahasiswa_feed;
use App\tb_feed;
use App\ukm;
use App\like;

use App\komentar;

class SosMedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->session()->get('id_dosen')){
            $userId = $request->session()->get('id_dosen');
            $user = dosen::find($userId);
        }elseif ($request->session()->get('id_mahasiswa')) {
            $userId = $request->session()->get('id_mahasiswa');
            $user = mahasiswa::find($userId);
        }
        
        $feed = tb_feed::orderBy('created_at','desc')->get();

        //mengurutkan feed dari tanggal terbaru
        // $dosen_feed = dosen_feed::orderBy('created_at', 'desc')->join('dosen','dosen_feed.dosen_id','dosen.id')->select('dosen_feed.created_at','dosen_feed.id as id','dosen_id','feed','gambar','like','dosen.nama as nama')->get()->toArray();
        // $mahasiswa_feed = mahasiswa_feed::orderBy('created_at', 'desc')->join('mahasiswa','mahasiswa_feed.mahasiswa_id','mahasiswa.id')->select('mahasiswa_feed.created_at','mahasiswa_feed.id as id','mahasiswa_id','feed','gambar','like','mahasiswa.nama as nama')->get()->toArray();
        // $feedMerge = array_merge($dosen_feed,$mahasiswa_feed);
        // rsort($feedMerge);
        
        
        return view('sosmed.home',compact('feed','user'));
    }

    public function pengumuman(Request $request)
    {
       
        if($request->session()->get('id_dosen')){
            $userId = $request->session()->get('id_dosen');
            $user = dosen::find($userId);
        }elseif ($request->session()->get('id_mahasiswa')) {
            $userId = $request->session()->get('id_mahasiswa');
            $user = mahasiswa::find($userId);
        }
        
        $feed = tb_feed::orderBy('created_at','desc')->where('pengumuman','1')->get();
        return view('sosmed.pengumuman',compact('feed','user'));
    }

    public function ukm(Request $request)
    {
        if($request->session()->get('id_dosen')){
            $userId = $request->session()->get('id_dosen');
            $user = dosen::find($userId);
        }elseif ($request->session()->get('id_mahasiswa')) {
            $userId = $request->session()->get('id_mahasiswa');
            $user = mahasiswa::find($userId);
        }
        
        $feed = ukm::orderBy('created_at','desc')->get();
        return view('sosmed.ukm',compact('feed','user'));
    }

    public function UserFeed(Request $request)
    {
        if($request->session()->get('id_dosen')){
            $userId = $request->session()->get('id_dosen');
            $user = dosen::find($userId);
            $cek = 'dosen';
            $feed = tb_feed::orderBy('created_at', 'desc')->where('users_id',$userId)->get();
        }elseif ($request->session()->get('id_mahasiswa')) {
            $userId = $request->session()->get('id_mahasiswa');
            $user = mahasiswa::find($userId);
            $cek = 'mahasiswa';
            $feed = tb_feed::orderBy('created_at', 'desc')->where('users_id',$userId)->get();
        }
        return view('sosmed.Userfeed',compact('feed','user','cek'));
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
        // validate input dgn name newPost dan user
        $this->validate($request,[
            'newPost' => 'required',
            'user' => 'required'
        ]);
        if($request->page == 'beranda'){
            //tambah data ke tabel tb_feed ke beranda
            tb_feed::create([
                'feed' => $request->newPost,
                'users_id' => $request->user,
                'gambar' => '',
                'like' => '0',
                'pengumuman' => '0',
                
            ]);
            return redirect('/sosmed');
        }elseif ($request->page == 'pengumuman') {
            //tambah data ke tabel tb_feed ke page pengumuman
            tb_feed::create([
                'feed' => $request->newPost,
                'users_id' => $request->user,
                'gambar' => '',
                'like' => '0',
                'pengumuman' => '1',
                
            ]);
            return redirect('/sosmed/pengumuman');
        }else {
            dd('anda human???');
        } 
        
    }

    public function komen(Request $request)
    {
        
        //mencari data feed berdasarkan id feed yg akan dikomen
            komentar::create([
                'users_id'=>$request->users,
                'tb_feed_id' =>$request->user,
                'komentar' =>$request->komen
            ]);
            if($request->page =="userfeed")
            {
                return redirect('/sosmed/userfeed');
            }
            elseif($request->page =="beranda")
            {
                return redirect('/sosmed');
            }
            elseif($request->page =="pengumuman")
            {
                return redirect('/sosmed/pengumuman');
            }
            else {
                return dd('404');
            }
            
       
    }

    public function like(Request $request)
    {
        $like = like::where('users_id',$request->userId)->where('tb_feed_id',$request->postId)->first();
        if ($like == false) {
        like::create([
            'users_id'=>$request->userId,
            'tb_feed_id'=>$request->postId,
            'like'=>true
        ]);
        }else {
            $like->delete();
        }
        if($request->page =="userfeed")
            {
                return redirect('/sosmed/userfeed');
            }
            elseif($request->page =="beranda")
            {
                return redirect('/sosmed');
            }
            elseif($request->page =="pengumuman")
            {
                return redirect('/sosmed/pengumuman');
            }
            elseif($request->page =="ukm")
            {
                return redirect('/sosmed/ukm');
            }
            else {
                return dd('404');
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
