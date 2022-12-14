<form name="eventform" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
	<table width="400px">
		<tr>
			<td width="150px">Nama: </td>
			<td width="250px"><input type="text" name="title" id="title"></td>
		</tr>
		<tr>
			<td width="150px">Detail: </td>
			<td width="250px"><textarea name="detail" id="detail"></textarea></td>
		</tr>
		<tr>
			<td width="150px">Mula Cuti: </td>
			<td><input type="date" name="mulacuti" id="mulacuti"></td>
		</tr>
		<tr>
			<td width="150px">Tamat Cuti: </td>
			<td><input type="date" name="tamatcuti" id="tamatcuti"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="Mohon" id="submit"></td>
		</tr>
	</table>
</form>

<?php
	require_once('dbConn.php');

	
	if (isset($_POST['submit']))
	{
		$title = $_POST['title'];
		$detail = $_POST['detail'];
		$starttime = $_POST['starttime'];
		$endtime = $_POST['endtime'];

		$insert_f = "insert into eventcalender (title, detail, starttime, endtime) values ('$title', '$detail', '$starttime', '$endtime')";
			
		$result = mysqli_query($db,$insert_f);

		echo "<script>alert('Successfully Added a event');
		
		</script>";
	}
			
?>
