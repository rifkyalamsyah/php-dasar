<?php
// array
// variabel yg memiliki banyak nilai
// element pada array boleh memiliki tipedata yg berbeda
// pasngan antara key & value
// key-nya adalah index, yg dimelai dari 0

// membuat array dengan cara lama
$hari = array("senin", "selasa", "rabu");

// membuat array dengan cara lama
$bulan = ["januari", "februari", "maret"];
$arr1 = [123, "text", false];

// menampilkan array
// var_dump(); | print_r();
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// menampilkan 1 element array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// menambahkan element baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jum'at";
echo "<br>";
var_dump($hari);
