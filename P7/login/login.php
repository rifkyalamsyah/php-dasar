<?php
// Cek apakah submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    // Cek username & password
    if ($_POST["username"] == "admin" && $_POST["password"] == "123") {

        // Jika benar, redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
        // Jika salah, tampilkan pesan kesalahan
        $error = true;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Login Admin</h1>

    <?php if (isset($error)) : ?>
        <P style="color: red; font-style:italic;">Username / Password Salah!</P>
    <?php endif; ?>

    <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </form>
    </ul>
</body>

</html>