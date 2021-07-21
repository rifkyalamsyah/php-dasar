<?php
// Sintak PHP

// Standart Output
// echo, print
// print_r
// var_dump

// echo "Rifky Alamsyah";
// print_r("Rifky");
// var_dump("Rifky");

/*
1. PHP didalam html
2. html didalam PHP
*/


// Variabel dan tipe data
// Variabel

$nama = "Rifky Alamsyah";
echo "hi, nama saya $nama;"


// Operator Aritmatika
// + - * %

// $x = 10;
// $y = 20;
// echo $x * $y;


// Penggabungan string / concat

// $nama_depan = "Rifky";
// $nama_belakang = "Alamsyah";

// echo $nama_depan . " " . $nama_belakang;


// Operator Assigenment
// =, +=, -=, *=, /=, %=, .=

// $x = 1;
// $x -= 5;
// echo $x;

// $nama = "Rifky";
// $nama .= " ";
// $nama .= "Alamsyah";
// echo $nama;


// Operator Perbandingan
// <, >, <=, >=, ==, !=

// var_dump(1 < 5);


// Operator Identitas
// ===, !==

// var_dump(1 === "1")


// Operator Logika
// &&, ||, !

// $x = 30;
// var_dump($x < 20 && $x % 2 == 0); // output true
// var_dump($x < 10 || $x % 2 == 0); // output true

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP Dasar</title>
</head>

<body>
    <!-- 1. PHP didalam html -->
    <h1>Hello, Selamat Datang <?php echo $nama; ?> </h1>
    <p><?php echo "Never stop learning" ?></p>

    <!-- 2. html didalam PHP -->
    <!-- <?php echo "<h1>Hi, Selamat Datang Rifky Alamsyah</h1>" ?> -->
</body>

</html>