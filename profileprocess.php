<?php
include 'connect.php' ;

$name = $_POST['name'] ;
$email = $_POST['email'] ;
$phoneNo = $_POST['phoneNo'] ;
$address = $_POST['address'] ; 

$sql = "UPDATE profile SET email = '$email', phoneNo = '$phoneNo', address = '$address' WHERE name = '$name' " ;
$insert = mysqli_query($conn, $sql) ;
if($insert)
	{
		echo "<script>alert('Your Profile Successfully Updated') ;"	;
		echo "window.location.href = 'profilereg.php';</script>";
	}
	else
	{
		echo "<script>alert('Your Profile Not Updated') ;"	;
		echo "window.location.href = 'profilereg.php';</script>";
	}

?>