<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('/css/login.css')}}">
    <title>Login</title>
</head>
<body>
        <div class="container login-container">
                <div class="row">
                    <div class="col-md-6 login-form-2">
                        <h2>tambah data dosen</h2>
                        <form method="POST" action="{{url('dosen/store')}}" >
                        {{ csrf_field() }}
                            <div class="form-group">
                                <a>Nama</a>
                                <input type="text" class="form-control bulet" name="nama" placeholder="Nama *" value="" />
                                @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
                            </div>
                            <div class="form-group">
                                <a>password</a>
                                <input type="password" class="form-control bulet" name="password" placeholder="password *" value="" />
                                @if($errors->has('password'))
                                <div class="text-danger">
                                    {{ $errors->first('password')}}
                                </div>
                            @endif
                            </div>
                            <div class="form-group">
                                    <a>Alamat</a>
                                <input type="text" class="form-control" name="alamat" placeholder="Alamat *" value="" />
                                @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif
                            </div>
                            <div class="form-group">
                                    <a>No hp</a>
                                <input type="text" class="form-control" name="no_hp" placeholder="No hp *" value="" />
                                @if($errors->has('no_hp'))
                                <div class="text-danger">
                                    {{ $errors->first('no_hp')}}
                                </div>
                            @endif
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btnSubmit" value="Tambah" />
                            </div>
                        </form>
                    </div>
                </div>
</body>
</html>