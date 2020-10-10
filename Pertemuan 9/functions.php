<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

//ambil data dari tabel/ query data
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
