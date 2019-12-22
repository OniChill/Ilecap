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
                            @foreach($f->komentar_dosen as $kd)
                                <img src="{{asset('img/test.jpg')}}" id="profilKomen" alt="..."  class="img-fluid border border-info rounded-circle">
                                <span class="card-title">budai</span>
                                <p class="card-text">{{$kd->komentar}}</p>
                            @endforeach
                                    
                                <form action="/testkomen" method="POST">
                                <img src="{{asset('img/test.jpg')}}" id="profilKomenUser" alt="..."  class="img-fluid border border-info rounded-circle ">
                                    @csrf
                                    <input type="hidden" name="user" id="user" value="{{$f->id}}">
                                    <input type="hidden" name="users" id="user" value="{{$f->dosen_id}}">
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
                            @foreach($f->komentar_mhs as $km)
                                <img src="{{asset('img/test.jpg')}}" id="profilKomen" alt="..."  class="img-fluid border border-info rounded-circle">
                                <span class="card-title">budai</span>
                                <p class="card-text">{{$km->komentar}}</p>
                            @endforeach
                                    
                                
                                <form action="/testkomen" method="POST">
                                    @csrf
                                    <img src="{{asset('img/test.jpg')}}" id="profilKomenUser" alt="..."  class="img-fluid border border-info rounded-circle ">
                                    <textarea  id="postkomen" name="komen" placeholder="Hujat???" ></textarea>
                                    <input type="hidden" name="user" id="user" value="{{$f->id}}">
                                    <input type="hidden" name="users" id="users" value="{{$f->mahasiswa_id}}">
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