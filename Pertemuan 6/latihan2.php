<?php
// array asosiatif
$mahasiswa = [
    [
        "nama" => "Adi",
        "nim" => "0901",
        "jurusan" => "TI",
        "medsos" => "@uwu",
        "gambar" => "gambar1.jpg"
    ],
    [
        "nama" => "Budi",
        "nim" => "0902",
        "jurusan" => "SI",
        "medsos" => "@owo",
        "gambar" => "gambar2.jpg"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $key) : ?>
        <ul>
            <li><img src="img/<?= $key["gambar"] ?>" alt=""></li>
            <li>nama: <?= $key["nama"] ?></li>
            <li>nim: <?= $key["nim"] ?></li>
            <li>jurusan: <?= $key["jurusan"] ?></li>
            <li>medsos: <?= $key["medsos"] ?></li>
        </ul>
    <?php endforeach ?>

</body>

</html>