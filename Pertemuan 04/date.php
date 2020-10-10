<?php 
	//Date
	//Untuk menampilkan tanggal dengan format tertentu
	echo "fungsi date <br>";
	echo date("l, d M Y");
	//l = hari
	//d = tanggal
	//m = bulan dalam angka
	//M = bulan dalam huruf
	//Y = tahun 4 angka
	//y = tahun 2 angka

	echo "<br>";
	echo "<br>";

	//Time
	//UNIX Timestamp / EPOCH time
	//detik yang sudah berlalu sejak 1 januari 1970
	echo time();

	echo "<br>";
	echo "<br>";

	// mengetahui hari ke100 dari hari ini
	echo date("l, d M Y",time()+60*60*24*100);
	// mengetahui 100 hari yang lalu dari hari ini
	echo date("l, d M Y",time()-60*60*24*100);

	echo "<br>";
	echo "<br>";

	// mengetahui hari kelahiran
	// mk time
	// membuat sendiri detik
	// mktime(0,0,0,0,0,0)
	// jam , menit , detik , bulan , tanggal , tahun
	echo date("l", mktime(0,0,0,1,21,2000) );

	echo "<br>";
	echo "<br>";

	//strtotime
	//memperoleh total detik dari 1 januari 1970
	echo strtotime("21 jan 2000")
