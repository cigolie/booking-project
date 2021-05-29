<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "air";

$con = mysqli_connect($host, $user, $password, $dbname);
if(mysqli_connect_errno())
	echo "Eroare conectare server BD ".mysqli_connect_error();	
?>