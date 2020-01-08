@extends('template.mainSosMed')

@section('konten')
<div class="container mt-4 pt-1" id="konten" >
                <!-- //TextArea buat ngepost -->
                <form action="/testcreate" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <textarea class="form-control" name="newPost" id="post" placeholder="write something...."></textarea>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input form-control-file border" id="inputGroupFile01"
                            aria-describedby="inputGroupFileAddon01" accept="image/*" name="postImg"   onchange="tampilkanPreview(this,'preview')">
                            <label class="custom-file-label" for="inputGroupFile01"></label>
                        </div>
                        

                        <input type="hidden" name="user" id="user" value="{{$user->id}}">
                        <input type="hidden" name="page" id="page" value="beranda">

                    </div>
                        <button type="submit" class="btn btn-primary">post</button>
                </form>
                    <!-- //endTextArea -->

                @foreach($feed as $f)
                     <!-- //post dosen -->
                     <div class="card text-white bg-primary mb-3 mt-2">
                        <div class="card-header">
                            @if($f->users_id >= 6280000 && $f->users_id <= 6289999 )
                            <img src="{{asset('img/'.$f->dosen->img)}}" id="profilSos" alt="..."  class="img-fluid border border-info rounded-circle">
                            <span>{{$f->dosen->nama}}</span>
                            @elseif($f->users_id >= 11000000 && $f->users_id <= 19000000 )
                            <img src="{{asset('img/'.$f->mahasiswa->img)}}" id="profilSos" alt="..."  class="img-fluid border border-info rounded-circle">
                            <span>{{$f->mahasiswa->nama}}</span>
                            @else
                            <span>Anda Nyasar??</span>
                            @endif
                            <p>{{$f->feed}}</p>
                            @if($f->gambar)
                            <img src="{{asset('img/PImg/'.$f['gambar'])}}" alt="..." width="635">
                            @endif
                            
                            <div class="row mt-4">
                                <div class="col-6">
                                    <span>{{$f->like->count()}}  like</span>
                                </div>
                                <div class="col-6 jkom">
                                    <span >{{$f->komentar->count()}} Komentar</span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-6 text-center">
                                    <form action="/sosmed/like" method="POST">
                                        @csrf
                                        <input type="hidden" name="postId" id="user" value="{{$f->id}}">
                                        <input type="hidden" name="userId" id="user" value="{{$user->id}}">
                                        <input type="hidden" name="page" id="page" value="beranda">
                                        <button type="submit" style="border: 0px solid #000; background: transparent; color: #fff;" class="like">
                                            <i class="fas fa-thumbs-up"> Like</i>
                                        </button>
                                    </form>
                                </div>
                                <div class="col-6 text-center">
                                <i class="fas fa-comment"></i>
                                <span>Komen</span>
                                </div>
                            </div>
                        </div>
                            <div class="card-body">
                            @foreach($f->komentar as $kd)
                                <img src="{{asset('img/test.jpg')}}" id="profilKomen" alt="..."  class="img-fluid border border-info rounded-circle">
                                @if($kd->users_id >= 6280000 && $kd->users_id <= 6289999 )
                                <span class="card-title">{{$kd->dosen->nama}}</span>
                                @elseif($kd->users_id >= 11000000 && $kd->users_id <= 19000000 )
                                <span class="card-title">{{$kd->mahasiswa->nama}}</span>
                                @else
                                <span class="card-title">Anda Nyasar??</span>
                                @endif
                                <p class="card-text">{{$kd->komentar}}</p>
                            @endforeach
                                    
                                <form action="/testkomen" method="POST">
                                <img src="{{asset('img/test.jpg')}}" id="profilKomenUser" alt="..."  class="img-fluid border border-info rounded-circle ">
                                    @csrf
                                    <input type="hidden" name="user" id="user" value="{{$f->id}}">
                                    <input type="hidden" name="users" id="user" value="{{$user->id}}">
                                    <input type="hidden" name="page" id="page" value="beranda">
                                    <textarea  id="postkomen" name="komen" placeholder="Hujat???" ></textarea>
                                    <button type="submit" class="btn btn-outline-light" style="width: 70px;height: 30px;margin-bottom: 20px;padding-bottom: 30px;border-radius: 50px">Kirim</button>
                                </form>
                                
                            </div>
                    </div>
                    @endforeach
                <!-- //end post dosen -->
                    <!-- endPosts -->


                </div>
@endsection