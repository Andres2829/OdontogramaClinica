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
              <a class="nav-link js-scroll-trigger" href="registerPatient.php">Lista de Pacientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="listReg.php">Reporte Estadistico</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logout.php">Salir</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<br><br>

<section id="ListRegPart">
  <div class="container">
    <h3 class="text-center">Lista de Pacientes</h3>
    <hr class="star-primary">


<br><br>

<center>
      <form id="search1" name="search1" action="searchPatient2.php" method="post">
      <input type="text" name="valueToSearch" placeholder="Patient Name">&nbsp;&nbsp;
      <input type="submit" name="search" value="Search"><br>

</form>
</center>

<br><br>



<center>
  <table width="100%" class="table table-stripped table-hover table-bordered">

  <thead>
  <tr class="text-center">
  <th>Lista</th>
  <th>Nombre del Paciente</th>
  <th>Cedula</th>
  </tr>
  </thead>
  <tbody>

  <?php
  include ('connect.php');
  $name = $_POST['valueToSearch'];
  $result = mysqli_query ($conn,"SELECT * FROM users where name like '%$name%' ") or die
  ("Error running MySQL query");


  while($row = mysqli_fetch_assoc($result))
  {

  echo "<tr>";
  echo "<td>".$row['id']."</td>";
  echo "<td>".$row['name']."</td>";
  echo "<td>".$row['ic_passno']."</td>";

  ?>


  <td>
    <center>
      <a href="viewDetailsReg.php?id=<?php echo $row['id'] ?>"><button type="button" class="btn"><span style="cursor:pointer">View Details</span></button></a>
      <a href="updateDetails.php?id=<?php echo $row['id'] ?>"><button type="button" class="btn"><span style="cursor:pointer">Update Details</span></button></a>
      <a href="appointment.php?id=<?php echo $row['id'] ?>"><button type="button" class="btn"><span style="cursor:pointer">Set Appointment</span></button></a>
      <a href="assignqno.php?id=<?php echo $row['id'] ?>"><button type="button" class="btn"><span style="cursor:pointer">Assign Queue No</span></button></a>
    </center>
  </td>

  <?php
  echo "</tr>";
  }
  echo "</table>";
  ?>
</div>
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
