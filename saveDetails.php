<?php
  include ('connect.php');
    $id = $_POST['id'];
    $nme = $_POST['name'];
	  $mat = $_POST['allergies'];
	  $a = $_POST['asthma'];
	  $b = $_POST['diabetes'];
	  $c = $_POST['hypertension'];
	  $d = $_POST['blooddyscrasias'];
	  $e = $_POST['heartdisease'];
	  $f = $_POST['congenitalheart'];
	  $g = $_POST['otherdisease'];
	  $h = $_POST['medictaken'];
	  $i = $_POST['notas'];

	  



$sql = "UPDATE users s, medical_history h SET h.allergies='".$mat."', h.asthma='".$a."', h.diabetes='".$b."', h.hypertension='".$c."', h.blooddyscrasias='".$d."', h.heartdisease='".$e."', h.congenitalheart='".$f."', h.otherdisease='".$g."', h.medictaken='".$h."', h.notas='".$i."'  WHERE h.id= '".$id."'";
$result = mysqli_query($conn,$sql) or die ("Error running MySQL query!");



include ('listDen.php');
echo '<script type="text/javascript">';
echo 'alert("Data Has Been Updated");';
echo 'window.location.href = "listDen.php";';
echo '</script>';


 ?>
