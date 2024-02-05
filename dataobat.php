<?php
include_once("cek_login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>apotek shafiqa farma</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php include_once('navbar.php') ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include_once('sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->

<div class="container">
    <div class="row">
        <div class="col-md-9 m-auto mt-5">
          <a class="btn btn-outline-success mb-1" href="tambah_obat.php">Tambah Data Obat </a>
            <div class="card">
            <div class="card-header">
        BIODATA PASIEN
        <br>
        </div>
        <div class="card-body">
        <table class="table table-bordered border-primary">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">KODE OBAT</th>
      <th scope="col">NAMA OBAT</th>
      <th scope="col">STOK AWAL</th>
      <th scope="col">STOK AKHIR</th>
      <th scope="col">DETAIL</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
    <?php
    //1. membuat koneksi
    include_once("koneksi.php");

    //2. membuat query untuk menampilakn seluruh data dari table
    $qry = "SELECT * FROM obat";

    //3.  menjalankan query
    $tampil = mysqli_query($con,$qry);

    //4. menampilkan data menggunakan looping foreach
    $nomor = 1;
    foreach($tampil as $data){
    ?>
    <tr>
      <th scope="row"><?php echo $nomor++ ?></th>
      <td><?php echo $data['kd_obat'] ?></td>
      <td><?php echo $data['nama_obat'] ?></td>
      <td><?php echo $data['stok_awal'] ?></td>
      <td><?php echo $data['stok_akhir'] ?></td>
      <td><button class="btn btn-warning btn-sm">lihat</button></td>
      <td><button class="btn btn-sucsess btn-sm">edit</button></td>
      <td><button class="btn btn-danger btn-sm">hapus</button></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
            </div>
            </div>
        </div>
    </div>
</div>

<!-- mulai card -->


<!-- akhir card -->
    <script src="js/bootstrap.js"></script>
</body>
</html>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- <?php include_once('footer.php')?> -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
