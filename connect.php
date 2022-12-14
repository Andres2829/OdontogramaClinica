<?php

$conn=mysqli_connect("localhost", "root", "", "clinica-l8");
// Check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: ". mysqli_connect_error();
}
$mysqli = new mysqli("localhost", "root", "", "clinica-l8");
$mysqli->set_charset("utf8");
?>