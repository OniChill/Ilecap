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

    <div class="container-fluid">
        <div class="row ">
            <div class="col-2 mt-5">

            </div>
            <div class="col-7 mt-5">
@yield('konten')
            </div>
                <div class="col-3 mt-5">

                </div>
        </div>
    </div>
    <script src="{{asset('/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.js')}}"></script>
    <script src="{{asset('/js/SosMed.js')}}"></script>
</body>
</html>