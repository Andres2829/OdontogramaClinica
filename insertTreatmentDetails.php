<?php

session_start();
$id = $_GET['id'];

  include ('connect.php');
  if(isset($_POST['SUBMIT']))
  {
    $dtldate = $_POST['details_date'];
	$tooth = $_POST['tooth_type'];
	$notes = $_POST['details_notes'];

mysqli_query
($conn, "INSERT INTO treatment_details (id,details_date,tooth_type,details_notes) VALUES ('$id','$dtldate','$tooth','$notes')") or die (mysqli_error($conn));

echo "<script>alert('The data successfully inserted');";
echo "window.location.href = 'treatmentRecord.php?id=$id';
</script>";

}
 ?>