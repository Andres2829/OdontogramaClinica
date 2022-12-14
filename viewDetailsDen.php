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
    </nav>

<br><br>

<section id="appointmentPart">
  <div class="">
    <h3 class="text-center">Informacion del Paciente</h3>
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

  // $result = mysqli_query ($conn,"SELECT * FROM users where id = $id") or die
  // ("Error running MySQL query");
  //    $row = mysqli_fetch_assoc($result);

?>
</form>

<form id="borang2" name="borang2" method="post" action="">

 <table width="380"  align="center" cellspacing="12px">

       <tr>
         <th colspan="2" scope="col"></th>
       </tr>


     <tr>

        </tr>

       <tr>
         <td height="24"><br>
           Nombre del Paciente :</td>
         <td height="24"><br><?php echo $row["name"];?></td>
        </tr>

         <tr>
         <td height="24"><br>
           Cedula :</td>
         <td height="24"><br><?php echo $row["documento"];?></td>
         </tr>

         <tr>
         <td height="24"><br>
          Genero :</td>
         <td height="24"><br><?php echo $row["sexo"];?></td>
         </tr>

         <tr>
         <td height="24"><br>
          Ciudadania :</td>
         <td height="24"><br><?php echo $row["provincia"];?></td>
         </tr>

         <tr>
         <td height="24"><br>
           Telefono :</td>
         <td height="24"><br><?php echo $row["telefono"];?></td>
         </tr>

         <tr>
         <td height="24"><br>
           Domicilio :</td>
         <td height="24"><br><?php echo $row["domicilio"];?></td>
         </tr>


         <tr>
         <td height="24"><br>
          </td>
         <td height="24"><br></td>
         </tr>


         



          <div class="box">
            
          <table width="1500"   border="4" bgcolor="">
          <h5 class="text-center">ANTECEDENTES PERSONALES Y FAMILIARES</h5>
          <hr class="star-primary">
          <center>
          <thead>
          <tr class="text-center">
          <th>Alergias</th>
          <th>Asma</th>
          <th>Diabetes</th>
          <th>Hipertensión</th>
          <th>Discrasias sanguíneas	</th>
          <th>Cardiopatía</th>
          <th>Corazón Congénito</th>
          <th>Otras Enfermedades	</th>
          <th>Medicamento Tomado</th>
          <th>Notas</th>

          </tr>
          </thead>
          <tbody>

          <?php
          include ('connect.php');
          $id = $_GET['id'];
          $result = mysqli_query ($conn,"SELECT * FROM medical_history where medical_id = $id ") or die
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
          echo "<td>".$row['notas']."</td>";



          ?>

          
        <td>
        <center>
          <a href="updateDetails.php?id=<?php echo $row['id'] ?>"><img src="img/insertar.png"><button type="button" class="btn"><span style="cursor:pointer">Editar</span></button></a>
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
          </center>
          </table>
          </div>


          <br><br><br><br>





          <div class="box">
            
            <table width="1500"   border="4" bgcolor=""  align="center">
            <h5 class="text-center">EXAMEN DEL SISTEMA ESTOMATOGNÁTICO</h5>
            <hr class="star-primary">
            <center>
            <thead>
            <tr class="text-center">
            <th>Labios</th>
            <th>Mejillas</th>
            <th>Maxilar Superior</th>
            <th>Maxilar Inferior	</th>
            <th>Lengua</th>
            <th>Paladar</th>
            <th>Piso</th>
            <th>Carrillos</th>
            <th>Glándulas Salibales</th>
            <th>Oro Faringe</th>
            <th>A.T.M</th>
            <th>Ganglios</th>
            <th>Notas</th>
            </tr>
            </thead>
            <tbody>
  
            <?php
            include ('connect.php');
            $id = $_GET['id'];
            $result = mysqli_query ($conn,"SELECT * FROM estomatognatico where id = $id") or die
            ("Error running MySQL query");
  
  
  
            while($row = mysqli_fetch_assoc($result))
            {
  
            echo "<tr>";
            echo "<td>".$row['labios']."</td>";
            echo "<td>".$row['mejillas']."</td>";
            echo "<td>".$row['maxilar_seperior']."</td>";
            echo "<td>".$row['maxilar_inferior']."</td>";
            echo "<td>".$row['lengua']."</td>";
            echo "<td>".$row['paladar']."</td>";
            echo "<td>".$row['piso']."</td>";
            echo "<td>".$row['carrillos']."</td>";
            echo "<td>".$row['glandulas_salivales']."</td>";
            echo "<td>".$row['oro_faringe']."</td>";
            echo "<td>".$row['atm']."</td>";
            echo "<td>".$row['ganglios']."</td>";
            echo "<td>".$row['notas']."</td>";
  
  
            ?>
  
            
          <td>
          <center>
            <a href="updateEstomatognatico.php?id=<?php echo $row['id'] ?>"><img src="img/insertar.png"><button type="button" class="btn"><span style="cursor:pointer">Editar</span></button></a>
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
            </center>
            </table>
            </div>

          




       <tr>
         <td height="23" colspan="2"><div align="center"><br><br>
         &nbsp; &nbsp; &nbsp; &nbsp;

           <input type="button" a href="listReg.php" onclick="history.back();" value="Salir" />
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
