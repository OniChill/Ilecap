@extends('adminlte::page')

@section('title', 'web 2')

@section('content_header')
    <h1>Dashboard</h1>
   
@stop

@section('content')
    <p>You are logged in!</p>
    {{$tampil}}
    @foreach($data as $dt)
        <ul>{{$dt}}</ul>
    @endforeach
    <form action="{{url('new')}}" method="post">
    {{csrf_field()}}
    <input type="text" name="nama" id="nama">
    <button type="submit" class="btn btn-success">tambah</button>
    </form>
@stop