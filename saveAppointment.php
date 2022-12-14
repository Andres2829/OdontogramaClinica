<?php

	include ("connect.php");
	if(isset($_POST['SUBMIT']))
	{
    $id =$_POST['id'];
    $name =$_POST['name'];
	$dt = $_POST['date'];
	$tm = $_POST['time'];


    $stmt = $conn->prepare("INSERT INTO appointment (id,name,appointment_date,appointment_time)  VALUES (?,?,?,?)");
    $stmt->bind_param("isss", $id, $name, $dt, $tm);

    $stmt->execute() ;

     echo "<script>alert('The data successfully inserted');";
     echo "window.location.href = 'listReg.php';</script>";

    $stmt->close();
    $conn->close();
	}
 	  ?>
