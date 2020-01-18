<!-- membuat program menghitung kata -->


<?php 
$hasil="";

if(isset($_POST["kalimat"])){
	$kata=$_POST["kalimat"];
		if(is_numeric($kata)){
			$hasil= "Parameter harus string!"; //jika di isi angka
		}else{ //string
			$hitung= str_word_count($kata);

			$pecah= explode(" ", $kata);

			$hasil= $hitung."/".count($pecah);
		}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Menghitung Kata</title>
</head>
<body>

<form method="post">
	
	<input type="text" name="kalimat" required="">
	<button type="submit" name="cek">Cek kata</button>
	<br>
	<label><?= $hasil; ?></label>

</form>


</body>
</html>