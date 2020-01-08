@extends('template.desain')
@section('namauser')
<p>{{$user->nama}}</p>
@endsection

@section('menukelas')
@if($cek=="dosen")
@foreach($kls as $k)
<a href="/chat_kelas/{{$k->id}}">
    			<ul>
				<li class="contact active">
				    <div id="kelas-bar">
			                <button id="addcontact" ><i aria-hidden="true"></i> <span>{{$k['nama_kelas']}}</span></button>
		            </div>
				</li>
			</ul>
			</a>
            <br>    
            @endforeach	
@elseif($cek=="mahasiswa")
@foreach($kls_mhs as $k)
<a href="/chat_kelas/{{$k->kelas_id}}">
    			<ul>
				<li class="contact active">
				    <div id="kelas-bar">
			                <button id="addcontact" ><i aria-hidden="true"></i> <span>{{$k->kelas['nama_kelas']}}</span></button>
		            </div>
				</li>
			</ul>
			</a>
            <br>
			@endforeach	
@endif
@endsection
@yield('isi')

@section('tambah_kelas')
    @if($cek=="dosen")
		
		<div id="bottom-bar">
		<a href="/Tambah-kelas/{{$user->id}}"><button id="addcontact"><i class="fa fa-user-plus fa-fw" aria-hidden="true"></i> <span>Tambah Kelas</span></button></a>
		<a href="/logout"><button id="settings"><i class="fa fa-sign-out  fa-fw" aria-hidden="true"></i> <span>Logout</span></button></a>
		</div>
	</div>
	@elseif($cek=="mahasiswa")
	<div id="bottom-bar">
		<a href="/logout"><button style="width:100%;" id="settings"><i class="fa fa-sign-out  fa-fw" aria-hidden="true"></i> <span>Logout</span></button></a>
		</div>
		</div>
	@endif
	@endsection

	

