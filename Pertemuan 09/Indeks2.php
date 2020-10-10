<?php
// koneksi ke database
$db = mysqli_connect("localhost", "root", "", "phpdasar");

//ambil data dari tabel/ query data
$result = mysqli_query($db, "SELECT * FROM mahasiswa");

//ambil data (fetch) mahasiswa dari objek result
// mysqli_fetch_row()       //mengembalikan array numerik
// mysqli_fetch_assoc()     //mengembalikan array asosiatif
// mysqli_fetch_array()     //mengembalikan array numerik dan asosiatif
// mysqli_fetch_object()

if (!$result) {
    echo "mysql error. silahkan laporkan ke admin";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>

    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No. </th>
            <th>Foto</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>E-Mail</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php while ($mhs = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><img src="img/<?= $mhs["poto"]; ?> " alt=""></td>
                <td><?= $mhs["nama"]; ?></td>
                <td><?= $mhs["nim"]; ?></td>
                <td><?= $mhs["jurusan"]; ?></td>
                <td><?= $mhs["email"]; ?></td>
                <td><a href="">Edit</a> | <a href="">Hapus</a></td>
            </tr>
            <?php $i++ ?>
        <?php endwhile ?>

    </table>

</body>

</html>