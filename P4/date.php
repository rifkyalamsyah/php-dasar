<?php
// Function

// date
// echo date("l, d-M-Y"); // outout Thursday, 22-Jul-2021

// time
// echo time();

// echo date("d M Y", time() + 60 * 60 * 24 * 100);

// mktime
// membuat deti sendiri
// mktime(0,0,0,0,0,0);
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0, 0, 0, 9, 3, 2000));

// strtotime
echo date("l", strtotime("3 sep 2000"));
