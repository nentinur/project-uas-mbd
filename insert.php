<?php
$message = ""; // membuat variabel untuk menampung pesan 
if (isset($_POST['submit_data'])) {

	// koneksi ke database
	include "db_connect.php";

	// mengambil dari yang dikirimkan melalui method POST
	$nama = $_POST['nama'];
	$mtk = $_POST['mtk'];
	$bind = $_POST['bind'];
	$bing = $_POST['bing'];
	$rata = ($mtk + $bind + $bing);

	// membuat query untuk POST data
	$query = "INSERT INTO data_siswa (nama, mtk, bind, bing, rata) VALUES ('$nama', '$mtk', '$bind', '$bing', '$rata' )";

	// mengeksekusi query
	// jika data dimasukkan tampilkan pesan berhasil
	if ($db->exec($query)) {
		$message = "Data berhasil ditambahkan";
	} else {
		$message = "Data gagal ditambahkan";
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Tambah Data</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body>
	<div style="width: 1000px; margin: 20px auto;">
		<nav class="navbar mb-3" style="background-color: #e3f2fd;">
			<div class="container-fluid">
				<h4>Tambah Data Nilai Siswa</h4>
			</div>
		</nav>
		<div><?php echo $message; ?></div>
		</nav>
		<table class="table table-bordered mt-3" width="100%" cellpadding="5" cellspacing="1" border="1">
			<!-- Form Input Data -->
			<form action="insert.php" method="post">
				<tr>
					<td>Nama Siswa:</td>
					<td><input name="nama" type="text" class="form-control" required></td>
				</tr>
				<tr>
					<td>Nilai Matematika:</td>
					<td><input name="mtk" type="number" class="form-control" required></td>
				</tr>
				<tr>
					<td>Nilai B. Indonesia:</td>
					<td><input name="bind" type="number" class="form-control" required></td>
				</tr>
				<tr>
					<td>Nilai B. Inggris:</td>
					<td><input name="bing" type="number" class="form-control" required></td>
				</tr>
				<tr>
					<td>
					</td>
					<td>
						<input name="submit_data" type="submit" class="btn btn-sm btn-primary" value="Tambah Data">
						<a href="index.php" class="btn btn-sm btn-success">Lihat Data</a>
					</td>
				</tr>
			</form>
		</table>
	</div>
</body>

</html>