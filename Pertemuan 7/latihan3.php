<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <?php if (isset($_POST["submit"])) : ?>
<h1>Hallo selamat datang, <?= $_POST["nama"] ?></h1>
<?php endif ?> -->

    <form action="latihan4.php" method="post">
        masukan nama
        <input type="text" name="nama">
        <br>
        masukan password
        <input type="password" name="password">
        <button type="submit" name="submit">kirim</button>
    </form>
</body>

</html>