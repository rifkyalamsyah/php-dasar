<?php
// pengulangan pada array
// for | foreach
$angka = [3, 2, 15, 20, 11, 77, 89, 100];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
    </style>
</head>

<body>
    <!-- Cara pertama -->
    <?php for ($i = 0; $i < count($angka); $i++) { ?>
        <div class="kotak">
            <?php echo $angka[$i]; ?>
        </div>
    <?php } ?>


    <!-- cara kedua -->
    <div class="clear"></div>

    <?php foreach ($angka as $a) { ?>
        <div class="kotak"><?php echo $a; ?></div>
    <?php } ?>


    <!-- cara ketiga -->
    <div class="clear"></div>

    <?php foreach ($angka as $a) : ?>
        <div class="kotak"><?php echo $a; ?></div>
    <?php endforeach; ?>

</body>

</html>