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

    //upload gambar
    $poto = upload();

    if (!$poto) {
        return false;
    }

    // query insert
    $query = "INSERT INTO mahasiswa VALUES ('','$nama','$nim','$jurusan','$email','$poto')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{
    $namafile = $_FILES['poto']['name'];
    $ukuranfile = $_FILES['poto']['size'];
    $error = $_FILES['poto']['error'];
    $tempname = $_FILES['poto']['tmp_name'];

    //cek apakah tidak ada gambar diupload
    if ($error === 4) {
        echo "<script>
alert('pilih gambar terlebih dahulu!');
</script>";
        return false;
    }

    //cek type file apakah sesuai
    $ekstensiPotoValid = ['jpg', 'jpeg', 'png'];
    $ekstensiPoto = explode('.', $namafile);
    $ekstensiPoto = strtolower(end($ekstensiPoto));

    if (!in_array($ekstensiPoto, $ekstensiPotoValid)) {
        echo "<script>
alert('gambar harus format .jpg, .png, .jpeg!');
</script>";
        return false;
    }

    //batasi ukuran gambar
    if ($ukuranfile > 1000000) {
        echo "<script>
alert('ukuran gambar terlalu besar');
</script>";
        return false;
    }

    //jika lolos semua selkesi, siap upload gambar
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiPoto;

    move_uploaded_file($tempname, 'img/' . $namaFileBaru);

    return $namaFileBaru;
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
    $potolama = htmlspecialchars($data["potolama"]);

    // cek apakah user milih gambar baru atau tidak
    if ($_FILES['poto']['error'] == 4) {
        $poto = $potolama;
    } else {
        $poto = upload();
    }

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
