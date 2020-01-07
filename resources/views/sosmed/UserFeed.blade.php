@extends('template.mainSosMed')

@section('konten')

<div class="container mt-4 pt-1" id="konten" >

                    <!-- Posts -->
                
                @if($cek == "dosen")
                @foreach($feed as $f)
                     <!-- //post dosen -->
                     <div class="card text-white bg-primary mb-3 mt-2">
                        <div class="card-header">
                            <img src="{{asset('img/test.jpg')}}" id="profilSos" alt="..."  class="img-fluid border border-info rounded-circle">
                            <span>{{$f->dosen->nama}}</span>
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
                                    <input type="hidden" name="page" id="page" value="userfeed">
                                    <textarea  id="postkomen" name="komen" placeholder="Hujat???" ></textarea>
                                    <button type="submit" class="btn btn-outline-danger">Kirim</button>
                                </form>
                                
                            </div>
                    </div>
                    @endforeach
                <!-- //end post dosen -->

                <!-- //post mahasiswa -->
                
                @else
                @foreach($feed as $f)
                <div class="card text-white bg-primary mb-3 mt-2">
                        <div class="card-header">
                            <img src="{{asset('img/test.jpg')}}" id="profilSos" alt="..."  class="img-fluid border border-info rounded-circle">
                            <span>{{$f->mahasiswa->nama}}</span>
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
                            @foreach($f->komentar as $km)
                                <img src="{{asset('img/test.jpg')}}" id="profilKomen" alt="..."  class="img-fluid border border-info rounded-circle">
                                @if($km->users_id >= 6280000 && $km->users_id <= 6289999 )
                                <span class="card-title">{{$km->dosen->nama}}</span>
                                @elseif($km->users_id >= 11000000 && $km->users_id <= 19000000 )
                                <span class="card-title">{{$km->mahasiswa->nama}}</span>
                                @else
                                <span class="card-title">Anda Nyasar??</span>
                                @endif
                                <p class="card-text">{{$km->komentar}}</p>
                            @endforeach
                                    
                                
                                <form action="/testkomen" method="POST">
                                    @csrf
                                    <img src="{{asset('img/test.jpg')}}" id="profilKomenUser" alt="..."  class="img-fluid border border-info rounded-circle ">
                                    <textarea  id="postkomen" name="komen" placeholder="Hujat???" ></textarea>
                                    <input type="hidden" name="user" id="user" value="{{$f->id}}">
                                    <input type="hidden" name="users" id="users" value="{{$user->id}}">
                                    <input type="hidden" name="page" id="page" value="userfeed">
                                    <button type="submit" class="btn btn-outline-danger">Kirim</button>
                                </form>
                                
                            </div>
                    </div>
                    @endforeach
                    @endif
                    <!-- //end post mahasiswa -->
                    <!-- endPosts -->


                </div>

@endsection