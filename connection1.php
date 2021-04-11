<?php

//variables - $var echo - display



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn)
{
	echo "";
}
else{
	die("Connection Failed".mysqli_connect_error());
	}






?>