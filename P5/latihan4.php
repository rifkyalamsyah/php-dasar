<?php

// arra multi dimensi
$mahasiswa = [
    ["Rifky Alamsyah", "19.01.4351", "Teknik Informatika", "rifky.alamsyah@students.amikom.ac.id"],
    ["Rifky Alamsyah", "19.01.4351", "Informatika", "rifkyalamsyah@students.amikom.ac.id"],
    ["Rifky", "19.01.4351", "Informatika", "rifkyalamsyah30@gmail.com"]
];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array multi dimensi</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>NIM : <?= $mhs[1]; ?></li>
            <li>Prodi : <?= $mhs[2]; ?></li>
            <li>Email : <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>