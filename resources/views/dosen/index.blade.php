@php
use Illuminate\Support\Facades\Crypt;
@endphp
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1>Data Dosen</h1>
@stop

@section('content')
<div class="container">
    <div class="mt-4 table-responsive">
        <table class="table table-bordered table-striped">
            <tr>
                <th>nama</th>
                <th>Alamat</th>
                <th>No_hp</th>
                <th>Aksi</th>

            </tr>
            @foreach ($dosen as $d)
            <tr>
                <td>{{$d->nama}}</td>
                <td>{{$d->alamat}}</td>
                <td>{{$d->no_hp}}</td>
                <td>
                <a href="dosen/edit/{{ Crypt::encrypt($d->id_dosen)}}" class="btn btn-warning">edit</a>
                <a href="dosen/hapus/{{$d->id_dosen}}" class="btn btn-danger">hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@stop
