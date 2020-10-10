<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

//ambil data dari tabel/ query data
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    // ambil data dari tiap elemen
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $email = htmlspecialchars($data["email"]);
    $poto = htmlspecialchars($data["poto"]);

    // query insert
    $query = "INSERT INTO mahasiswa VALUES ('','$nama','$nim','$jurusan','$email','$poto')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;
    $id = $data["id"];
    // ambil data dari tiap elemen
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $email = htmlspecialchars($data["email"]);
    $poto = htmlspecialchars($data["poto"]);

    // query insert
    $query = "UPDATE mahasiswa SET 
    nama = '$nama',
    nim = '$nim',
    jurusan = '$jurusan',
    email = '$email',
    poto = '$poto' 
    WHERE id = $id
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM MAHASISWA WHERE
    nama LIKE '%$keyword%' OR
    nim LIKE '%$keyword%' OR
    jurusan LIKE '%$keyword%' OR
    email LIKE '%$keyword%' OR
    poto LIKE '%$keyword%'
    ";
    return (query($query));
}
