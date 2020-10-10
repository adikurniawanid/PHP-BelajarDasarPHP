<?php

$mahasiswa = [
    [
        "nama" => "Adi Kurniawan",
        "nim" => "0901",
        "jurusan" => "TI",
        "medsos" => "@uwu",
        "gambar" => "gambar1.jpg"
    ],
    [
        "nama" => "Budi Adi",
        "nim" => "0902",
        "jurusan" => "SI",
        "medsos" => "@owo",
        "gambar" => "gambar2.jpg"
    ],
];

//variable scope / lingkup variable
// ingat kembali konsep variable java :)

$x = 10;
echo $x;
echo "<br>";

function tampilx()
{
    $x = 2;
    echo $x;
}

function tampil()
{
    global $x;
    echo $x;
}

tampilx();
echo "<br>";
tampil();
echo "<br>";
echo $x;
echo "<br>";
echo "<br>";


?>

<?php
// SuPER GLOBAL
// variable global milik PHP yang merupakan array asosiatif
// $_GET , $_POST , $_REQUEST , $_SESSION , $_COOKIE , $_SERVER , $_ENV

// $_GET["nama"] = "Adi Kurniawan";
// $_GET["nim"] = "0902";

var_dump($_GET);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daftar mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $key) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $key["nama"]; ?>&nim=<?= $key["nim"]; ?>
    &medsos=<?= $key["medsos"]; ?>&jurusan=<?= $key["jurusan"]; ?>&gambar=<?= $key["gambar"]; ?> ">
                    <?= $key["nama"] ?></a>
            </li>

        <?php endforeach  ?>
    </ul>
</body>

</html>