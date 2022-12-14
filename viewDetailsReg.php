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
              <a class="nav-link js-scroll-trigger" href="logout.php" onclick="javascript:return confirm('Esta seguro de salir?');">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<br><br>

<section id="appointmentPart">
  <div class="container">
    <h3 class="text-center">Patient Information</h3>
    <hr class="star-primary">

<div align="center">
<form name="borang2" method="post" action="updateDetails.php">

<?php
include ('connect.php');
$id = $_GET['id'];
  $stmt = $mysqli->prepare("SELECT * FROM users WHERE id = ?");
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $result=$stmt->get_result();
   $row = $result->fetch_assoc();

?>
</form>

<form id="borang2" name="borang2" method="post" action="">

 <table width="380"  align="center" cellspacing="12px">

       <tr>
         <th colspan="2" scope="col"></th>
       </tr>


     <tr>

         <td width="196" height="24"><br>
           Patient Id :</td>
         <td width="229" height="24"><br><?php echo $row["id"];?></td>
        </tr>

       <tr>
         <td height="24"><br>
           Patient Name :</td>
         <td height="24"><br><?php echo $row["name"];?></td>
        </tr>

         <tr>
         <td height="24"><br>
          Matric/Staff No :</td>
        <td height="24"><br><?php echo $row["matric_staffno"];?></td>
        </tr>

         <tr>
         <td height="24"><br>
           Faculty/Department :</td>
         <td height="24"><br><?php echo $row["fac_dept"];?></td>
         </tr>

         <tr>
         <td height="24"><br>
           IC/Passport No :</td>
         <td height="24"><br><?php echo $row["ic_passno"];?></td>
         </tr>

         <tr>
         <td height="24"><br>
           Position :</td>
         <td height="24"><br><?php echo $row["position"];?></td>
         </tr>

         <tr>
         <td height="24"><br>
          Gender :</td>
         <td height="24"><br><?php echo $row["gender"];?></td>
         </tr>

         <tr>
         <td height="24"><br>
          Citizen :</td>
         <td height="24"><br><?php echo $row["citizen"];?></td>
         </tr>

         <tr>
         <td height="24"><br>
           Phone No :</td>
         <td height="24"><br><?php echo $row["phoneno"];?></td>
         </tr>

         <tr>
         <td height="24"><br>
           Address :</td>
         <td height="24"><br><?php echo $row["address"];?></td>
         </tr>


         <tr>
         <td height="24"><br>
          </td>
         <td height="24"><br></td>
         </tr>



          <div class="box">
          <table width="80%" class="table table-stripped table-hover table-bordered">
          <center>
          <thead>
          <tr class="text-center">
          <th>Allergies</th>
          <th>Asthma</th>
          <th>Diabetes</th>
          <th>Hypertension</th>
          <th>Blood Dyscrasias</th>
          <th>Heart Disease</th>
          <th>Congenital Heart</th>
          <th>Other Disease</th>
          <th>Medication Taken</th>

          </tr>
          </thead>
          <tbody>

          <?php
          include ('connect.php');
          $id = $_GET['id'];
          $result = mysqli_query ($conn,"SELECT * FROM medical_history where id = $id") or die
          ("Error running MySQL query");


          while($row = mysqli_fetch_assoc($result))
          {

          echo "<tr>";
          echo "<td>".$row['allergies']."</td>";
          echo "<td>".$row['asthma']."</td>";
          echo "<td>".$row['diabetes']."</td>";
          echo "<td>".$row['hypertension']."</td>";
          echo "<td>".$row['blooddyscrasias']."</td>";
          echo "<td>".$row['heartdisease']."</td>";
          echo "<td>".$row['congenitalheart']."</td>";
          echo "<td>".$row['otherdisease']."</td>";
          echo "<td>".$row['medictaken']."</td>";


          ?>

          <?php
          echo "</tr>";
          }
          echo "</table>";


          //Freeing all memory associated with it
          mysqli_free_result($result);
          //Closes apecified connection
          mysqli_close($conn);
          ?>
          </tbody>
          </center>
          </table>
          </div>



       <tr>
         <td height="23" colspan="2"><div align="center"><br><br>
         &nbsp; &nbsp; &nbsp; &nbsp;

           <input type="button" a href="listReg.php" onclick="history.back();" value="BACK" />
         </div></td>
         </tr>
     </table>

   </form>

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
