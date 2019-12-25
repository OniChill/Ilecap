@extends('template.mainSosMed')

@section('konten')
<div class="container mt-4 pt-1" id="konten" >
                <!-- //TextArea buat ngepost -->
                <form action="/testcreate" method="POST">
                    @csrf
                    <div class="form-group text-center">
                        <textarea class="form-control" name="newPost" id="post" placeholder="write something...."></textarea>
                        <input type="hidden" name="user" id="user" value="{{$user->id}}">
                        <input type="hidden" name="page" id="page" value="pengumuman">
                    </div>
                        <button type="submit" class="btn btn-primary">post</button>
                </form>
                    <!-- //endTextArea -->

                @foreach($feed as $f)
                     <!-- //post dosen -->
                     <div class="card text-white bg-primary mb-3 mt-2">
                        <div class="card-header">
                            <img src="{{asset('img/test.jpg')}}" id="profilSos" alt="..."  class="img-fluid border border-info rounded-circle">
                            @if($f->users_id >= 6280000 && $f->users_id <= 6289999 )
                            <span>{{$f->dosen->nama}}</span>
                            @elseif($f->users_id >= 11000000 && $f->users_id <= 19000000 )
                            <span>{{$f->mahasiswa->nama}}</span>
                            @else
                            <span>Anda Nyasar??</span>
                            @endif
                            <p>{{$f->feed}}</p>
                            <hr>
                            <div class="row">
                                <div class="col-6 text-center">
                                    <i class="fas fa-thumbs-up"></i>
                                    <span>Like</span>
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
                                    <input type="hidden" name="page" id="page" value="pengumuman">
                                    <textarea  id="postkomen" name="komen" placeholder="Hujat???" ></textarea>
                                    <button type="submit" class="btn btn-outline-danger">Kirim</button>
                                </form>
                                
                            </div>
                    </div>
                    @endforeach
                <!-- //end post dosen -->
                    <!-- endPosts -->


                </div>
@endsection