@extends('template.mainSosMed')

@section('konten')
<div class="container mt-4 pt-1" id="konten" >
                <!-- //TextArea buat ngepost -->
                <form action="/testcreate" method="POST">
                    @csrf
                    <div class="form-group text-center">
                        <textarea class="form-control" name="newPost" id="post" placeholder="write something...."></textarea>
                        <input type="hidden" name="user" id="user" value="{{$user->id}}">
                    </div>
                        <button type="submit" class="btn btn-primary">post</button>
                </form>
                    <!-- //endTextArea -->

                    <!-- Posts -->
                  




 

                <!-- //post mahasiswa -->
                @foreach($feedMerge as $m)
                <div class="card text-white bg-primary mb-3 mt-2">
                        <div class="card-header">
                            <img src="{{asset('img/test.jpg')}}" id="profilSos" alt="..."  class="img-fluid border border-info rounded-circle">
                            <span>{{$m['nama']}}</span>
                            <p>{{$m['feed']}}</p>
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
                            

                                <form action="/testkomen" method="POST">
                                    @csrf
                                    <img src="{{asset('img/test.jpg')}}" id="profilKomenUser" alt="..."  class="img-fluid border border-info rounded-circle ">
                                    <textarea  id="postkomen" name="komen" placeholder="Hujat???" ></textarea>
                                    <input type="hidden" name="user" id="user" value="{{$m['id']}}">
                                    <input type="hidden" name="users" id="users" value="{{$user->id}}">
                                    <button type="submit" class="btn btn-outline-danger">Kirim</button>
                                </form>
                                
                            </div>
                    </div>
                    @endforeach
                    <!-- //end post mahasiswa -->
                    <!-- endPosts -->


                </div>
@endsection