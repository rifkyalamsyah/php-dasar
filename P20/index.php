<?php
session_start();

// cek user sudah login atau blum
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

// Memanggil/Menghubungkan function
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

// Tombol Cari ditekan
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        .loader {
            width: 90px;
            position: absolute;
            top: 92px;
            left: 280px;
            z-index: -1;
            display: none;
        }
    </style>
</head>

<body>
    <a href="logout.php">Logout</a>

    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus placeholder="Search" autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">Cari</button>

        <img src="img/loader.gif" alt="loader" class="loader">
    </form>
    <br>

    <div id="container">
        <table border="1" cellpadding="10" cellspace="0">
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Prodi</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($mahasiswa as $row) : ?>
                <tr>
                    <td>
                        <?= $i; ?>
                    </td>
                    <td>
                        <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
                        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="
                    return confirm('yakin?');">Hapus</a>
                    </td>
                    <td><img src="img/<?= $row["gambar"]; ?>" alt="" width="50"></td>
                    <td><?= $row["nim"]; ?></td>
                    <td><?= $row["nama"]; ?></td>
                    <td><?= $row["email"] ?></td>
                    <td><?= $row["prodi"]; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>

    <!-- Javascript -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>