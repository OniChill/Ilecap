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
                    <input type="hidden" name="user" id="user" value="1">
                </div>
                <button type="submit" class="btn btn-primary">post</button>
            </form>
        </div>
    </section>
   
    <section class="row posts">
        <div class="col-md-6">
            <header><h3>Beranda</h3></header>
            @for($i=0; $i<=5; $i++)
            <article class="post">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus maiores odit quaerat praesentium rem debitis corporis, quisquam neque id fugiat hic quis reiciendis doloremque cupiditate libero quo? Facere, qui vel!</p>
                <div class="info">
                    Posted by Blabla on 99 dec 99
                </div>
                <div class="aksi">
                    <a href="#">Like</a>
                    <a href="#">edit</a>
                    <a href="#">Delete</a>
                </div>
            </article>
            @endfor
        </div>
    </section>
   
@stop 