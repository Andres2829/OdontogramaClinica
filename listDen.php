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
    </nav> Esta seguro de salir

<br><br><br><br><br><br>



    <h3 class="text-center">Lista de Pacientes</h3>
    <hr class="star-primary">

 <br>

 <center>
       <form id="search2" name="search2" action="searchPatientDen.php" method="post">
       <input type="text" name="valueToSearch" placeholder="Cedula">&nbsp;&nbsp;
       <input type="submit" name="search" value="Buscar"><br>

 </form>
 </center>

<br><br>


<center>

<div class="box">
<table width="78%" class="table table-stripped table-hover "  border="8" bgcolor="">

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
$result = mysqli_query ($conn,"SELECT * FROM users WHERE rol='Paciente'") or die
("Error running MySQL query");


while($row = mysqli_fetch_assoc($result))
{

echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['documento']."</td>";

?>


<td>
  <center>
    <a href="viewDetailsDen.php?id=<?php echo $row['id'] ?>"><img src="img/detalles.png"><button type="button" class="btn" ><span style="cursor:pointer">Detalles del Paciente</span></button></a>
    <a href="dentalRecord.php?id=<?php echo $row['id'] ?>"><img src="img/insertar.png"><button type="button" class="btn"><span style="cursor:pointer">Insertar Registro Dental</span></button></a>
    <a href="displayRecord.php?id=<?php echo $row['id'] ?>"><img src="img/registros.png"><button type="button" class="btn"><span style="cursor:pointer">Ver Registro de Tratamiento</span></button></a>
  </center>
</td>

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
