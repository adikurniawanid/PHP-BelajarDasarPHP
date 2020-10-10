<?php
// array
// array numerik dengan indeks angka
//array asosiatif dengan indeks asosiasi yang ditentukan (pertemuan 6)
// funfact : type data bisa berbeda tipedata
$arrAngka = [1, 2, 3, 4, 5];
$arrHuruf = ["Jan", "Feb", "Mar"];
$arrRan = ["Jan", 123, "Mar"];

//cara menampilkan secara debug
//var_dump()
//print_r()
var_dump($arrAngka);
echo "<br>";
print_r($arrAngka);
echo "<br><br>";
var_dump($arrHuruf);
echo "<br>";
print_r($arrHuruf);
echo "<br><br>";
var_dump($arrRan);
echo "<br>";
print_r($arrRan);
echo "<br><br>";

// menampilkan satu elemen
// dapat menggunakan echo
echo $arrHuruf[2];

//menambahkan elemen baru
print_r($arrRan);
$arrRan[] = "adi Kece";
echo "<br>";
print_r($arrRan);

echo "<br><br>";

//menampilkan isi array untuk user
// cara kerja, cek arr , simpan ke variabel key
// jika ada => , maka akan disimpan di $value
// misal foreach ($books as $book => $value)
// perhatikan singular dan plurar nya supaya jelas
foreach ($arrRan as $key => $value) {
    echo $value;
}
?>

<?php
$mahasiswa = [
    ["Adi Kurniawan", "09021181823168", "Informatika", "@uwu uwu"],
    ["Kurniaw", "09021181823003", "SI", "@owo owi"]
];
?>

<!-- untuk non 2d array -->
<!-- <html>
<ul>
<h1>Daftar Mahasiswa</h1>
<?php foreach ($mahasiswa as $key => $value) : ?>
    <li><?= $value  ?></li>
<?php endforeach ?>
</ul>
</html> -->

<html>
<h1>Daftar Mahasiswa</h1>
<?php foreach ($mahasiswa as $key) : ?>
    <ul>
        <li>Nama : <?= $key[0]; ?></li>
        <li>NIM : <?= $key[1]; ?></li>
        <li>Jurusan: <?= $key[2]; ?></li>
        <li>Medsos: <?= $key[3]; ?></li>
    </ul>
<?php endforeach ?>

</html>