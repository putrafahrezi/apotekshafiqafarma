<?php
// 1. membuat koneksi
include_once("koneksi.php");


// 2, mengambil seluruh nilai input dan dimasukkan ke variabel
$kd_obat                = $_POST['kd_obat'];
$nama_obat              = $_POST['nama_obat'];
$jenis_obat             = $_POST['jenis_obat'];
$harga                  = $_POST['harga'];
$stok_awal              = $_POST['stok_awal'];
$stok_akhir             = $_POST['stok_akhir'];


// 3. membuat query insert 
$qry = "INSERT INTO obat (kd_obat,nama_obat,jenis_obat,harga,stok_awal,stok_akhir) VALUES 
('$kd_obat','$nama_obat','$jenis_obat','$harga','$stok_awal','$stok_akhir')";


// 4. menjalankan query
$simpan = mysqli_query($con,$qry);


// 5. alihkan ke halaman dataobat.php
?>
<script>
    document.location="dataobat.php";
</script


?>