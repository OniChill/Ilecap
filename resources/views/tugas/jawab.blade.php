<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jawaban Tugas {{$jawab->nama_tugas}}</title>
</head>
<body>
<h3><b><center> Jawaban Tugas</center></b></h3>
    <form action="/jawab" method="post" enctype="multipart/form-data">
    @csrf
        <table>
        <tr>
                
                <td><input type="hidden" name="id" value ="{{$jawab->id}}"> </td>
            </tr>
            <tr>
                <td>Nama </td>
                <td>:</td>
                <td><input type="text"  value="{{$user->nama}}"> <input hidden type="text" name="iddsn" value="{{$user->id}}"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text"  value="{{$jawab->kelas->nama_kelas}}"> <input hidden type="text" name="idkls" value="{{$jawab->kelas_id}}"></td>
            </tr>
            
            <tr>
                <td>Upload File Jawaban </td>
                <td>:</td>
                <td><input type="file"  name="jawab"></td>
            </tr>
          
          
        </table>
        <button type="submit">Upload</button> 
<a href="/tugas/{{$jawab->kelas_id}}">
<button type="button" class="btn btn-outline-primary">kembali</button></a>
</p> 
    </form>
</body>
</html>