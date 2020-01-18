<?php 
include "koneksi.php";

if(isset($_POST["submit"])){

	$name=$_POST["name3"];
	$price=$_POST["price"];
	$nama2=$_POST["name2"];
	$nama1=$_POST["name1"];
	$category=	mysqli_query($conn,"select id from category where name='$nama2'");
	$cashier=	mysqli_query($conn,"select id from cashier where name='$nama1'");

	while($data=mysqli_fetch_row($category)){ $a=$data[0]; }
    while($data2=mysqli_fetch_row($cashier)){ $b=$data2[0]; }
        

	$query="INSERT INTO product VALUES('','$name','$price','$a','$b')";
	mysqli_query($conn,$query);

	if(mysqli_affected_rows($conn) > 0){
		echo "
			<script>
				alert('Data berhasil ditambahkan');
				document.location.href='index.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('Data gagal ditambahkan');
				document.location.href='index.php';
			</script>
		";
	}
}