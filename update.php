<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['Id'];
$nama = $_POST['Nama'];
$nim = $_POST['Nim'];
$alamat = $_POST['Alamat'];
 
// update data ke database
mysqli_query($koneksi,"update mahasiswa set Nama='$nama', Nim='$nim', Alamat='$alamat' where Id='$id'");
 
// mengalihkan halaman kembali
header("location:akademik.php");
 
?>