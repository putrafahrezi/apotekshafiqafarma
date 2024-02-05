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
        <div class="col-md-8 m-auto mt-5">
            <div class="card">
            <div class="card-header">
        BIODATA OBAT
        <br>
        </div>
        <div class="card-body">
        <form action="proses_obat.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputnim" class="form-label">Kode Obat</label>
                <input type="kd_obat" name="kd_obat" class="form-control" id="exampleInputnim">
            </div>

            <div class="mb-3">
                <label for="exampleInputnama" class="form-label">Nama Obat</label>
                <input type="nama" name="nama_obat" class="form-control" id="exampleInputnama">
            </div>

            <div class="mb-3">
                <label for="exampleInputkelas" class="form-label">Jenis Obat</label>
                <input type="jenis_obat" name="jenis_obat" class="form-control" id="exampleInputkelas">
            </div>

            <div class="mb-3">
                <label for="exampleInputalamat" class="form-label">Harga</label>
                <input type="harga" name="harga" class="form-control" id="exampleInputalamat">
            </div>

            <div class="mb-3">
                <label for="exampleInputkelas" class="form-label">Stok Awal</label>
                <input type="stok_awal" name="stok_awal" class="form-control" id="exampleInputkelas">
            </div>

            <div class="mb-3">
                <label for="exampleInputkelas" class="form-label">Stok Akhir</label>
                <input type="stok_akhir" name="stok_akhir" class="form-control" id="exampleInputkelas">
            </div>

            <button type="proses" class="btn btn-primary">Proses Data</button>
            <a class="btn btn-secondary" href="dataobat.php">Batal </a>
            </form>
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