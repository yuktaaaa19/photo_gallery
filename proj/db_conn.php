<?php

$sname= "localhost";
$uname= "root";
$password = "";
$db_name = "photos";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
else{
		echo"connection established";
	}