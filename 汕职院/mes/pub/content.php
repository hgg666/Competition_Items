<?php
	$server = "localhost";
	$user = "root";
	$password = "";
	$database = "szy";
	$mysqli=new mysqli();
	$conn = $mysqli->connect($server,$user,$password,$database);
	if (mysqli_connect_errno($conn)) 
	{ 
    	echo "连接 MySQL 失败: " . mysqli_connect_error(); 
	} 
	$mysqli->set_charset('utf8');

?>