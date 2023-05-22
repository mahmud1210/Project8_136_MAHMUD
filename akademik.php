<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UTSdeadlinejamloro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="uts.css">
</head>
<body>
<!-- BAGIAN NAVBAR -->
<nav class="navbar bg-primary fixed-top style-bg">
    <div class="container">
        <div class="navbar style-logo">PBW</div>
        <div class="navbar user">Selamat Datang I'm Mahmud</div>
    </div>
    <button class="navbar-toggler bg-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>

    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Praktikum PBW A</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav left-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link style-home active" aria-current="page" href="../index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../conten.php">Daftar Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#S">Informasi Tugas</a>
              </li>
            </div>
            <button type="button" class="btn btn-danger">Logout</button>
    </button>
        </div>
 </nav>

<div class="teks">
  <h1 align="center"> DAFTAR MAHASISWA <br>PEMROGRAMAN BERBASIS WEB </h1>
</div>

<div>
   <div> <button class="btn btn-lg btn-primary btn-success" type="submit"><a href="tambah_aksi.php"> Tambahkan data </a></button>
    <button class="btn btn-lg btn-primary btn-danger" type="submit">cek laporan <span><img src="card-text.svg" alt=""></span></button>
    <form class="d-flex" role="search" style="float: right;">
  <input class="form-control " type="search" placeholder="Cari Berdasarkan NIM" aria-label="Search">
  <button class="btn btn-outline-success" type="submit" style="background-color:rgb(120, 169, 225) ;"><img src="search.svg" width="20px" ></button>
</form>
</div>
</div>



<br>
<table class="table">

    <thead>
        <td class="table-primary">No</td>
        <td class="table-primary">NIM</td>
        <td class="table-primary">NAMA</td>
        <td class="table-primary">Dosen</td>
        <td class="table-primary">Status</td>
        <td class="table-primary">Ket</td>
        <td class="table-primary">Aksi</td>
        <td class="table-primary"></td>
       
    
    </thead>
    <tbody>

    <?php 
		include 'config.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from mahasiswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['Nim']; ?></td>
				<td><?php echo $d['Nama']; ?></td>
      
        <td>mhs</td>
        <td>ket</td>
				<td>
					<a class="btn btn-primary" href="edit.php?id=<?php echo $d['Id']; ?>">EDIT</a>
				</td>
        <td>
					<a class="btn btn-danger" href="hapus.php?id=<?php echo $d['Id']; ?>">HAPUS</a>
        </td>
			</tr>
			<?php 
		}
		?>

      <tr>
        <th scope="row">1</th>
        <td>200441100052</td>
        <td>Affan Maulana Zulkarnain</td>
        <td>Sri Herawati</td>
        <td>Asprak</td>
        <td>Hadir</td>
        <td><a href="" class="btn btn-primary">edit</a></td>
        <td><a href="" class="btn btn-danger">hapus</a></td>
      </tr>
      <!-- <table class="table table-striped"> -->
      <tr>
        <th scope="row">2</th>
        <td>2004411000111</td>
        <td>Muhammad irham alkarim</td>
        <td>Sri Herawati</td>
        <td>Asprak</td>
        <td>Hadir</td>
        <td><a href="" class="btn btn-primary">edit</a></td>
        <td><a href="" class="btn btn-danger">hapus</a></td>
      </tr>
      <!-- </table> -->
     <tr>
        <th scope="row">3</th>
        <td>210441100106</td>
        <td>Abdul wahid</td>
        <td>Sri Herawati</td>
        <td>Asprak</td>
        <td>Hadir</td>
        <td><a href="" class="btn btn-primary">edit</a></td>
        <td><a href="" class="btn btn-danger">hapus</a></td>
        </tr>
      <!-- <table class="table table-striped"> -->
      <tr>
        <th scope="row">4</th>
        <td>210441100054</td>
        <td>Fanky Abdil qoyyim</td>
        <td>Sri Herawati</td>
        <td>Asprak</td>
        <td>Hadir</td>
        <td><a href="" class="btn btn-primary">edit</a></td>
        <td><a href="" class="btn btn-danger">hapus</a></td>
      </tr>
      <!-- </table> -->
      <tr>
        <th scope="row">5</th>
        <td>220441100153</td>
        <td>Rifqy Khairan Fathir</td>
        <td>Sri Herawati</td>
        <td>Asprak</td>
        <td>Hadir</td>
        <td><a href="" class="btn btn-primary">edit</a></td>
        <td><a href="" class="btn btn-danger">hapus</a></td>
      </tr>
      <tr>
        <th scope="row">6</th>
        <td>220441100077</td>
        <td>Sukma Ayu Maharani</td>
        <td>Sri Herawati</td>
        <td>Asprak</td>
        <td>Hadir</td>
        <td><a href="" class="btn btn-primary">edit</a></td>
        <td><a href="" class="btn btn-danger">hapus</a></td>
      </tr>
      <tr>
        <th scope="row">7</th>
        <td>220441100117</td>
        <td>Muhammad Rayhan R</td>
        <td>Sri Herawati</td>
        <td>Asprak</td>
        <td>Hadir</td>
        <td><a href="" class="btn btn-primary">edit</a></td>
        <td><a href="" class="btn btn-danger">hapus</a></td>
      </tr>
      <tr>
        <th scope="row">8</th>
        <td>220441100045</td>
        <td>Fera Devi Susanti</td>
        <td>Sri Herawati</td>
        <td>Asprak</td>
        <td>Hadir</td>
        <td><a href="" class="btn btn-primary">edit</a></td>
        <td><a href="" class="btn btn-danger">hapus</a></td>
      </tr>
    </tbody>
  </table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>