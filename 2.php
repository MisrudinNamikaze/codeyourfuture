<?php 
function username($username){
	if(preg_match("/^[a-z0-9_]{5,12}$/", $username)){
		return "TRUE";
	}else{
		return "FALSE";
	}
}

function password($password){
	if(preg_match("/^[!@#$%&*_\-?0-9]{1}+[A-Z]{5}+[0-9!@#$%&*_\-?]{1}/", $password)){
		return "TRUE";
	}else{
		return "FALSE";
	}
}

$hasil=username("m_diin44");
echo "Username: $hasil";

echo "<br>";
$hasil=password("1WORLD!");
echo "Password: $hasil";

 ?>