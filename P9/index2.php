<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// Ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");


// Ambil data (fetch) mahasiswa dari object result

// mysqli_fetch_row() // mengembalikan array numerik
// $mhs = mysqli_fetch_row($result);
// var_dump($mhs[3]);

// mysqli_fetch_assoc() // mengembalikan array assosiative
// while ($mhs = mysqli_fetch_assoc($result)) {
//     var_dump($mhs);
// }

// mysqli_fetch_array() // mengembalikan keduanya array numerik & array assosiative
// $mhs = mysqli_fetch_array($result);
// var_dump($mhs["3"]);

// mysqli_fetch_object()
// $mhs = mysqli_fetch_object($result);
// var_dump($mhs->email);




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

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
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td>
                    <?= $i; ?>
                </td>
                <td>
                    <a href="">Ubah</a> |
                    <a href="">Hapus</a>
                </td>
                <td><img src="img/<?= $row["gambar"]; ?>" alt="" width="50"></td>
                <td><?= $row["nim"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"] ?></td>
                <td><?= $row["prodi"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endwhile; ?>
    </table>
</body>

</html>