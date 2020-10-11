<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}

require 'functions.php';

// mengambil id dari url
$id = $_GET["id"];

// query data mahasiswa dari id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

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
    <title>Ubah data mahasiswa</title>
</head>

<body>
    <h1>Ubah Data Mahasiswa</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value=" <?= $mhs["id"]; ?> ">
        <input type="hidden" name="potolama" value=" <?= $mhs["poto"]; ?> ">
        <ul>
            <li>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" id="nim" required value="<?= $mhs["nim"]; ?>">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required value=" <?= $mhs["nama"]; ?> ">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required value=" <?= $mhs["jurusan"]; ?> ">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="email" name="email" id="email" required value=" <?= $mhs["email"]; ?> ">
            </li>
            <li>
                <label for="poto">Foto :</label>
                <img src="img/<?= $mhs["poto"]; ?>" width="50">
                <input type="file" name="poto" id="poto">
            </li>
        </ul>
        <li>
            <button type="submit" name="submit">Edit</button>
        </li>
    </form>
</body>

</html>