<?php

// Pengkondisian / Percabangan
// if else
// if else is else
// ternary
// switch


// if
// $x = 10;
// if ($x < 20); {
//     echo "Benar";
// } else {
//     echo "Salah";
// }
// output Benar

// else if
// $x = 2;
// if ($x < 20) {
//     echo "Benar";
// } elseif ($x == 20) {
//     echo "Binggo!";
// } else {
//     echo "Salah";
// }
// output Benar
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengkondisian</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>

<body>
    <p>Mengunakan perulangan for di php</p>
    <p>Pengkondisian di php</p>
    <!-- menggunakan php -->
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <?php if ($i % 2 == 1) : ?>
                <tr class="warna-baris">
                <?php else : ?>
                <tr>
                <?php endif; ?>

                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <td><?php echo "$i , $j"; ?></td>
                <?php endfor; ?>
                </tr>
            <?php endfor; ?>
    </table>
</body>

</html>