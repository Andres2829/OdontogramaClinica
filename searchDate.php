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
              <a class="nav-link js-scroll-trigger" href="appointmentListDen.php">Home</a>
            </li>
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="listDen.php">Patient List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="report.php">Report Statistic</a>
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


   <h3>Treatment Record</h3>
     <br>

<center>



<?php
$link=mysqli_connect ("localhost", "root", "");
mysqli_select_db ($link, "dental");

if (isset($_POST["SUBMIT"]))
{
$d1=$_POST['datePertama'];
$d2=$_POST['dateKedua'];

$res=mysqli_query($link,"select * from treatment_record where treatment_date BETWEEN '$d1' AND '$d2'");
while($row1 = mysqli_fetch_assoc($res)){
?>
<br>
<h5>Treatment Date: <?php echo $row1["treatment_date"]; ?></h5><br>
<h5>Type of Treatment: <?php echo $row1["treatment_type"]; ?></h5><br>
<h5>Treatment Note: <?php echo $row1["treatment_note"] ?></h5>
<div>
    <img src="img/white.jpg" height="42"/>
    <img src="img/white.jpg" height="42"/>
    <img src="img/white.jpg" height="42"/>
    <img src="img/<?php echo $row1["gg_55"]; ?>.png" id="gg_55" height="42" class="btn1 btn-success" data-id="55"/>
    <img src="img/<?php echo $row1["gg_54"]; ?>.png" id="gg_54" height="42" class="btn1 btn-success" data-id="54"/>
    <img src="img/<?php echo $row1["gg_53"]; ?>.png" id="gg_53" height="42" class="btn1 btn-success" data-id="53"/>
    <img src="img/<?php echo $row1["gg_52"]; ?>.png" id="gg_52" height="42" class="btn1 btn-success" data-id="52"/>
    <img src="img/<?php echo $row1["gg_51"]; ?>.png" id="gg_51" height="42" class="btn1 btn-success" data-id="51"/>
    <img src="img/<?php echo $row1["gg_61"]; ?>.png" id="gg_61" height="42" class="btn1 btn-success" data-id="61"/>
    <img src="img/<?php echo $row1["gg_62"]; ?>.png" id="gg_62" height="42" class="btn1 btn-success" data-id="62"/>
    <img src="img/<?php echo $row1["gg_63"]; ?>.png" id="gg_63" height="42" class="btn1 btn-success" data-id="63"/>
    <img src="img/<?php echo $row1["gg_64"]; ?>.png" id="gg_64" height="42" class="btn1 btn-success" data-id="64"/>
    <img src="img/<?php echo $row1["gg_65"]; ?>.png" id="gg_65" height="42" class="btn1 btn-success" data-id="65"/>
    <img src="img/white.jpg" height="42"/>
    <img src="img/white.jpg" height="42"/>
    <img src="img/white.jpg" height="42"/>
</div>
<div>
    <img src="img/<?php echo $row1["gg_18"]; ?>.png" id="gg_18" height="42" class="btn1 btn-success"  data-id="18"/>
    <img src="img/<?php echo $row1["gg_17"]; ?>.png" id="gg_17" height="42" class="btn1 btn-success"  data-id="17"/>
    <img src="img/<?php echo $row1["gg_16"]; ?>.png" id="gg_16" height="42" class="btn1 btn-success"  data-id="16"/>
    <img src="img/<?php echo $row1["gg_15"]; ?>.png" id="gg_15" height="42" class="btn1 btn-success"  data-id="15"/>
    <img src="img/<?php echo $row1["gg_14"]; ?>.png" id="gg_14" height="42" class="btn1 btn-success"  data-id="14"/>
    <img src="img/<?php echo $row1["gg_13"]; ?>.png" id="gg_13" height="42" class="btn1 btn-success"  data-id="13"/>
    <img src="img/<?php echo $row1["gg_12"]; ?>.png" id="gg_12" height="42" class="btn1 btn-success"  data-id="12"/>
    <img src="img/<?php echo $row1["gg_11"]; ?>.png" id="gg_11" height="42" class="btn1 btn-success"  data-id="11"/>
    <img src="img/<?php echo $row1["gg_21"]; ?>.png" id="gg_21" height="42" class="btn1 btn-success"  data-id="21"/>
    <img src="img/<?php echo $row1["gg_22"]; ?>.png" id="gg_22" height="42" class="btn1 btn-success"  data-id="22"/>
    <img src="img/<?php echo $row1["gg_23"]; ?>.png" id="gg_23" height="42" class="btn1 btn-success"  data-id="23"/>
    <img src="img/<?php echo $row1["gg_24"]; ?>.png" id="gg_24" height="42" class="btn1 btn-success"  data-id="24"/>
    <img src="img/<?php echo $row1["gg_25"]; ?>.png" id="gg_25" height="42" class="btn1 btn-success"  data-id="25"/>
    <img src="img/<?php echo $row1["gg_26"]; ?>.png" id="gg_26" height="42" class="btn1 btn-success"  data-id="26"/>
    <img src="img/<?php echo $row1["gg_27"]; ?>.png" id="gg_27" height="42" class="btn1 btn-success"  data-id="27"/>
    <img src="img/<?php echo $row1["gg_28"]; ?>.png" id="gg_28" height="42" class="btn1 btn-success"  data-id="28"/>
</div>
<div class="gap"><br><br><br>
</div>
<div>
    <img src="img/<?php echo $row1["gg_48"]; ?>.png" id="gg_48" height="42" class="btn1 btn-success"  data-id="48"/>
    <img src="img/<?php echo $row1["gg_47"]; ?>.png" id="gg_47" height="42" class="btn1 btn-success"  data-id="47"/>
    <img src="img/<?php echo $row1["gg_46"]; ?>.png" id="gg_46" height="42" class="btn1 btn-success"  data-id="46"/>
    <img src="img/<?php echo $row1["gg_45"]; ?>.png" id="gg_45" height="42" class="btn1 btn-success"  data-id="45"/>
    <img src="img/<?php echo $row1["gg_44"]; ?>.png" id="gg_44" height="42" class="btn1 btn-success"  data-id="44"/>
    <img src="img/<?php echo $row1["gg_43"]; ?>.png" id="gg_43" height="42" class="btn1 btn-success"  data-id="43"/>
    <img src="img/<?php echo $row1["gg_42"]; ?>.png" id="gg_42" height="42" class="btn1 btn-success"  data-id="42"/>
    <img src="img/<?php echo $row1["gg_41"]; ?>.png" id="gg_41" height="42" class="btn1 btn-success"  data-id="41"/>
    <img src="img/<?php echo $row1["gg_31"]; ?>.png" id="gg_31" height="42" class="btn1 btn-success"  data-id="31"/>
    <img src="img/<?php echo $row1["gg_32"]; ?>.png" id="gg_32" height="42" class="btn1 btn-success"  data-id="32"/>
    <img src="img/<?php echo $row1["gg_33"]; ?>.png" id="gg_33" height="42" class="btn1 btn-success"  data-id="33"/>
    <img src="img/<?php echo $row1["gg_34"]; ?>.png" id="gg_34" height="42" class="btn1 btn-success"  data-id="34"/>
    <img src="img/<?php echo $row1["gg_35"]; ?>.png" id="gg_35" height="42" class="btn1 btn-success"  data-id="35"/>
    <img src="img/<?php echo $row1["gg_36"]; ?>.png" id="gg_36" height="42" class="btn1 btn-success"  data-id="36"/>
    <img src="img/<?php echo $row1["gg_37"]; ?>.png" id="gg_37" height="42" class="btn1 btn-success"  data-id="37"/>
    <img src="img/<?php echo $row1["gg_38"]; ?>.png" id="gg_38" height="42" class="btn1 btn-success"  data-id="38"/>
</div>
<div>
    <img src="img/white.jpg" height="42"/>
    <img src="img/white.jpg" height="42"/>
    <img src="img/white.jpg" height="42"/>
    <img src="img/<?php echo $row1["gg_85"]; ?>.png" id="gg_85" height="42" class="btn1 btn-success" data-id="85"/>
    <img src="img/<?php echo $row1["gg_84"]; ?>.png" id="gg_84" height="42" class="btn1 btn-success" data-id="84"/>
    <img src="img/<?php echo $row1["gg_83"]; ?>.png" id="gg_83" height="42" class="btn1 btn-success"  data-id="83"/>
    <img src="img/<?php echo $row1["gg_82"]; ?>.png" id="gg_82" height="42" class="btn1 btn-success"  data-id="82"/>
    <img src="img/<?php echo $row1["gg_81"]; ?>.png" id="gg_81" height="42" class="btn1 btn-success"  data-id="81"/>
    <img src="img/<?php echo $row1["gg_71"]; ?>.png" id="gg_71" height="42" class="btn1 btn-success"  data-id="71"/>
    <img src="img/<?php echo $row1["gg_72"]; ?>.png" id="gg_72" height="42" class="btn1 btn-success"  data-id="72"/>
    <img src="img/<?php echo $row1["gg_73"]; ?>.png" id="gg_73" height="42" class="btn1 btn-success"  data-id="73"/>
    <img src="img/<?php echo $row1["gg_74"]; ?>.png" id="gg_74" height="42" class="btn1 btn-success"  data-id="74"/>
    <img src="img/<?php echo $row1["gg_75"]; ?>.png" id="gg_75" height="42" class="btn1 btn-success"  data-id="75"/>
    <img src="img/white.jpg" height="42"/>
    <img src="img/white.jpg" height="42"/>
    <img src="img/white.jpg" height="42"/>
</div>

<br><br><br>
<?php
}
?>
<?php
}
?><br>
<button onclick="goBack()">Back</button>

<script>
function goBack() {
window.history.back();
}
</script>

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
