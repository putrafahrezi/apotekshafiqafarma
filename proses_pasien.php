<?php
// 1. membuat koneksi
include_once("koneksi.php");


// 2, mengambil seluruh nilai input dan dimasukkan ke variabel
$nip                = $_POST['nip'];
$nama_pasien        = $_POST['nama_pasien'];
$jenis_kelamin      = $_POST['jenis_kelamin'];
$penyakit           = $_POST['penyakit'];
$tempat_lahir       = $_POST['tempat_lahir'];
$tanggal_lahir      = $_POST['tanggal_lahir'];
$alamat             = $_POST['alamat'];
$no_hp              = $_POST['no_hp'];
$email              = $_POST['email'];


// 3. membuat query insert 
$qry = "INSERT INTO pasien (nip,nama_pasien,jenis_kelamin,penyakit,tempat_lahir,tanggal_lahir,alamat,no_hp,email) VALUES 
('$nip','$nama_pasien','$jenis_kelamin','$penyakit','$tempat_lahir','$tanggal_lahir','$alamat','$no_hp','$email')";


// 4. menjalankan query
$simpan = mysqli_query($con,$qry);


// 5. alihkan ke halaman datapasien.php
?>
<script>
    document.location="datapasien.php";
</script


?>