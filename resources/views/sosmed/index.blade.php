@extends('template.main')

@section('title','Sosmed')

@section('isi')
    <section class="row newpost">
        <div class="col-md-6">
            <header><h3>Alpha</h3></header>
            <form action="/testcreate" method="POST">
            @csrf
                <div class="form-group">
                    <textarea name="newPost" id="newPost" cols="30"  rows="5" placeholder="post something??"></textarea>
                    <input type="hidden" name="user" id="user" value="2">
                </div>
                <button type="submit" class="btn btn-primary">post</button>
            </form>
        </div>
    </section>

    <section class="row posts">
        <div class="col-md-6">
            <header><h3>Beranda</h3></header>
            @foreach ($dosen_feed as $p)
            <article class="post">
                <p>{{$p->feed}}</p>
                <div class="info">
                    Posted by {{$p->dosen->nama}}  on {{ $p->created_at }}
                </div>
                <div class="aksi">
                    <a href="#">Like</a>
                    <a href="#">edit</a>
                    <a href="#">Delete</a>
                </div>
                <p></p>
                <div>
                <form action="/testkomen" method="POST">
                @csrf
                
                <input type="text" name="komen" id="komen">
                <button type="submit">Kirim</button>
                </form>
                </div>
            </article>
            @endforeach
        </div>
    </section>
    
@stop 