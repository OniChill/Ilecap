@extends('template.desain2')
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
<p>{{$nama_kelas->nama_kelas}} <a href="/materi/{{$nama_kelas->id}}">
<button type="button" class="btn btn-outline-primary">Materi</button></a>
<a href="/tugas/{{$nama_kelas->id}}">
<button type="button" class="btn btn-outline-primary">Tugas Mahasiswa</button></a></p>


@endif
@endsection

@section('chat')
@foreach($chat as $cm)
				<li class="sent">
					<h3>Me :</h3>
					<p>{{$cm->chat}}</p>
				</li>
        @endforeach
        @foreach($chat_all as $ct)
				<li class="replies">
					<h3>:{{$ct->nama}} </h3>
					<p>{{$ct->chat}}</p>
          
          </li>
         @endforeach
@endsection
@section('a')
<form action="/send" method="post">
@csrf
		<div class="message-input">
			<div class="wrap">
			<input type="text" placeholder="Write your message..." name="pesan" />
			<input hidden type="text" placeholder="Write your" name="id" value="{{$user->id}}"/>
			<input hidden type="text" placeholder="Write your" name="nama" value="{{$user->nama}}"/>
			<input hidden type="text" placeholder="Write your" name="klsid" value="{{$nama_kelas->id}}"/>
			<i class="fa fa-paperclip attachment" aria-hidden="true"></i>
			<button class="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
			</div>
		</div>
	</div>
</div>
</form>


@endsection

