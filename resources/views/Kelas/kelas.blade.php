<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center><h1>Hallo {{$user->nama}}</h1></center>
    <form action="/addkelas" method="post">
    @csrf

    <?php 
        $un =rand();

?>
        <table>     
             <tr>
                    <td>Id Kelas </td>
                    <td>:</td>
                    <td><input type="text" value="{{$un}}" name="idkls" readonly ></td>
                </tr>
                <tr>
                    <td>Id Dosen </td>
                    <td>:</td>
                    <td><input type="text" value="{{$user->id}}" name="id" readonly ></td>
                </tr>
                <tr>
                    <td>Nama </td>
                    <td>:</td>
                    <td><input type="text" value="{{$user->nama}}" name="nama" readonly ></td>
                </tr>
                <tr>
                    <td>Nama Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="kelas" ></td>
                </tr>
              
        </table>
        <input type="submit" name="kirim" value="Tambah">
    </form>
</body>
</html>