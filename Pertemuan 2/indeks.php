<?php
// Petemuan 2 - PHP dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dump
echo "echo<br>";
print "print<br>";
print_r("print_r<br>");
var_dump("var_dump");
echo "<br>";

//contoh penerapan vardump
//untuk menampilkan hasil perbandingan
var_dump(1 > 2);

echo "<br><br>";

//Variabel dan Tipe Data
// Variabel
// tidak boleh diawali angka, tapi boleh mengandung angka
$nama = "Adi";

//contoh interpolasi antara penggunaan '' dan ""
echo "$nama <br>";
echo '$nama <br>';


//Operator
// aritmatika
// +-*/%



// Penggabung string
// .

// Asigment
// = += -= *= /= %= .=


// Perbandingan
// < > <= >= == !=

// Identitas
// === !==

// Logika
// && || !

// Penulisan Sintaks PHP
// 1. PHP didalam HTML
// 2. HTML didalam PHP
?>

<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>
	<h1>Haloo Selamat Datang <br> <?php echo "Ini PHP dalam HTML"; ?> <h1>
			<p><?php echo "$nama jago ngegame"; ?></p>
			<?php
			echo "<h1>Ini HTML dalam PHP</h1> "
			?>
			<?php
			echo "<h1>$nama humble orangnya</h1> "
			?>
</body>

</html>