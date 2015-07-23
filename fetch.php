<?php 
	include_once('connect.php');
	// Selecting all elements from the table info, must create table info on PHPMYADMIN
	$res = mysqli_query($db, "select * from info");
	$result = array();// empty array for storing all data below as key value pairs

	while($row = mysqli_fetch_array($res, MYSQLI_ASSOC))
		array_push($result, array('name' => $row['name'],
								  'email' => $row['email'],
								  'telephone' => $row['telephone']));
	
	echo json_encode(array("result" => $result)); // encoding the value pairs with jason on result array.
?>