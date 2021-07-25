<?php
// $mahasiswa = [
//     ["Rifky Alamsyah", "19.01.4351", "rifkyalamsyah@students.amikom.ac.id", "Teknik Informatika"],
//     ["Rifky Alamsyah", "19.01.4351", "rifkyalamsyah@students.amikom.ac.id", "Teknik Informatika"]
// ];

// Array Asosiative 
// Definisinya sama seperti array numerik, kecuali key-nya adalah string yg kita buat sendiri

$mahasiswa = [
    [
        "nama" => "Kevin",
        "nim" => "19.01.4350",
        "email" => "kevin@students.ac.id",
        "prodi" => "Teknik Informatika",
        "gambar" => "kevin.jpeg"
    ],
    [
        "nama" => "Anie",
        "nim" => "19.01.4351",
        "email" => "anie@students.ac.id",
        "prodi" => "Teknik Informatika",
        "gambar" => "anie.jpeg",
        "tugas" => [90, 80, 100]
    ]
];

// echo $mahasiswa["1"]["tugas"]["1"];
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
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NIM : <?= $mhs["nim"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Prodi : <?= $mhs["prodi"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>