@extends('template.mainSosMed')

@section('konten')
<div class="container mt-4 pt-1" id="konten" >

                @foreach($feed as $f)
                     <!-- //post dosen -->
                     <div class="card text-white bg-primary mb-3 mt-2">
                        <div class="card-header">
                            <img src="{{asset('img/test.jpg')}}" id="profilSos" alt="..."  class="img-fluid border border-info rounded-circle">
                            <span>{{$f->nama_ukm}}</span>
                            <p>{{$f->deskripsi}}</p>
                            <div class="row">
                                <div class="col-6">
                                    <span>{{$f->like->count()}} like</span>
                                </div>
                                <div class="col-6 jkom">
                                    <span >{{$f->komentar->count()}} Komentar</span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-4 text-center">
                                    <form action="/sosmed/like" method="POST">
                                        @csrf
                                        <input type="hidden" name="postId" id="user" value="{{$f->id}}">
                                        <input type="hidden" name="userId" id="user" value="{{$user->id}}">
                                        <input type="hidden" name="page" id="page" value="ukm">
                                        <button type="submit" class="like">
                                            <i class="fas fa-thumbs-up"> Like</i>
                                        </button>
                                    </form>
                                </div>
                                <div class="col-4 text-center">
                                <i class="fas fa-comment"></i>
                                <span>Komen</span>
                                </div>
                                <div class="col-4 text-center">
                                <i class="fas fa-comment"></i>
                                <a href="" style="color:white;">Daftar</a>
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
                                    <input type="hidden" name="page" id="page" value="ukm">
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