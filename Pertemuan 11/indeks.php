<?php
require "functions.php"; // bisa include juga
$mahasiswa = query("SELECT * FROM mahasiswa");
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
    <a href="tambah.php">Tambah data mahasiswa</a>
    <br>
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
        <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><img src="img/<?= $mhs["poto"]; ?> " alt=""></td>
                <td><?= $mhs["nama"]; ?></td>
                <td><?= $mhs["nim"]; ?></td>
                <td><?= $mhs["jurusan"]; ?></td>
                <td><?= $mhs["email"]; ?></td>
                <td><a href="ubah.php?id=<?= $mhs["id"]; ?>">Edit</a> |
                    <a href="hapus.php?id=<?= $mhs["id"]; ?>" onclick="return confirm('Yakin menghapus data')">Hapus</a></td>
            </tr>
            <?php $i++ ?>
        <?php endforeach ?>

    </table>

</body>

</html>