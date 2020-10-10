<?php
//A. pengulangan
//1. for
for ($i = 0; $i < 5; $i++) {
	echo "Hello $i <br>";
}

echo "<br>";

//2. while
//selama kondisi nya true, lakukan perintah
$i = 0;
while ($i < 5) {
	echo "Hello World $i <br>";
	$i++;
}

echo "<br>";

//3. do .. while
//persis dengan while, tapi lakukan dulu baru cek
//lakukan perintah, kemudian cek kondisi
$i = 0;
do {
	echo "Hello Adi $i <br> ";
	$i++;
} while ($i < 5);

echo "<br>";

//4. foreach
?>



<!DOCTYPE html>
<html>

<head>
	<title>Contoh Pengulangan</title>
</head>

<body>

	<table border="1" cellpadding="10" cellspacing"0">
		<?php
		for ($i = 1; $i <= 3; $i++) {
			echo "<tr>";
			for ($j = 1; $j <= 5; $j++) {
				echo "<td>$i,$j</td>";
			}
			echo "</tr>";
		}
		?>
	</table>
	<br>
</body>

</html>



<!DOCTYPE html>
<html>

<head>
	<title>Contoh Pengulangan 2</title>
</head>

<body>
	<table border="1" cellpadding="10" cellspacing"0">
		<?php for ($i = 1; $i <= 3; $i++) { ?>
			<tr>
				<?php for ($j = 1; $j <= 5; $j++) {
				?>
					<td><?php echo "$i,$j" ?></td>
				<?php } ?>
			</tr>
		<?php } ?>
</body>

</html>
</table>

<?php
//B. Pengkondisian
//1. if else
//2. if else if else
//3. ternary
//4. switch

$x = 20;
if ($x < 20) {
	echo "benar";
} else if ($x == 20) {
	echo "pas";
} else {
	echo "salah";
}
?>

<html>
<style>
	.warnabaris {
		background-color: gray;
	}

	.warnakondisi {
		background-color: red;
	}
</style>
<!-- coba review materi  -->

<table border=1 cellpadding="10" cellspacing"0" class="warnabaris">
	<?php for ($i = 1; $i <= 5; $i++) { ?>
		<?php if ($i % 2 == 1) : ?>
			<tr class="warnakondisi">
			<?php else : ?>
			<tr>
			<?php endif ?>
			<?php for ($j = 1; $j <= 5; $j++) { ?>
				<td>
					<?= "$i,$j"; ?>
				</td>
			<?php }  ?>
			<br>
			</tr>
		<?php } ?>
</table>

</html>