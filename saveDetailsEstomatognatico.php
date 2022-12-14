<?php
  include ('connect.php');
    $id = $_POST['id'];
    $nme = $_POST['name'];
	  $z = $_POST['labios'];
	  $x = $_POST['mejillas'];
	  $c = $_POST['maxilar_seperior'];
	  $v = $_POST['maxilar_inferior'];
	  $b = $_POST['lengua'];
	  $n = $_POST['paladar'];
	  $m = $_POST['piso'];
	  $s = $_POST['carrillos'];
	  $d = $_POST['glandulas_salivales'];
      $p = $_POST['oro_faringe'];
	  $o = $_POST['atm'];
	  $i = $_POST['ganglios'];
	  $u = $_POST['notas'];

	  



$sql = "UPDATE users s, estomatognatico e SET e.labios='".$z."', e.mejillas='".$x."', e.maxilar_seperior='".$c."', e.maxilar_inferior='".$v."', e.lengua='".$b."', e.paladar='".$n."', e.piso='".$m."', e.carrillos='".$s."', e.glandulas_salivales='".$d."' , e.oro_faringe='".$p."', e.atm='".$o."', e.ganglios='".$i."', e.notas='".$u."' WHERE e.id= '".$id."'";
$result = mysqli_query($conn,$sql) or die ("Error running MySQL query!");



include ('listDen.php');
echo '<script type="text/javascript">';
echo 'alert("Data Has Been Updated");';
echo 'window.location.href = "listDen.php";';
echo '</script>';


 ?>
