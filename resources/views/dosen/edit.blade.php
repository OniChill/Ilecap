@include('template.header')
        <div class="container login-container">
                <div class="row">
                    <div class="col-md-6 login-form-2">
                        <h2>edit data dosen</h2>
                        <form method="POST" action="{{url('dosen/update/'.$dosen['id'])}}" >
                        <!-- {{ csrf_field() }} -->
                        <!-- {{ method_field('PUT') }} -->
                        @csrf
                        @method('PUT')
                            <div class="form-group">
                                <a>Nama</a>
                                <input type="text" class="form-control bulet" name="nama"  value="{{$dosen->nama}}" />
                                @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
                            </div>
                            <div class="form-group">
                                <a>password</a>
                                <input type="text" class="form-control bulet" name="password"  value="{{$dosen->password}}" />
                                @if($errors->has('password'))
                                <div class="text-danger">
                                    {{ $errors->first('password')}}
                                </div>
                            @endif
                            </div>
                            <div class="form-group">
                                    <a>Alamat</a>
                                <input type="text" class="form-control" name="alamat"  value="{{$dosen->alamat}}" />
                                @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif
                            </div>
                            <div class="form-group">
                                    <a>No hp</a>
                                <input type="text" class="form-control" name="no_hp" value="{{$dosen->no_hp}}" />
                                @if($errors->has('no_hp'))
                                <div class="text-danger">
                                    {{ $errors->first('no_hp')}}
                                </div>
                            @endif
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btnSubmit" value="simpan" />
                            </div>
                        </form>
                    </div>
                </div>
@include('template.footer')