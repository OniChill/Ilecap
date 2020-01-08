@extends('template.desain2')
@extends('Chat.chat_kelas')
@section('namakelas')

<p>{{$ukm->nama_ukm}} 
</p>

@endsection

@section('chat')
@foreach($chat as $cm)
				<li class="sent">
					<h3>Me :</h3>
					<p>{{$cm->chat}}</p>
				</li>
        @endforeach
        @foreach($chat as $ct)
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
			<input hidden type="text" placeholder="Write your" name="id" value=""/>
			<input hidden type="text" placeholder="Write your" name="nama" value=""/>
			<input hidden type="text" placeholder="Write your" name="klsid" value=""/>
			<i class="fa fa-paperclip attachment" aria-hidden="true"></i>
			<button class="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
			</div>
		</div>
	</div>
</div>
</form>


@endsection

