<?php 
//Connect to the database named: fetch_extract.... Must create on PHPMYADMIN
$db = mysqli_connect("localhost", "root", "julian", "fetch_extract");
mysqli_select_db($db, "fetch_extract");

?>