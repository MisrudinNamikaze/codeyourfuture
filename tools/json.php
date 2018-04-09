<?php

$biodata = array(
	'name' => 'Misrudin', 
	'address' => 'Ciherang rt 01/rw 12 desa limbangan', 
	'hobbies' => array('madang', 'minum'),
	'is_married' => false,
	'school' => array('highSchool' => 'Smk Muhammadiyah Majenang', 'university' => 'belum kuliah'),
	'skills' => array('visual basic' => ['desktop'],'php' => ['crud']),

);

$json = json_encode($biodata);
echo $json;

?>
