<?php
// Pengulangan
/*
1. for
2. while
3. do.. while
4. foreach : pengulangan khusus array
*/

// for
// for ($i = 0; $i < 5; $i++) {
//     echo "hello world <br>";
// }


// while
// $i = 0;
// while ($i < 5) {
//     echo "hello world <br>";
//     $i++;
// }


// do while
// $i = 0;
// do {
//     echo "hello world <br>";
//     $i++;
// } while ($i < 10);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan</title>
</head>

<body>
    <p>Mengunakan table di html</p>
    <!-- menggunakan html biasa -->
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
            <td>1,4</td>
            <td>1,5</td>
        </tr>
        <tr>
            <td>2,1</td>
            <td>2,2</td>
            <td>2,3</td>
            <td>2,4</td>
            <td>2,5</td>
        </tr>
        <tr>
            <td>3,1</td>
            <td>3,2</td>
            <td>3,3</td>
            <td>3,4</td>
            <td>3,5</td>
        </tr>
    </table>


    <br>

    <p>Mengunakan perulangan for php 1</p>
    <!-- menggunakan php 1 -->
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
        for ($i = 1; $i <= 3; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 5; $j++) {
                echo "<td>$i,$j</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    <br>

    <p>Mengunakan perulangan for php 2</p>
    <!-- menggunakan php 2  -->
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 3; $i++) : ?>
            <tr>
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <td><?php echo "$i , $j"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>

</html>