<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema Dental Patronato Tulcán</title>
    <link rel="shortcut icon" href="img/logopatronato.png">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

  </head>


  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Sistema Dental Patronato Tulcán</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="appointmentListReg.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="registerPatient.php">Register Patient</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="listReg.php">Patient List</a>
            </li>
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="profile.php">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<br><br>

<?php

	include ("connect.php");
	if(isset($_POST['submit']))
	{
		$nm = $_POST['name'];
		$matr = $_POST['matric_staffno'];
		$fac = $_POST['fac_dept'];
		$ic = $_POST['ic_passno'];
		$posit = $_POST['position'];
		$gdr = $_POST['gender'];
		$ctz = $_POST['citizen'];
		$tel = $_POST['phoneno'];
		$adrs = $_POST['address'];
		$cons = $_POST['patient_consent'];

		mysqli_query
		($conn, "INSERT INTO users (name,matric_staffno,fac_dept,ic_passno,position,	gender,citizen,phoneno,address,patient_consent)
      	 VALUES ('$nm','$matr','$fac','$ic','$posit','$gdr','$ctz','$tel','$adrs','$cons')") or die ( mysqli_error($conn));
      	 echo "<script>alert('The data successfully inserted');";
		 echo "window.location.href = 'registerPatient.php';</script>";
	}
?>

<section id="medhistory">
  <div class="container">
    <h3 class="text-center">Medical History</h3>
    <hr class="star-primary">
    <div class="row">
      <div class="col-lg-8 mx-auto">

<center>
<div align="center">
<form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<table width="400"  align="center" cellspacing="12px">
     
      <tr>
        <th colspan="2" scope="col"></th>
      </tr>
      
        <tr height="20">
        Please check of the following if you have had. Or please fill in the text box below.        
        </tr>
        
        <tr>
        <td></td>
           <td height="30"><input name="allergies" type="checkbox" value="allergies">
           Allergies</input></td>
        </tr>
        
        <tr>
        <td></td>
           <td height="30"><input name="asthma" type="checkbox" value="asthma">
           Asthma</input></td>
        </tr>
        
        <tr>
        <td></td>
           <td height="30"><input name="diabetes" type="checkbox" value="diabetes">
           Diabetes</input></td>
        </tr>
        
        <tr>
        <td></td>
           <td height="30"><input name="hypertension" type="checkbox" value="hypertension">
           Hypertension</input></td>
        </tr>
        
        <tr>
        <td></td>
           <td height="30"><input name="blooddyscrasias" type="checkbox" value="blooddyscrasias">
           Blood Dyscrasias</input></td>
        </tr>
        
        <tr>
        <td></td>
           <td height="30"><input name="heartdisease" type="checkbox" value="heartdisease">
           Heart Disease</input></td>
        </tr>
        
          <tr>
        <td></td>
           <td height="30"><input name="congenitalheart" type="checkbox" value="congenitalheart">
           Congenital Heart</input></td>
        </tr>
        
       <tr>
        <td height="24"><br>
          Other Diseases :</td>
        <td height="24"><br><input style="width:100%" type="text" name="other_disease"></td>
       </tr>
        
        <tr>
        <td height="24"><br>
          Medication Taken :</td>
        <td height="24"><br><input style="width:100%" type="text" name="meds_taken"></td>
       </tr>
     
     <tr>
        <td height="23" colspan="2"><div align="center"><br><br>
        &nbsp; &nbsp; &nbsp; &nbsp; 
          
          <input type="submit" name="submit" id="submit" value="SUBMIT">
           &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
          <input type="reset" name="reset" id="reset" value="RESET"> 

        </div></td>
        </tr> 
    </table>
    </form>
    </div>
</center>

</div></td></tr>

      <tr>
        <td height="23" colspan="2"><div align="center"><br>
        &nbsp; &nbsp; &nbsp; &nbsp;


        </div></td>
        </tr>
    </table>
    </form>
    </div>
</center>


</div>
</div>



<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top d-lg-none">
  <a class="btn btn-primary js-scroll-trigger" href="#page-top">
    <i class="fa fa-chevron-up"></i>
  </a>
</div>


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="js/freelancer.min.js"></script>

</body>

</html>
