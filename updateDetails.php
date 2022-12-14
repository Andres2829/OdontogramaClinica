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

<section id="updateDetails">
  <div class="container">
    <h3 class="text-center">Antecedentes  Patológicos Personales</h3>
    <hr class="star-primary">
    

<div align="center">
<form name="borang2" method="post" action="updateDetails.php">

<?php
include ('connect.php');
$id = $_GET['id'];
  $stmt = $mysqli->prepare("SELECT * FROM medical_history h  join users s  WHERE s.id = ? and s.id = h.medical_id");
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $result=$stmt->get_result();
   $row = $result->fetch_assoc();

?>
</form>

<form id="borang2" name="borang2" method="post" action="saveDetails.php">

 <table width="600"  align="center" cellspacing="12px">

       <tr>
         <th colspan="2" scope="col"></th>
       </tr>


     <tr>
      
         <td height="24"><br>
           Lista :</td>
         <td height="24"><br><input name="id" value="<?php echo $row["id"];?>" readonly></td>
        </tr>

      <tr>
         <td height="24"><br>
          Nombre :</td>
       <td height="24"><br><input type="text" name="name" value="<?php echo $row["name"];?>" readonly></td>
        </tr>

        <tr>
         <td height="24"><br>
         Alergias :</td>
       <td height="24"><br><input type="text" name="allergies" value="<?php echo $row['allergies'];?>"></td>
        </tr>

        <td height="24"><br>
        Asma :</td>
       <td height="24"><br><input type="text" name="asthma" value="<?php echo $row['asthma'];?>"></td>
        </tr>

        <td height="24"><br>
        Diabetes :</td>
       <td height="24"><br><input type="text" name="diabetes" value="<?php echo $row['diabetes'];?>"></td>
        </tr>

        <td height="24"><br>
        Hipertensión :</td>
       <td height="24"><br><input type="text" name="hypertension" value="<?php echo $row['hypertension'];?>"></td>
        </tr>

        <td height="24"><br>
        Discrasias sanguíneas :</td>
       <td height="24"><br><input type="text" name="blooddyscrasias" value="<?php echo $row['blooddyscrasias'];?>"></td>
        </tr>

        <td height="24"><br>
        Cardiopatía :</td>
       <td height="24"><br><input type="text" name="heartdisease" value="<?php echo $row['heartdisease'];?>"></td>
        </tr>

        <td height="24"><br>
        Corazón Congénito :</td>
       <td height="24"><br><input type="text" name="congenitalheart" value="<?php echo $row['congenitalheart'];?>"></td>
        </tr>

        <td height="24"><br>
        Otras Enfermedades :</td>
       <td height="24"><br><input type="text" name="otherdisease" value="<?php echo $row['otherdisease'];?>"></td>
        </tr>

        <td height="24"><br>
        Medicamento Tomado :</td>
       <td height="24"><br><input type="text" name="medictaken" value="<?php echo $row['medictaken'];?>"></td>
        </tr>

        <tr>
        <td height="24"><br>
        Notas :</td>
        <td height="24"><br><input type="text" style="width:300px;height:150px" name="notas" value="<?php echo $row['notas'];?>"></td>
        </tr>
      

       <tr>
         <td height="23" colspan="2"><div align="center"><br><br>
         &nbsp; &nbsp; &nbsp; &nbsp;

           <input type="submit" name="SUBMIT" id="SUBMIT" value="GUARDAR">
             &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
           <input type="reset" name="RESET" id="RESET" value="LIMPIAR">
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

