<?php
require 'functions.php';

// //koneksi ke database
// $conn = mysqli_connect("localhost", "root", "", "phpdasar");

// mengambil id dari url
$id = $_GET["id"];

// query data mahasiswa dari id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");

//cek tombol submit apakah sudah ditekan
if (isset($_POST["submit"])) {
    //validasi apakah berhasil diedit
    if (ubah($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil diedit!');
        document.location.href = 'indeks.php';
        </script>
        ";
    } else {
        echo "<script>
        alert('data gagal diedit!');
        </script>";
        echo "<br>";
        echo mysqli_error($conn);
    }
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
    <h1>Ubah Data Mahasiswa</h1>
    <form action="" method="post">
        <!-- <input type="hidden" name="id" value=" <?= $mhs["id"] ?> "> -->
        <ul>
            <li>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" id="nim" required value="<?= $mhs["nim"] ?>">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required value=" <?= $mhs["nama"] ?> ">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required value=" <?= $mhs["jurusan"] ?> ">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="email" name="email" id="email" required value=" <?= $mhs["email"] ?> ">
            </li>
            <li>
                <label for="poto">Foto : </label>
                <input type="text" name="poto" id="poto" value=" <?= $mhs["poto"] ?> ">
            </li>
        </ul>
        <li>
            <button type="submit" name="submit">Edit</button>
        </li>
    </form>
</body>

</html>