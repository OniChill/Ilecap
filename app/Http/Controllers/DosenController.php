<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dosen;
use Illuminate\Support\Facades\Crypt;
use Session;
use Image;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosen = dosen::paginate(7);
        return view('dosen.index',['dosen'=>$dosen]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Login.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
    		'nama' => 'required',
    		'password' => 'required',
    		'alamat' => 'required',
    		'no_hp' => 'required'
    	]);
 
        dosen::create([
            'nama' => $request->nama,
            'img'=>'test.jpg',
    		'password' => $request->password,
    		'alamat' => $request->alamat,
    		'no_hp' => $request->no_hp
    	]);
        return redirect('/dosen') ;
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
        $dosen = dosen::find(Crypt::decrypt($id));
        return view('dosen.edit',['dosen'=>$dosen]);
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
    $this->validate($request,[
	    'nama' => 'required',
	    'password' => 'required',
        'alamat' => 'required',
        'no_hp' => 'required',
    ]);

   
    $profil =$request->profil;

    if (!$profil) {
        $dosen = dosen::find($id);
        $dosen->nama = $request->nama;
        $dosen->password = $request->password;
        $dosen->alamat = $request->alamat;
        $dosen->no_hp = $request->no_hp;
    }else{
        // menyimpan data file yang diupload ke variabel $file
    $image = $request->file('profil');
    $nama_file = time()."_".$image->getClientOriginalName();
// isi dengan nama folder tempat kemana file diupload
    $tujuan_upload = 'img';
    $img = Image::make($image->path());
    $img->resize(500, 500)->save($tujuan_upload.'/'.$nama_file);
        $dosen = dosen::find($id);
        $dosen->nama = $request->nama;
        $dosen->img = $nama_file;
        $dosen->password = $request->password;
        $dosen->alamat = $request->alamat;
        $dosen->no_hp = $request->no_hp;
    }

    if($dosen->save()){
        Session::flash('sukses','edit berhasil');
    }else{
        Session::flash('gagal','edit GAGAL');
    }
    return redirect('/sosmed');
}
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dosen = dosen::find($id);
        $dosen->delete();
        return redirect('/dosen');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table dosen sesuai pencarian data
		$dosen = dosen::where('nama','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data dosen ke view index
		return view('dosen.index',['dosen' => $dosen]);
 
	}
}
