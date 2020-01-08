<div class="mt-4 text-center" id="sidebar">
    <img src="{{asset('img/'.$user['img'])}}" id="profil" alt="..."  class="mt-3 img-fluid border border-info rounded-circle">
    <p class="mt-2">{{$user['nama']}}</p> 
    <div class="mt-3 row">
        <div class="col-6" data-toggle="modal" data-target="#detail" >
            <button  type="submit" id="btnProfil" class="btn btn-outline-primary">Detail</button>
        </div>
        <div class="col-6">
            <a href="/logout" id="btnProfil" class="btn btn-outline-danger">logout</a>
        </div>
    </div>
</div>