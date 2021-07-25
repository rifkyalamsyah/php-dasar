<?php
$mahasiswa = [
    ["Rifky Alamsyah", "19.01.4351", "rifkyalamsyah@students.amikom.ac.id", "Teknik Informatika"],
    ["Rifky Alamsyah", "19.01.4351", "rifkyalamsyah@students.amikom.ac.id", "Teknik Informatika"]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
    <h1>Daftar mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>NIM : <?= $mhs[1]; ?></li>
            <li>Email : <?= $mhs[2]; ?></li>
            <li>Prodi : <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>