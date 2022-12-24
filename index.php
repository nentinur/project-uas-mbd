<?php

// koneksi ke database
include "db_connect.php";

// mengambil data
$query = "SELECT rowid, * FROM data_siswa";

// menjalankan query dan menyimpan hasilnya di variable $result
$result = $db->query($query);

?>
<!DOCTYPE html>
<html>

<head>
	<title>Pendataan Nilai</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body>

	<div style="width: 90%; margin: 20px auto;">
		<nav class="navbar mb-3" style="background-color: #e3f2fd;">
			<div class="container-fluid">
				<h4>Pendataan Nilai UN Siswa</h4>
				<a class="btn btn-outline-primary" role="button" href="insert.php">Tambah Data</a>
			</div>
		</nav>
		<?php
		if (isset($_GET['aksi']) == 'del') {
			$id = $_GET['id']; // id dari URL

			// Query untuk mengahpus data
			$query = "DELETE FROM data_siswa WHERE rowid=$id";

			// menjalankan query hapus data
			if ($db->query($query)) {
				$message = "Data berhasil dihapus";
			} else {
				$message = "Data Gagal dihapus";
			}

			echo $message;
			echo "<br/>";
		}
		?>
		<table class="table table-striped mt-3" width="100%" cellpadding="5" cellspacing="1" border="1">
			<tr>
				<th>No</th>
				<th>Nama Siswa</th>
				<th>Matematika</th>
				<th>Bahasa Indonesia</th>
				<th>Bahasa Inggris</th>
				<th>Jumlah</th>
				<th>Aksi</th>

			</tr>
			<?php $i = 1; ?>
			<?php while ($row = $result->fetchArray()) { ?>
				<tr>
					<td><?php echo $i++; ?></td>
					<td><?php echo $row['nama']; ?></td>
					<td><?php echo $row['mtk']; ?></td>
					<td><?php echo $row['bind']; ?></td>
					<td><?php echo $row['bing']; ?></td>
					<td><?php echo $row['rata']; ?></td>
					<td>
						<a href="update.php?id=<?php echo $row['rowid']; ?>" class="btn btn-sm btn-warning">Ubah</a>
						<a href="index.php?aksi=del&id=<?php echo $row['rowid']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin Menghapus data ini?');">Hapus</a>
					</td>
				</tr>
			<?php } ?>
		</table>
	</div>
</body>

</html>