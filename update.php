<?php
$message = "";

// koneksi database
include "db_connect.php";

// mengupdate data berdasarkan id yang dirim dengan method post
if (isset($_POST['submit_data'])) {

    // mengambil data dari method POST
    $id = $_GET['id'];
    $nama = $_POST['nama'];
    $mtk = $_POST['mtk'];
    $bind = $_POST['bind'];
    $bing = $_POST['bing'];
    $rata = ($mtk + $bind + $bing);

    // Query untuk menambah data
    $query = "UPDATE data_siswa SET nama='$nama', mtk='$mtk', bind='$bind', bing='$bing', rata='$rata' WHERE rowid=$id";

    // menjalankan query tambah data
    // jika data berhasil dimasukkan maka tampilkan pesan berhasil
    if ($db->exec($query)) {
        $message = "Data berhasil diubah";
    } else {
        $message = "Data gagal diubah";
    }
}

$id = $_GET['id'];
// query untuk mengambil data
$query = "SELECT rowid, * FROM data_siswa WHERE rowid=$id";
$result = $db->query($query);
$data = $result->fetchArray();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Update Data</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body>
    <div style="width: 1000px; margin: 20px auto;">

        <nav class="navbar mb-3" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <h4>Update Data Nilai Siswa</h4>
            </div>
        </nav>
        <div><?php echo $message; ?></div>
        <table class="table table-bordered mt-3" width="100%" cellpadding="5" cellspacing="1" border="1">
            <form action="" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <tr>
                    <td>Nama Siswa:</td>
                    <td><input name="nama" type="text" class="form-control" value="<?php echo $data['nama']; ?>" required></td>
                </tr>
                <tr>
                    <td>Nilai Matematika:</td>
                    <td><input name="mtk" type="text" class="form-control" value="<?php echo $data['mtk']; ?>" required></td>
                </tr>
                <tr>
                    <td>Nilai B. Indonesia:</td>
                    <td><input name="bind" type="text" class="form-control" value="<?php echo $data['bind']; ?>" required></td>
                </tr>
                <tr>
                    <td>Nilai B. Inggris:</td>
                    <td><input name="bing" type="text" class="form-control" value="<?php echo $data['bing']; ?>" required></td>
                </tr>
                <tr>
                    <td>

                    </td>
                    <td>
                        <input name="submit_data" type="submit" class="btn btn-sm btn-primary" value="Perbarui Data">
                        <a href="index.php" class="btn btn-sm btn-success">Kembali</a>
                    </td>
                </tr>
            </form>
        </table>
    </div>
</body>

</html>