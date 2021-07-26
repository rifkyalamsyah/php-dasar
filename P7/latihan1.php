<?php

// $_GET 

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
        "gambar" => "anie.jpeg"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$$_GET</title>
</head>

<body>
    <h1>Daftar mahasiswa</h1>

    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"] ?>&email=<?= $mhs["email"]; ?>&prodi=<?= $mhs["prodi"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>