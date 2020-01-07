<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
      <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
<form method="post" action="/add_toclass">
                  @csrf

            <table>
                
                <tr>
                <td>Nama Dosen Pengempu</td>
                <td>:</td>
                <td>{{$user->nama}}</td>
                
                </tr>

                <tr>
                <td>Kelas </td>
                <td>:</td>
                <td>{{$nama_kelas->nama_kelas}}</td>
                </tr>
               
                <tr>
             
  
                <td><input style="border:none;outline:none;background-color:rgba(0, 0, 0, 0);
                        color:black;" type="text" hidden value="{{$nama_kelas->id}}" name="id"></td>
                </tr>
                <tr>
                    <td><a href="/chat"><button type="button" class="btn btn-dark">Back</button></a></td>
                </tr>
            
            </table> 

            <div class="card">
            <div class="card-header">
             <center> <h3>Data Mahasiswa Yang terdaftar Ilecap ({{count($users)}} orang)</h3></center>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id Mahasiswa</th>
                  <th>Nama</th>
                  <th>Aksi</th>
                
                </tr>
                </thead>
                <tbody>
                    @foreach($users as $a)
                <tr>
                  <td><input style="border:none;outline:none;background-color:rgba(0, 0, 0, 0);
                        color:black;" type="text" value="{{$a->id}}" name="id_user"></td>
                  <td>{{$a->nama}}</td>
                  <td>
                  <!-- Button trigger modal -->
                  <input type="submit"   value="kirim">
  

                  </td>
                  
                  
                </tr>
                @endforeach
                
                </tfoot>
              </table>
              </form>
              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
     

        
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });


</script>
</body>
</html>