<?php
// Cek apakah tidak ada data di $_GET
if (
    !isset($_GET["nama"]) ||
    !isset($_GET["nim"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["prodi"]) ||
    !isset($_GET["gambar"])
) {
    // redirect
    header("Location: latihan1.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>Biodata Mahasiswa</h1>
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>" alt=""></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nim"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
        <li><?= $_GET["prodi"]; ?></li>
    </ul>

    <a href="latihan1.php">Back Home</a>
</body>

</html>