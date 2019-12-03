@extends('adminlte::page')

@section('title', 'web 2')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>You are logged in {{$nama}}!</p>
    {{$tampil}}
@stop