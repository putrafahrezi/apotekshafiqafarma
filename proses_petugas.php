<?php
// 1. membuat koneksi
include_once("koneksi.php");


// 2, mengambil seluruh nilai input dan dimasukkan ke variabel
$kd_petugas                = $_POST['kd_petugas'];
$nm_petugas                = $_POST['nm_petugas'];
$umur                      = $_POST['umur'];
$alamat                    = $_POST['alamat'];
$no_hp                     = $_POST['no_hp'];
$email                     = $_POST['email'];


// 3. membuat query insert 
$qry = "INSERT INTO petugas (kd_petugas,nm_petugas,umur,alamat,no_hp,email) VALUES 
('$kd_petugas','$nm_petugas','$umur','$alamat','$no_hp','$email')";


// 4. menjalankan query
$simpan = mysqli_query($con,$qry);


// 5. alihkan ke halaman datapetugas.php
?>
<script>
    document.location="datapetugas.php";
</script


?>