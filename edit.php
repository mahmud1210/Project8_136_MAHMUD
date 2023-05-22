<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi </title>
</head>
<body>
 
	<h2>update</h2>
	<br/>
	<a href="akademik.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>
 
	<?php
	include 'config.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from mahasiswa where Id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php?id=<?php echo $id ?>">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="Id" value="<?php echo $d['Id']; ?>">
						<input type="text" name="Nama" value="<?php echo $d['Nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>NIM</td>
					<td><input type="number" name="Nim" value="<?php echo $d['Nim']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="Alamat" value="<?php echo $d['Alamat']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>