<?php
session_start();
	include 'connect.php';

$leaveid = $_POST['leaveid'];
$action = $_POST['action'];
$admRemark = $_POST['remark'];
date_default_timezone_set('Asia/Kuala_Lumpur');
$remarkdate = date("Y-m-d");

$sql = "UPDATE tblleaves SET AdminRemark = '$admRemark', AdminRemarkDate = '$remarkdate', Status = '$action' WHERE leave_id = '$leaveid'";
$insert = mysqli_query($conn, $sql) ;
if($insert)
	{
		echo "Updated";
	}
	else
	{
		echo "Not Updated";
	}
?>