<?php 

function biodata($name,$age){
	if($name=="misrudin" && $age==19){
	$data=[
			"name"=> "$name",
			"age" => $age,
			"adress" => "ciherang, rt 01 rw 02 desa limbangan",
			"hobies" => ["coding","swiming","thinking"],
			"is_merried" => false,
				"list_school" => [
									["name"=> "SDN 07 Limbangan",
									"year_in" => "2007",
									"year_out" => "2012",
									"major" => null],
									["name"=> "SMP Muhammadiyah 2 wanareja",
									"year_in" => "2002",
									"year_out" => "2015",
									"major" => null],
									["name"=> "SMK Muhammadiyah Majenang",
									"year_in" => "2005",
									"year_out" => "2018",
									"major" => "RPL"]
								],
			"skills" => [["skill_name"=>"PHP",
						 "level" => "Beiner"],
						 ["skill_name"=>"Javascript",
						 "level" => "Beiner"]],
			"interest_in_coding"=> true
		];

		return json_encode($data); //return json

	}else{
		return "Data yang dimasukan salah!";
	}
}

$hasil= biodata("misrudin",19);
echo "$hasil";