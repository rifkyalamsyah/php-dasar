<?php
session_start();

// cek user sudah login atau blum
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

// Koneksi ke DBMS
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

require 'functions.php';

// Ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
// var_dump($mhs["nama"]);

// Cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // Cek apakah data berhasil ditambahkan atau tidak
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil Diubah');
                document.location.href= 'index.php'
            </script>
        ";
    } else {
        echo "
        <script>
                alert('Data Gagal Diubah');
                document.location.href= 'index.php'
            </script>
        ";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
</head>

<body>
    <h1>Ubah Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" id="nim" required value="<?= $mhs["nim"]; ?>">
            </li>
            <li>
                <label for=" email">Email : </label>
                <input type="text" name="email" id="email" required value="<?= $mhs["email"]; ?>">
            </li>
            <li>
                <label for=" prodi">Prodi : </label>
                <input type="text" name="prodi" id="prodi" required value="<?= $mhs["prodi"]; ?>">
            </li>
            <li>
                <label for=" gambar">Gambar : </label>
                <br>
                <img src="img/<?= $mhs['gambar']; ?>" alt="foto mahasiswa" width="40">
                <br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <br>
            <li>
                <button type=" submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>

    <br>

    <a href="index.php">Kembali</a>
</body>

</html>