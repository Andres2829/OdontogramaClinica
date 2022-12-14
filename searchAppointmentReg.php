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
              <a class="nav-link js-scroll-trigger" href="appointmentListReg.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="registerPatient.php">Registrar Paciente</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="listReg.php">Lista de Pacientes</a>
            </li>
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="profile.php">Perfil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logout.php" onclick="javascript:return confirm('Esta seguro de salir?');">Salir</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<br><br>

<section id="ListRegPart">
  <div class="container">
    <h3 class="text-center">Lista de Pacinetes</h3>
    <hr class="star-primary">


<br><br>

<center>
      <form id="search4" name="search4" action="searchAppointmentReg.php" method="post">
      <input type="text" name="valueToSearch" placeholder="Paciente">&nbsp;&nbsp;
      <input type="submit" name="search" value="Buscar"><br>

</form>
</center>

<br><br>



<center>


<form id="searchAppReg" name="searchAppReg" action="searchAppointmentReg.php" method="post">




<table class="table table-stripped table-hover table-bordered">

<?php
include ('connect.php');
if (isset ($_POST["search"]))
{
$name=$_POST['valueToSearch'];
// $res=mysqli_query($conn,"select * from appointment where name='$_POST[valueToSearch]'");
$res=mysqli_query($conn,"SELECT * FROM appointment WHERE name like '%$name%' ") or die("Error running MySQL query"); 
        echo "<tr><th>Fecha de la cita</th>";
        echo "<th>Hora de la cita</th>";
        echo "<th>Paciente</th>";


 while($row = mysqli_fetch_assoc($res))
    {

      echo "<tr>";
      echo "<td>".$row['appointment_date']."</td>";
      echo "<td>".$row['appointment_time']."</td>";
      echo "<td>".$row['name']."</td>";

		echo "</tr>";
	}

echo "</table>";

}

?>


</center>


<br><br>


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
