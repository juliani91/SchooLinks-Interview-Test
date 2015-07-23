<?php 
	include_once('connect.php');

	$res = mysqli_query($db, "select * from info");
	$result = array();

	while($row = mysqli_fetch_array($res, MYSQLI_ASSOC))
		array_push($result, array('name' => $row['name'],
								  'email' => $row['email'],
								  'telephone' => $row['telephone']));
	
	echo json_encode(array("result" => $result));
?>