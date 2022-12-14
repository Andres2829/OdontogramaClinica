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
    <h3 class="text-center">Patient Record</h3>
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

<form id="borang2" name="borang2" method="post" action="updateDetails2.php">

 <table width="380"  align="center" cellspacing="12px">

       <tr>
         <th colspan="2" scope="col"></th>
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
         <td height="23" colspan="2"><div align="center"><br><br>
         &nbsp; &nbsp; &nbsp; &nbsp;


         </div></td>
         </tr>
     </table>

   </form>
   <br>

   <h3>Assign Queue Number</h3>

   <form id="searchDate" name="searchDate" action="addq.php" method="post">
     <table width="380"  align="center" cellspacing="12px">
       <tr>
            <td height="24"><br>
              Date :</td>
              <?php
              date_default_timezone_set("Asia/Kuala_Lumpur");
               ?>
            <td height="24"><br><input type="input" disabled value="<?php date_default_timezone_set("Asia/Kuala_Lumpur");echo date("Y-m-d");?>" name="dateQueue"></td>
            <input type="input" name="pid" hidden value="<?php echo $id;?>" >
            </tr>
            <tr>
                 <td height="24"><br>
                   Time:</td>
                   <?php
                    
                    ?>
                 <td height="24"><br><input type="time" readonly value="<?php date_default_timezone_set("Asia/Kuala_Lumpur");echo date('H:i', time());?>" id="atime" name="btime"></td>

                 </tr>
           <br>

            <tr>
            <td height="24"><br>
              Queue Number :</td>
            <td height="24">
              <br>
              <?php
              // $today = "'".date_default_timezone_set('Asia/Kuala_Lumpur')."'";
              $today =date("Y-m-d");
              $stmt2 = $mysqli->prepare("SELECT COUNT(*) as Total FROM queue WHERE queue_date = ?");
              $stmt2->bind_param('s', $today);
              $stmt2->execute();
              $result2=$stmt2->get_result();
              $row2 = $result2->fetch_assoc();
              $count = $row2['Total']+1;

              ?>
              <input type="input" readonly value="<?php
              echo $count;
              ?>" id="q" name="qq">
              <!-- <select name="qq" >
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>


              </select> -->
            </td>
            </tr>

            <tr>
            <td height="23" colspan="2"><div align="center"><br><br>
            &nbsp; &nbsp; &nbsp; &nbsp;


              <input type="submit" name="SUBMIT" id="SUBMIT" value="SUBMIT">
            </div></td>
        </tr>
      </table>
    </form>


    <br>
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
