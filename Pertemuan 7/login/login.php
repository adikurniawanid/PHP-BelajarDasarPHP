<?php
//cek submit apakah sudah ditekan
if (isset($_POST["submit"])) {
    if (
        $_POST["username"] == "admin" &&
        $_POST["password"] == "admin"
    ) {
        header("Location: admin.php");
    } else {
        $error = true;
    }
}
//cek username dan password
// jika benar di redirect ke admin
// jika salah, tampilkan pesan kesalahan
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php if (isset($error)) : ?>
        <p style="color : red; font-style:italic;"> username atau password salah </p>
    <?php endif ?>

    <ul>
        <form action="" method="post">
            <li>
                <label for="klikUsername">Username</label>
                <input type="text" name="username" id="klikUsername">
            </li>
            <li>
                <label for="klikPassword">Password</label>
                <input type="password" name="password" id="klikPassword">
            </li>
            <li>
                <button type="submit" name="submit">login</button>
            </li>
        </form>
    </ul>
</body>

</html>