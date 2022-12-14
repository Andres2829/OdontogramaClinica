<!DOCTYPE html>
<html lang="en">
<?php

session_start();

if(!isset($_SESSION['username']))
{
    header("Location: login.php");
    exit;
}
 ?>

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
              <a class="nav-link js-scroll-trigger" href="appointmentListReg.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="registerPatient.php">Registrar Pacientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="listReg.php">Lista de Pacientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="profilereg.php">Perfil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logout.php" onclick="javascript:return confirm('Esta seguro de salir?');">Salir</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<br><br><br><br><br><br>

<h3 class="text-center">PACIENTE-EN-COLA</h3>
    <hr class="star-primary">

 <br>

 <center>
 <div class="box">
 <table width="78%" class="table table-stripped table-hover table-bordered">

   <?php
   include ('connect.php');
   date_default_timezone_set("Asia/Kuala_Lumpur");
   $date = date("Y-m-d");
   $page = $_SERVER['PHP_SELF'];
   $sec = "20";
   header("Refresh: $sec; url=$page");


  $stmt = $mysqli->prepare("SELECT * FROM queue q, users p WHERE p.id = q.id and queue_date = ? ORDER BY queue_number ASC");
  $stmt->bind_param("s", $date);
  $stmt->execute();
  $result=$stmt->get_result();
  //fetching result would go here, but will be covered later
  //$stmt->close();



     // $result = mysqli_query ($conn,"select * from queue q , users p where p.id = q.id and queue_date = '$date' ORDER BY queue_number ASC") or die
     // ("Error running MySQL query");

     echo "<tr><th>Turno</th>";
     echo "<th>Fecha</th>";
     echo "<th>Hora</th>";
     echo "<th>Paciente</th>";

     while($row = $result->fetch_assoc())
     {

       echo "<tr>";
       echo "<td>".$row['queue_number']."</td>";
       echo "<td>".$row['queue_date']."</td>";
       echo "<td>".$row['queue_time']."</td>";
       echo "<td>".$row['name']."</td>";

     ?>
   <?php
   echo "</tr>";
   }
   echo "</table>";


 //Freeing all memory associated with it
 //mysqli_free_result($stmt);
 //Closes apecified connection
 mysqli_close($conn);
 ?>
 </table>
 </div>
 </center>

 <br>

<center>
  <h3>LISTA DE PACIENTES</h3>
<br>
      <form id="search3" name="search3" action="searchAppointmentReg.php" method="post">
      <input type="text" name="valueToSearch" placeholder="Paciente">&nbsp;&nbsp;
      <input type="submit" name="search" value="Buscar"><br>

</form>
</center>

<br><br>
<center>

<div class="box">
<table width="78%" class="table table-stripped table-hover table-bordered">

  <?php
  include ('connect.php');
  $result = mysqli_query ($conn,"SELECT * FROM users join appointment on users.id = appointment.id") or die
  ("Error running MySQL query");

  echo "<tr><th>Fecha de la cita</th>";
  echo "<th>Hora de la cita</th>";
  echo "<th>Nombre del Paciente</th>";
  echo "<th>Cedula</th>";
  echo "<th>Telefono</th>";

  while($row = mysqli_fetch_assoc($result))
  {

    echo "<tr>";
    echo "<td>".$row['appointment_date']."</td>";
    echo "<td>".$row['appointment_time']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['ic_passno']."</td>";
    echo "<td>".$row['phoneno']."</td>";
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
</table>
</div>
</center>





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
