<?php
include 'config.php';
if (isset($_POST['submit'])) {
    // menangkap data yang di kirim dari form
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $alamat = $_POST['alamat'];
    
    // menginput data ke database
    mysqli_query($koneksi,"insert into mahasiswa values('','$nama','$nim','$alamat')");
    
    // mengalihkan halaman kembali ke index.php
    header("location:akademik.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>klp_gading</title>
</head>
<body>
 
	<h2>INPUT DATA MAHASISWA </h2>
	<br/>
	<a href="akademik.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><input type="number" name="nim"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>