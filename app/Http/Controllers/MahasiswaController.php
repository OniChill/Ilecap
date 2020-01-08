<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mahasiswa;
use Session;
use Image;

class MahasiswaController extends Controller
{
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
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa->nama = $request->nama;
        $mahasiswa->password = $request->password;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->no_hp = $request->no_hp;
    }else{
    // menyimpan data file yang diupload ke variabel $file
        $image = $request->file('profil');
        $nama_file = time()."_".$image->getClientOriginalName();
     // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'img';
        $img = Image::make($image->path());
        $img->resize(500, 500)->save($tujuan_upload.'/'.$nama_file);
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa->nama = $request->nama;
        $mahasiswa->img = $nama_file;
        $mahasiswa->password = $request->password;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->no_hp = $request->no_hp;
    }

    if($mahasiswa->save()){
        Session::flash('sukses','edit berhasil');
    }else{
        Session::flash('gagal','edit GAGAL');
    }
    return redirect('/sosmed');
}
}
