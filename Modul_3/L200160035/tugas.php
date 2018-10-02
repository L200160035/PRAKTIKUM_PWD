<!DOCTYPE html>
<html>
<head>
	<title>Program Penjumlahan</title>
</head>
<body>
	<form method="POST" action="tugas.php">
		<p>Nilai A adalah 	: <input type="text" name="nilai_A" size="10"></p>
		<p>Nilai B adalah 	: <input type="text" name="nilai_B" size="10"></p>
		<p><input type="submit" value="Jumlahkan" name="Jumlah"></p>
	</form>
	<?php
	error_reporting(E_ALL ^ E_NOTICE);
	$nilai_A = $_POST['nilai_A'];
	$nilai_B = $_POST['nilai_B'];
	$submit = $_POST['Jumlah'];
	$jumlah = $nilai_A + $nilai_B;
	if($submit){
		echo "</br>Nilai A adalah $nilai_A";
		echo "</br>Nilai B adalah $nilai_B</br>";
		echo "Jadi Nilai A ditambah Nilai B adalah $jumlah";
		
	}
	?>
</body>
</html>