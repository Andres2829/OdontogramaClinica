<!DOCTYPE html>
<html lang="en">
<?php


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
    <img src="img/logo.jpg">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Sistema Dental Patronato Tulcán</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="appointmentListDen.php">Inicio</a>
            </li>
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="listDen.php">Lista de Pacientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="report.php">Reporte Estadistico</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logout.php" onclick="javascript:return confirm('Esta seguro de salir?');">Salir</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<br><br><br><br><br><br>

<!-- <h3 class="text-center">Paciente-En-Cola</h3> -->
    <hr class="star-primary">

 <br>

 <center>
 <img src="img/tooth.png" width="200" height="200">
 <br><br>
 <div class="box">
 <table width="78%" class="table table-stripped table-hover " border="8" bgcolor="">

   <?php
   include ('connect.php');
   date_default_timezone_set("Asia/Kuala_Lumpur");
   $date = date("Y-m-d");
   $page = $_SERVER['PHP_SELF'];
   $sec = "30";
   header("Refresh: $sec; url=$page");



  $stmt = $mysqli->prepare("SELECT * FROM citas q, users p WHERE p.id = q.id and FyHinicio = ? ORDER BY FyHfinal ASC");
  $stmt->bind_param("s", $date);
  $stmt->execute();
  $result=$stmt->get_result();


   //echo "<th>Fecha</th>";
   //echo "<th>Hora</th>";
   //echo "<th>Paciente</th>";
   //echo $_SESSION['DentUser'];

   while($row = $result->fetch_assoc())
   {

     echo "<tr>";
     echo "<td>".$row['FyHinicio']."</td>";
     echo "<td>".$row['FyHfinal']."</td>";
     echo "<td>".$row['name']."</td>";
   ?>

   <td>
  <center>
    <a href="viewDetailsDen.php?id=<?php echo $row['id'] ?>"><button type="button" class="btn"><span style="cursor:pointer">View Details</span></button></a>
    <a href="dentalRecord.php?id=<?php echo $row['id'] ?>"><button type="button" class="btn"><span style="cursor:pointer">Insert Dental Record</span></button></a>
    <a href="displayRecord.php?id=<?php echo $row['id'] ?>"><button type="button" class="btn"><span style="cursor:pointer">View Treatment Record</span></button></a>
  </center>
</td>

 <?php
 echo "</tr>";
 }
 echo "</table>";


 //Freeing all memory associated with it
// mysqli_free_result($result);
 //Closes apecified connection
 mysqli_close($conn);
 ?>
 </table>
 </div>
 </center>

 <br>

<center>
  <h3>Lista de Pacientes</h3>
<br>
      <form id="search3" name="search3" action="searchAppointmentDen.php" method="post">
      <input type="text" name="valueToSearch" placeholder="Paciente">&nbsp;&nbsp;
      <input type="submit" name="search" value="Buscar"><br>

</form>
</center>




<br><br>
<center>

<div class="box">
<table width="78%" class="table table-stripped table-hover " border="8" bgcolor="">

  <?php
  include ('connect.php');
  $result = mysqli_query ($conn,"SELECT * FROM users   join citas on citas.id_paciente = users.id and citas.id_doctor = '2' ORDER BY FyHinicio ASC") or die
  ("Error running MySQL query");

  echo "<tr><th>Fecha-Hora de la cita</th>";
  echo "<th>Nombre del Paciente</th>";
  echo "<th>Cedula</th>";
  echo "<th>Telefono</th>";

  while($row = mysqli_fetch_assoc($result))
  {

    echo "<tr>";
    echo "<td>".$row['FyHinicio']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['documento']."</td>";
    echo "<td>".$row['telefono']."</td>";
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
