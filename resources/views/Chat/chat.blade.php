@extends('template.desain')
@extends('Chat.chat_kelas')
@section('namakelas')
@if($cek=="dosen")
<p>{{$nama_kelas->nama_kelas}}<a href="/tambah_anggota/{{$nama_kelas->id}}">
<button type="button" class="btn btn-primary">Tambah anggota</button></a>
 <a href="/tugas/{{$nama_kelas->id}}">
<button type="button" class="btn btn-outline-primary">Tugas Mahasiswa</button></a>

<a href="/materi/{{$nama_kelas->id}}">
<button type="button" class="btn btn-outline-primary">Materi</button></a>
</p> 

@elseif($cek=="mahasiswa")
<p>{{$nama_kelas->kelas->nama_kelas}} <a href="/materi/{{$nama_kelas->kelas_id}}">
<button type="button" class="btn btn-outline-primary">Materi</button></a>
</p> </p>

@endif
@endsection

@section('chat')
@for($i=0;$i<=2;$i++)
				<li class="sent">
					<h3>Me :</h3>
					<p>#zonk </p>
				</li>
        @endfor
        @for($i=0;$i<=2;$i++)
				<li class="replies">
					<h3>: Them </h3>
					<p>Zonk</p>
          
          </li>
         @endfor
@endsection
