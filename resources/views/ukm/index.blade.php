@php
use Illuminate\Support\Facades\Crypt;
@endphp
@extends('adminlte::page')

@section('title', 'Ilecap')

@section('content_header')
<h1>Data ukm</h1>
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
<form action="/ukm/cari" method="GET">
		<input type="text" name="cari" placeholder="nama ukm.." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
	</form>
    <div class="mt-4 table-responsive">
        <table class="table table-bordered table-striped">
            <tr>
                <th>nama</th>
                <th>Alamat</th>
                <th>Aksi</th>

            </tr>
            @foreach ($ukm as $u)
            <tr>
                <td>{{$u->nama_ukm}}</td>
                <td>{{$u->deskripsi}}</td>
                <td>
                <a href="ukm/edit/{{ Crypt::encrypt($u->id)}}" class="btn btn-warning">edit</a>
                <a href="ukm/hapus/{{$u->id}}" class="btn btn-danger">hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
            Halaman : {{ $ukm->currentPage() }} <br/>
            Jumlah Data : {{ $ukm->total() }} <br/>
            Data Per Halaman : {{ $ukm->perPage() }} <br/>
        
        
            {{ $ukm->links() }}
    </div>
</div>
@stop
