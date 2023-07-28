<?php

	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");

	include_once '../config/connect.php';
	include_once '../class/db_class.php';

	$db = new db();
	$db = $db->get_connection();
	
	$items = new db($db);
//	$stmt = $items->readData();

    /*
	$sysArr = array();
	$sysArr = ["body"] = array();
	$sysArr = ["itemCount"] = $itemCount;

	while($row = $stmt->fetch (PDO::FETCH_ASSOC) ) {
		extract($row);
		$e = array(
			"id" => $id,
			"lastname" => $lastname
		);

		array_push($sysArr["body"], $e);
		
		}
	echo json_encode($sysArr);
	*/
?>