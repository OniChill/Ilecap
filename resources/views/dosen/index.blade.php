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
@if ($message = Session::get('sukses'))
				<div class="alert alert-success alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button> 
					<strong>{{ $message }}</strong>
				</div>
@elseif ($message = Session::get('gagal'))
				<div class="alert alert-danger alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button> 
					<strong>{{ $message }}</strong>
				</div>
@else

@endif
<form action="/dosen/cari" method="GET">
		<input type="text" name="cari" placeholder="nama dosen.." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>
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
            Halaman : {{ $dosen->currentPage() }} <br/>
            Jumlah Data : {{ $dosen->total() }} <br/>
            Data Per Halaman : {{ $dosen->perPage() }} <br/>
        
        
            {{ $dosen->links() }}
    </div>
</div>
@stop
