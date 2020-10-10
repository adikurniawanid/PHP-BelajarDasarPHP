<!-- cek apakah tidak ada dat di $_GET -->
<?php
//jika data tidak ada isi. ingat ada simbol negasi
if (
    !isset($_GET["nama"])
    || !isset($_GET["nim"])
    || !isset($_GET["jurusan"])
    || !isset($_GET["medsos"])
    || !isset($_GET["gambar"])
) {
    //redirect user kembali
    // L huruf besar
    header("Location: latihan1.php");
    // exit agar skrip dibawah tidak di exekusi
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"] ?>" alt=""></li>
        <li><?= $_GET["nama"]; ?> </li>
        <li><?= $_GET["nim"] ?></li>
        <li><?= $_GET["jurusan"] ?></li>
        <li><?= $_GET["medsos"] ?></li>
    </ul>
</body>
<a href="latihan1.php">Kembali ke daftar mahasiswa</a>

</html>