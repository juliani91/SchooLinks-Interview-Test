<?php 

	include_once('connect.php');
	$name=$_GET["name"];
	$email=$_GET["email"];
	$telephone=$_GET["telephone"];
	mysqli_query($db, "insert into info values ('$name', '$email', '$telephone')");




?>