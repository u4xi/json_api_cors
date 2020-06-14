<?php

if($_SERVER["REQUEST_METHOD"] == "GET"){

	$array = [
	    ["id" => "-1","name" => "Could not get data.","time" => "2000-01-01 00:00:00.000000"],
	    ["id" => "-2","name" => "Could not get data.","time" => "2000-01-01 00:00:00.000000"],
	    ["id" => "-3","name" => "Could not get data.","time" => "2000-01-01 00:00:00.000000"],
	];

	echo json_encode($array);

} else { // POST

	$array = [
	    ["id" => "1","name" => "Yamada Taro","time" => "2020-06-13 15:57:27.201801"],
	    ["id" => "2","name" => "Saitou Hanako","time" => "2020-06-13 16:31:37.501601"],
	    ["id" => "3","name" => "Yamamoto Jiro","time" => "2020-06-13 18:55:50.031201"],
	];

	echo json_encode($array);
}

?>