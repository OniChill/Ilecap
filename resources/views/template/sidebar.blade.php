<div class="mt-4 text-center" id="sidebar">
    <img src="{{asset('img/test.jpg')}}" id="profil" alt="..."  class="mt-3 img-fluid border border-info rounded-circle">
    <p class="mt-2">{{$user->nama}}</p> 
    <div class="mt-3 row">
        <div class="col-4">
            <button type="submit" id="btnProfil" class="btn btn-outline-primary">Detail</button>
        </div>
        <div class="col-4">
            <button type="submit" id="btnProfil"  class="btn btn-outline-warning">Edit</button>
        </div>
        <div class="col-4">
            <a href="/logout" id="btnProfil" class="btn btn-outline-danger">logout</a>
        </div>
    </div>
</div>