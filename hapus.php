<?php 
// koneksi database
include 'config.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
//  echo $id;
// menghapus data dari database
mysqli_query($koneksi,"delete from mahasiswa where Id='$id'");
 
// mengalihkan halaman kembali 
header("location:akademik.php");
 
?>