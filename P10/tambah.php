<?php
// Koneksi ke DBMS
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

require 'functions.php';

// Cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // Cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan');
                document.location.href= 'index.php'
            </script>
        ";
    } else {
        echo "
        <script>
                alert('Gagal Ditambahkan');
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
    <title>Tambah Data Mahasiswa</title>
</head>

<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" id="nim" required>
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="prodi">Prodi : </label>
                <input type="text" name="prodi" id="prodi">
            </li>
            <li>
                <label for="gambar">gambar : </label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>

    <br>

    <a href="index.php">Kembali</a>
</body>

</html>