<?php

$biodata = array(
	'name' => 'amin', 
	'address' => 'jalan kutabima rt 02/rw 02', 
	'hobbies' => array('madang', 'minum'),
	'is_married' => false,
	'school' => array('highSchool' => 'Smk Muhammadiyah Majenang', 'university' => 'belum kuliah'),
	'skills' => array('visual basic' => ['desktop'],'php' => ['crud']),

);

$json = json_encode($biodata);
echo $json;

?>
