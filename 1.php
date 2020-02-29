<?php

function biodata($nama, $tahun){
	 //deklarasi object

	 // input value object
	$object->name ‌= $nama; ‌
	$object->age‌ ‌= $tahun;
	$object->address‌ = "jln teta raya no 509, Tangerang";
	$object->hobbies‌ ‌= array["volley", "Memanah"];‌ ‌
	$object->is_married‌ ‌= false;‌ ‌
	$object->list_school‌ ‌= array[{"name":"Puspita","year_in": 2013,"year_out":2016},{"name":"SMPn 20 Tangerang","year_in": 2010,"year_out":2013},{"name":"SDN Cimone 3 Tangerang","year_in": 2004,"year_out":2010}];
	$object->major‌ = null;‌ ‌
	$object->skills‌ ‌= array[{"Skill_name": "HTML", "Level": "beginner"},{"Skill_name": "PHP","level":"beginner"}];
	$object->interest_in_coding‌ = true;‌ 
	//convert object to json
	$finish_object = json_encode($object);

	return $finish_object;
}

// $nama = "dwiki";
// $tahun = 21;

?>