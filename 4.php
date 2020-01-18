<?php 

function cetak($angka){
	if(!is_numeric($angka) || $angka%2==0){
		echo "Parameter harus angka dan ganjil";
	}else{


		for($k=1; $k<=$angka; $k++){
			for($b=1; $b<=$angka; $b++){
				echo "* ";
			}
			echo "<br>";
		}



	}
}


$hasil= cetak(9);