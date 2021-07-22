<?php

// array satu dimensi
$mahasiswa = ["Rifky Alamsyah", "19.01.4351", "Teknik Informatika", "rifky.alamsyah@students.amikom.ac.id"]

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array satu dimensi</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <!-- Menggunakan html biasa -->
    <ul>
        <li>Rifky Alamsyah</li>
        <li>19.01.4351</li>
        <li>Teknik Informatika</li>
        <li>rifky.alamsyah@students.amikom.ac.id</li>
    </ul>

    <!-- Cara pertama menggunakan php -->
    <ul>
        <li>
            <?= $mahasiswa[0]; ?>
        </li>
        <li>
            <?= $mahasiswa[1]; ?>
        </li>
        <li>
            <?= $mahasiswa[2]; ?>
        </li>
        <li>
            <?= $mahasiswa[3]; ?>
        </li>
    </ul>

    <!-- Cara kedua menggunakan php -->
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li><?= $mhs; ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>