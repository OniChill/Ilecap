<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/css/SosMed.css')}}">
    <script src="https://kit.fontawesome.com/ab9fca3c70.js" crossorigin="anonymous"></script>
    <title>Ilecap</title>
</head>
<body>
@include('template.navbar')
    <div class="container-fluid">
        <div class="row ">
            <div class="col-2 mt-5">
@include('template.sidebar')
            </div>
            <div class="col-7 mt-5">
@yield('konten')
            </div>
                <div class="col-3 mt-5">
@include('template.RSidebar')
                </div>
        </div>
    </div>
<div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Info Akun</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
		  	<div class="input-group input-group-sm mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text" id="inputGroup-sizing-sm">nama</span>
				</div>
					<input type="text" readonly class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$user->nama}}">
			</div>
		  	<div class="input-group input-group-sm mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text" id="inputGroup-sizing-sm">password</span>
				</div>
					<input type="text" readonly class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$user->password}}">
			</div>
		  	<div class="input-group input-group-sm mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text" id="inputGroup-sizing-sm">alamat</span>
				</div>
					<input type="text" readonly class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$user->alamat}}">
			</div>
		  	<div class="input-group input-group-sm mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text" id="inputGroup-sizing-sm">No Hp</span>
				</div>
					<input type="text" readonly class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$user->no_hp}}">
			</div>
	      </div>
	      <div class="modal-footer">
		  <div class="col-6" data-toggle="modal" data-dismiss="modal" data-target="#edit" >
		  	<button type="button" class="btn btn-warning" >edit</button>
		 </div>
		  <button type="button" class="btn btn-success" data-dismiss="modal">oke</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- //modal edit -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Info Akun</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body text-center">
		  @if($user->id >= 6280000 && $user->id <= 6289999 )
		  <form action="{{url('dosen/update/'.$user['id'])}}" method="post" enctype="multipart/form-data">
		  @elseif($user->id >= 11000000 && $user->id <= 19000000 )
		  <form action="{{url('mahasiswa/update/'.$user['id'])}}" method="post" enctype="multipart/form-data">
			@else
				<span>Anda Siapa??</span>
			@endif
		  @csrf
		  @method('PUT')
		  <!-- <img src="{{asset('img/test.jpg')}}" id="editprofil" alt="..."  class="img-fluid border border-info rounded-circle mb-3"> -->
		  <img id="preview" src="{{asset('img/'.$user['img'])}}" alt="" class="img-fluid border border-info rounded-circle mb-3" />
		  <div class="input-group-sm mb-3">
				<div class="custom-file">
					<input type="file" class="custom-file-input form-control-file border" id="inputGroupFile01"
					aria-describedby="inputGroupFileAddon01" accept="image/*" name="profil"   onchange="tampilkanPreview(this,'preview')">
					<label class="custom-file-label" for="inputGroupFile01">{{$user->img}}</label>
				</div>
			</div>
		  	<div class="input-group input-group-sm mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text" id="inputGroup-sizing-sm">nama</span>
				</div>
					<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nama" value="{{$user->nama}}">
			</div>
		  	<div class="input-group input-group-sm mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text" id="inputGroup-sizing-sm">password</span>
				</div>
					<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="password" value="{{$user->password}}">
			</div>
		  	<div class="input-group input-group-sm mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text" id="inputGroup-sizing-sm">alamat</span>
				</div>
					<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="alamat" value="{{$user->alamat}}">
			</div>
		  	<div class="input-group input-group-sm mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text" id="inputGroup-sizing-sm">No Hp</span>
				</div>
					<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="no_hp" value="{{$user->no_hp}}">
			</div>
	      </div>
	      <div class="modal-footer">
		  <button type="submit" class="btn btn-warning" >simpan</button>
		  <button type="button" class="btn btn-success" data-dismiss="modal">cancel</button>
	      </div>
	      </form>
	    </div>
	  </div>
	</div>
    <script src="{{asset('/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.js')}}"></script>
	<script src="{{asset('/js/SosMed.js')}}"></script>
	<script> 
		 function tampilkanPreview(gambar,idpreview){
//                membuat objek gambar
                var gb = gambar.files;
//                loop untuk merender gambar
                for (var i = 0; i < gb.length; i++){
//                    bikin variabel
                    var gbPreview = gb[i];
                    var imageType = /image.*/;
                    var preview=document.getElementById(idpreview);
                    var reader = new FileReader();
                    if (gbPreview.type.match(imageType)) {
//                        jika tipe data sesuai
                        preview.file = gbPreview;
                        reader.onload = (function(element) {
                            return function(e) {
                                element.src = e.target.result;
                            };
                        })(preview);
    //                    membaca data URL gambar
                        reader.readAsDataURL(gbPreview);
                    }else{
//                        jika tipe data tidak sesuai
                        alert("Type file tidak sesuai. Khusus image.");
                    }
                }
            }
	</script>
</body>
</html>