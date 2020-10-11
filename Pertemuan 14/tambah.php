<?php
require 'functions.php';
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

//cek tombol submit apakah sudah ditekan
if (isset($_POST["submit"])) {
    //validasi apakah berhasil ditambahkan
    if (tambah($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'indeks.php';
        </script>
        ";
    } else {
        echo "<script>
        alert('data gagal ditambahkan!');
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
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" id="nim" required>
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="email" name="email" id="email" required>
            </li>
            <li>
                <label for="poto">Foto : </label>
                <input type="file" name="poto" id="poto" required>
            </li>
        </ul>
        <li>
            <button type="submit" name="submit">Tambahkan Data</button>
        </li>
    </form>
</body>

</html>