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
    <script src="js/Chart.min.js"></script>

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

<h3 class="text-center">REPORTE ESTADÍSTICO</h3>
    <hr class="star-primary">

 <br>


<?php
include ('connect.php');
/*
$staff = array();
$result = mysqli_query ($conn,"select count(*) , gender from users where position = 'Staff' group by gender");
$i=0;
while($row = mysqli_fetch_array($result)){
  $staff[$i] = $row[0];
  $i++;
}

$student = array();
$result2 = mysqli_query ($conn,"select count(*) , gender from users where position = 'Student' group by gender");
$i=0;
while($row2 = mysqli_fetch_array($result2)){
  $student[$i] = $row2[0];
  $i++;
}

$totals = $staff[0] + $staff[1];
$totalp = $student[0] + $student[1];*/




$a = 'Femenino';
$sql2 = "SELECT * FROM `users` WHERE rol='Paciente' and users.sexo = 'Femenino'";
$query2 = mysqli_query($conn, $sql2);
$stud_fmale = mysqli_num_rows($query2);

$b = 'Masculino';
$sql3 = "SELECT * FROM `users` WHERE rol='Paciente' and users.sexo = 'Masculino' ";
$query3 = mysqli_query($conn, $sql3);
$stud_male = mysqli_num_rows($query3);

 ?>


<center>
<div style="text-align:center" class="col-lg-6">

 <canvas id="bar-chart-grouped" width="200"  ></canvas>

  <script>
  new Chart(document.getElementById("bar-chart-grouped"), {
    type: 'bar',
    data: {
      labels: ["MUJERES", "HOMBRES" ],
      datasets: [
        {
          label: "MUJERES",
          backgroundColor: "#3e95cd",
          data: [<?php echo $stud_fmale; ?>]
        }, {
          label: "HOMBRES",
          backgroundColor: "#8e5ea2",
          data: [<?php echo $stud_male; ?>]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Pacientes segun genero'
      }
    }
});

  </script>

</div>



<br><br><br>

<div style="text-align:center" class="col-lg-10">
<canvas id="bar-chart-grouped2" width="800" height="450"></canvas>
</div>

<?php

//pemeriksaan
$pemeriksaan = "SELECT * FROM `treatment_record` WHERE treatment_type='Diagnóstico_Odontológico' and treatment_date LIKE '%-12-%'";
$pemeriksaan1 = mysqli_query($conn, $pemeriksaan);
$p_dec= mysqli_num_rows($pemeriksaan1);

$pemeriksaan1 = "SELECT * FROM `treatment_record` WHERE treatment_type='Diagnóstico_Odontológico' and treatment_date LIKE '%-11-%'";
$pemeriksaan2 = mysqli_query($conn, $pemeriksaan1);
$p_nov= mysqli_num_rows($pemeriksaan2);

$pemeriksaan2 = "SELECT * FROM `treatment_record` WHERE treatment_type='Diagnóstico_Odontológico' and treatment_date LIKE '%-10-%'";
$pemeriksaan3 = mysqli_query($conn, $pemeriksaan2);
$p_oct= mysqli_num_rows($pemeriksaan3);

$pemeriksaan3 = "SELECT * FROM `treatment_record` WHERE treatment_type='Diagnóstico_Odontológico' and treatment_date LIKE '%-09-%'";
$pemeriksaan4 = mysqli_query($conn, $pemeriksaan3);
$p_sept= mysqli_num_rows($pemeriksaan4);

$pemeriksaan4 = "SELECT * FROM `treatment_record` WHERE treatment_type='Diagnóstico_Odontológico' and treatment_date LIKE '%-08-%'";
$pemeriksaan5 = mysqli_query($conn, $pemeriksaan4);
$p_aug= mysqli_num_rows($pemeriksaan5);

$pemeriksaan5 = "SELECT * FROM `treatment_record` WHERE treatment_type='Diagnóstico_Odontológico' and treatment_date LIKE '%-07-%'";
$pemeriksaan6 = mysqli_query($conn, $pemeriksaan5);
$p_july= mysqli_num_rows($pemeriksaan6);

$pemeriksaan6 = "SELECT * FROM `treatment_record` WHERE treatment_type='Diagnóstico_Odontológico' and treatment_date LIKE '%-06-%'";
$pemeriksaan7 = mysqli_query($conn, $pemeriksaan6);
$p_june= mysqli_num_rows($pemeriksaan7);

$pemeriksaan7 = "SELECT * FROM `treatment_record` WHERE treatment_type='Diagnóstico_Odontológico' and treatment_date LIKE '%-05-%'";
$pemeriksaan8 = mysqli_query($conn, $pemeriksaan7);
$p_may= mysqli_num_rows($pemeriksaan8);

$pemeriksaan8 = "SELECT * FROM `treatment_record` WHERE treatment_type='Diagnóstico_Odontológico' and treatment_date LIKE '%-04-%'";
$pemeriksaan9 = mysqli_query($conn, $pemeriksaan8);
$p_apr= mysqli_num_rows($pemeriksaan9);

$pemeriksaan9 = "SELECT * FROM `treatment_record` WHERE treatment_type='Diagnóstico_Odontológico' and treatment_date LIKE '%-03-%'";
$pemeriksaan10 = mysqli_query($conn, $pemeriksaan9);
$p_mar= mysqli_num_rows($pemeriksaan10);

$pemeriksaan10 = "SELECT * FROM `treatment_record` WHERE treatment_type='Diagnóstico_Odontológico' and treatment_date LIKE '%-02-%'";
$pemeriksaan11 = mysqli_query($conn, $pemeriksaan10);
$p_feb= mysqli_num_rows($pemeriksaan11);

$pemeriksaan11 = "SELECT * FROM `treatment_record` WHERE treatment_type='Diagnóstico_Odontológico' and treatment_date LIKE '%-01-%'";
$pemeriksaan12 = mysqli_query($conn, $pemeriksaan11);
$p_jan= mysqli_num_rows($pemeriksaan12);

//cabutan
$cabutan = "SELECT * FROM `treatment_record` WHERE treatment_type='Limpieza_de_niños' and treatment_date LIKE '%-12-%'";
$cabutan1 = mysqli_query($conn, $cabutan);
$c_dec= mysqli_num_rows($cabutan1);

$cabutan1 = "SELECT * FROM `treatment_record` WHERE treatment_type='Limpieza_de_niños' and treatment_date LIKE '%-11-%'";
$cabutan2 = mysqli_query($conn, $cabutan1);
$c_nov= mysqli_num_rows($cabutan2);

$cabutan2 = "SELECT * FROM `treatment_record` WHERE treatment_type='Limpieza_de_niños' and treatment_date LIKE '%-10-%'";
$cabutan3 = mysqli_query($conn, $cabutan2);
$c_oct= mysqli_num_rows($cabutan3);

$cabutan3 = "SELECT * FROM `treatment_record` WHERE treatment_type='Limpieza_de_niños' and treatment_date LIKE '%-09-%'";
$cabutan4 = mysqli_query($conn, $cabutan3);
$c_sept= mysqli_num_rows($cabutan4);

$cabutan4 = "SELECT * FROM `treatment_record` WHERE treatment_type='Limpieza_de_niños' and treatment_date LIKE '%-08-%'";
$cabutan5 = mysqli_query($conn, $cabutan4);
$c_aug= mysqli_num_rows($cabutan5);

$cabutan5 = "SELECT * FROM `treatment_record` WHERE treatment_type='Limpieza_de_niños' and treatment_date LIKE '%-07-%'";
$cabutan6 = mysqli_query($conn, $cabutan5);
$c_july= mysqli_num_rows($cabutan6);

$cabutan6 = "SELECT * FROM `treatment_record` WHERE treatment_type='Limpieza_de_niños' and treatment_date LIKE '%-06-%'";
$cabutan7 = mysqli_query($conn, $cabutan6);
$c_june= mysqli_num_rows($cabutan7);

$cabutan7 = "SELECT * FROM `treatment_record` WHERE treatment_type='Limpieza_de_niños' and treatment_date LIKE '%-05-%'";
$cabutan8 = mysqli_query($conn, $cabutan7);
$c_may= mysqli_num_rows($cabutan8);

$cabutan8 = "SELECT * FROM `treatment_record` WHERE treatment_type='Limpieza_de_niños' and treatment_date LIKE '%-04-%'";
$cabutan9 = mysqli_query($conn, $cabutan8);
$c_apr= mysqli_num_rows($cabutan9);

$cabutan9 = "SELECT * FROM `treatment_record` WHERE treatment_type='Limpieza_de_niños' and treatment_date LIKE '%-03-%'";
$cabutan10 = mysqli_query($conn, $cabutan9);
$c_mar= mysqli_num_rows($cabutan10);

$cabutan10 = "SELECT * FROM `treatment_record` WHERE treatment_type='Limpieza_de_niños' and treatment_date LIKE '%-02-%'";
$cabutan11 = mysqli_query($conn, $cabutan10);
$c_feb= mysqli_num_rows($cabutan11);

$cabutan11 = "SELECT * FROM `treatment_record` WHERE treatment_type='Limpieza_de_niños' and treatment_date LIKE '%-01-%'";
$cabutan12 = mysqli_query($conn, $cabutan11);
$c_jan= mysqli_num_rows($cabutan12);


//tampalan
$tampalan = "SELECT * FROM `treatment_record` WHERE treatment_type='Limpieza_de_adultos' and treatment_date LIKE '%-12-%'";
$tampalan1 = mysqli_query($conn, $tampalan);
$t_dec= mysqli_num_rows($tampalan1);

$tampalan1 = "SELECT * FROM `treatment_record` WHERE treatment_type='Limpieza_de_adultos' and treatment_date LIKE '%-11-%'";
$tampalan2 = mysqli_query($conn, $tampalan1);
$t_nov= mysqli_num_rows($tampalan2);

$tampalan2 = "SELECT * FROM `treatment_record` WHERE treatment_type='Limpieza_de_adultos' and treatment_date LIKE '%-10-%'";
$tampalan3 = mysqli_query($conn, $tampalan2);
$t_oct= mysqli_num_rows($tampalan3);

$tampalan3 = "SELECT * FROM `treatment_record` WHERE treatment_type='Limpieza_de_adultos' and treatment_date LIKE '%-09-%'";
$tampalan4 = mysqli_query($conn, $tampalan3);
$t_sept= mysqli_num_rows($tampalan4);

$tampalan4 = "SELECT * FROM `treatment_record` WHERE treatment_type='Limpieza_de_adultos' and treatment_date LIKE '%-08-%'";
$tampalan5 = mysqli_query($conn, $tampalan4);
$t_aug= mysqli_num_rows($tampalan5);

$tampalan5 = "SELECT * FROM `treatment_record` WHERE treatment_type='Limpieza_de_adultos' and treatment_date LIKE '%-07-%'";
$tampalan6 = mysqli_query($conn, $tampalan5);
$t_july= mysqli_num_rows($tampalan6);

$tampalan6 = "SELECT * FROM `treatment_record` WHERE treatment_type='Limpieza_de_adultos' and treatment_date LIKE '%-06-%'";
$tampalan7 = mysqli_query($conn, $tampalan6);
$t_june= mysqli_num_rows($tampalan7);

$tampalan7 = "SELECT * FROM `treatment_record` WHERE treatment_type='Limpieza_de_adultos' and treatment_date LIKE '%-05-%'";
$tampalan8 = mysqli_query($conn, $tampalan7);
$t_may= mysqli_num_rows($tampalan8);

$tampalan8 = "SELECT * FROM `treatment_record` WHERE treatment_type='Limpieza_de_adultos' and treatment_date LIKE '%-04-%'";
$tampalan9 = mysqli_query($conn, $tampalan8);
$t_apr= mysqli_num_rows($tampalan9);

$tampalan9 = "SELECT * FROM `treatment_record` WHERE treatment_type='Limpieza_de_adultos' and treatment_date LIKE '%-03-%'";
$tampalan10 = mysqli_query($conn, $tampalan9);
$t_mar= mysqli_num_rows($tampalan10);

$tampalan10 = "SELECT * FROM `treatment_record` WHERE treatment_type='Limpieza_de_adultos' and treatment_date LIKE '%-02-%'";
$tampalan11 = mysqli_query($conn, $tampalan10);
$t_feb= mysqli_num_rows($tampalan11);

$tampalan11 = "SELECT * FROM `treatment_record` WHERE treatment_type='Limpieza_de_adultos' and treatment_date LIKE '%-01-%'";
$tampalan12 = mysqli_query($conn, $tampalan11);
$t_jan= mysqli_num_rows($tampalan12);

//penskaleran
$penskaleran = "SELECT * FROM `treatment_record` WHERE treatment_type='Flúor' and treatment_date LIKE '%-12-%'";
$penskaleran1 = mysqli_query($conn, $penskaleran);
$ps_dec= mysqli_num_rows($penskaleran1);

$penskaleran1 = "SELECT * FROM `treatment_record` WHERE treatment_type='Flúor' and treatment_date LIKE '%-11-%'";
$penskaleran2 = mysqli_query($conn, $penskaleran1);
$ps_nov= mysqli_num_rows($penskaleran2);

$penskaleran2 = "SELECT * FROM `treatment_record` WHERE treatment_type='Flúor' and treatment_date LIKE '%-10-%'";
$penskaleran3 = mysqli_query($conn, $penskaleran2);
$ps_oct= mysqli_num_rows($penskaleran3);

$penskaleran3 = "SELECT * FROM `treatment_record` WHERE treatment_type='Flúor' and treatment_date LIKE '%-09-%'";
$penskaleran4 = mysqli_query($conn, $penskaleran3);
$ps_sept= mysqli_num_rows($penskaleran4);

$penskaleran4 = "SELECT * FROM `treatment_record` WHERE treatment_type='Flúor' and treatment_date LIKE '%-08-%'";
$penskaleran5 = mysqli_query($conn, $penskaleran4);
$ps_aug= mysqli_num_rows($penskaleran5);

$penskaleran5 = "SELECT * FROM `treatment_record` WHERE treatment_type='Flúor' and treatment_date LIKE '%-07-%'";
$penskaleran6 = mysqli_query($conn, $penskaleran5);
$ps_july= mysqli_num_rows($penskaleran6);

$penskaleran6 = "SELECT * FROM `treatment_record` WHERE treatment_type='Flúor' and treatment_date LIKE '%-06-%'";
$penskaleran7 = mysqli_query($conn, $penskaleran6);
$ps_june= mysqli_num_rows($penskaleran7);

$penskaleran7 = "SELECT * FROM `treatment_record` WHERE treatment_type='Flúor' and treatment_date LIKE '%-05-%'";
$penskaleran8 = mysqli_query($conn, $penskaleran7);
$ps_may= mysqli_num_rows($penskaleran8);

$penskaleran8 = "SELECT * FROM `treatment_record` WHERE treatment_type='Flúor' and treatment_date LIKE '%-04-%'";
$penskaleran9 = mysqli_query($conn, $penskaleran8);
$ps_apr= mysqli_num_rows($penskaleran9);

$penskaleran9 = "SELECT * FROM `treatment_record` WHERE treatment_type='Flúor' and treatment_date LIKE '%-03-%'";
$penskaleran10 = mysqli_query($conn, $penskaleran9);
$ps_mar= mysqli_num_rows($penskaleran10);

$penskaleran10 = "SELECT * FROM `treatment_record` WHERE treatment_type='Flúor' and treatment_date LIKE '%-02-%'";
$penskaleran11 = mysqli_query($conn, $penskaleran10);
$ps_feb= mysqli_num_rows($penskaleran11);

$penskaleran11 = "SELECT * FROM `treatment_record` WHERE treatment_type='Flúor' and treatment_date LIKE '%-01-%'";
$penskaleran12 = mysqli_query($conn, $penskaleran11);
$ps_jan= mysqli_num_rows($penskaleran12);

//perubatanmulut
$perubatanmulut = "SELECT * FROM `treatment_record` WHERE treatment_type='Calza_pequeña' and treatment_date LIKE '%-12-%'";
$perubatanmulut1 = mysqli_query($conn, $perubatanmulut);
$pm_dec= mysqli_num_rows($perubatanmulut1);

$perubatanmulut1 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calza_pequeña' and treatment_date LIKE '%-11-%'";
$perubatanmulut2 = mysqli_query($conn, $perubatanmulut1);
$pm_nov= mysqli_num_rows($perubatanmulut2);

$perubatanmulut2 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calza_pequeña' and treatment_date LIKE '%-10-%'";
$perubatanmulut3 = mysqli_query($conn, $perubatanmulut2);
$pm_oct= mysqli_num_rows($perubatanmulut3);

$perubatanmulut3 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calza_pequeña' and treatment_date LIKE '%-09-%'";
$perubatanmulut4 = mysqli_query($conn, $perubatanmulut3);
$pm_sept= mysqli_num_rows($perubatanmulut4);

$perubatanmulut4 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calza_pequeña' and treatment_date LIKE '%-08-%'";
$perubatanmulut5 = mysqli_query($conn, $perubatanmulut4);
$pm_aug= mysqli_num_rows($perubatanmulut5);

$perubatanmulut5 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calza_pequeña' and treatment_date LIKE '%-07-%'";
$perubatanmulut6 = mysqli_query($conn, $perubatanmulut5);
$pm_july= mysqli_num_rows($perubatanmulut6);

$perubatanmulut6 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calza_pequeña' and treatment_date LIKE '%-06-%'";
$perubatanmulut7 = mysqli_query($conn, $perubatanmulut6);
$pm_june= mysqli_num_rows($perubatanmulut7);

$perubatanmulut7 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calza_pequeña' and treatment_date LIKE '%-05-%'";
$perubatanmulut8 = mysqli_query($conn, $perubatanmulut7);
$pm_may= mysqli_num_rows($perubatanmulut8);

$perubatanmulut8 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calza_pequeña' and treatment_date LIKE '%-04-%'";
$perubatanmulut9 = mysqli_query($conn, $perubatanmulut8);
$pm_apr= mysqli_num_rows($perubatanmulut9);

$perubatanmulut9 = "SELECT * FROM `treatment_record` WHERE treatment_type='Medicina' and treatment_date LIKE '%-03-%'";
$perubatanmulut10 = mysqli_query($conn, $perubatanmulut9);
$pm_mar= mysqli_num_rows($perubatanmulut10);

$perubatanmulut10 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calza_pequeña' and treatment_date LIKE '%-02-%'";
$perubatanmulut11 = mysqli_query($conn, $perubatanmulut10);
$pm_feb= mysqli_num_rows($perubatanmulut11);

$perubatanmulut11 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calza_pequeña' and treatment_date LIKE '%-01-%'";
$perubatanmulut12 = mysqli_query($conn, $perubatanmulut11);
$pm_jan= mysqli_num_rows($perubatanmulut12);

//ohi
$ohi = "SELECT * FROM `treatment_record` WHERE treatment_type='Calza_mediana' and treatment_date LIKE '%-12-%'";
$ohi1 = mysqli_query($conn, $ohi);
$o_dec= mysqli_num_rows($ohi1);

$ohi1 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calza_mediana' and treatment_date LIKE '%-11-%'";
$ohi2 = mysqli_query($conn, $ohi1);
$o_nov= mysqli_num_rows($ohi2);

$ohi2 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calza_mediana' and treatment_date LIKE '%-10-%'";
$ohi3 = mysqli_query($conn, $ohi2);
$o_oct= mysqli_num_rows($ohi3);

$ohi3 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calza_mediana' and treatment_date LIKE '%-0-%'";
$ohi4 = mysqli_query($conn, $ohi3);
$o_sept= mysqli_num_rows($ohi4);

$ohi4 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calza_mediana' and treatment_date LIKE '%-08-%'";
$ohi5 = mysqli_query($conn, $ohi4);
$o_aug= mysqli_num_rows($ohi5);

$ohi5 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calza_mediana' and treatment_date LIKE '%-07-%'";
$ohi6 = mysqli_query($conn, $ohi5);
$o_july= mysqli_num_rows($ohi6);

$ohi6 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calza_mediana' and treatment_date LIKE '%-06-%'";
$ohi7 = mysqli_query($conn, $ohi6);
$o_june= mysqli_num_rows($ohi7);

$ohi7 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calza_mediana' and treatment_date LIKE '%-05-%'";
$ohi8 = mysqli_query($conn, $ohi7);
$o_may= mysqli_num_rows($ohi8);

$ohi8 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calza_mediana' and treatment_date LIKE '%-04-%'";
$ohi9 = mysqli_query($conn, $ohi8);
$o_apr= mysqli_num_rows($ohi9);

$ohi9 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calza_mediana' and treatment_date LIKE '%-03-%'";
$ohi10 = mysqli_query($conn, $ohi9);
$o_mar= mysqli_num_rows($ohi10);

$ohi10 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calza_mediana' and treatment_date LIKE '%-02-%'";
$ohi11 = mysqli_query($conn, $ohi10);
$o_feb= mysqli_num_rows($ohi11);

$ohi11 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calza_mediana' and treatment_date LIKE '%-01-%'";
$ohi12 = mysqli_query($conn, $ohi11);
$o_jan= mysqli_num_rows($ohi12);


//others
$others = "SELECT * FROM `treatment_record` WHERE treatment_type='Calzas_grande' and treatment_date LIKE '%-12-%'";
$others1 = mysqli_query($conn, $others);
$l_dec= mysqli_num_rows($others1);

$others1 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calzas_grande' and treatment_date LIKE '%-11-%'";
$others2 = mysqli_query($conn, $others1);
$l_nov= mysqli_num_rows($others2);

$others2 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calzas_grande' and treatment_date LIKE '%-10-%'";
$others3 = mysqli_query($conn, $others2);
$l_oct= mysqli_num_rows($others3);

$others3 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calzas_grande' and treatment_date LIKE '%-09-%'";
$others4 = mysqli_query($conn, $others3);
$l_sept= mysqli_num_rows($others4);

$others4 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calzas_grande' and treatment_date LIKE '%-08-%'";
$others5 = mysqli_query($conn, $others4);
$l_aug= mysqli_num_rows($others5);

$others5 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calzas_grande' and treatment_date LIKE '%-07-%'";
$others6 = mysqli_query($conn, $others5);
$l_july= mysqli_num_rows($others6);

$others6 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calzas_grande' and treatment_date LIKE '%-06-%'";
$others7 = mysqli_query($conn, $others6);
$l_june= mysqli_num_rows($others7);

$others7 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calzas_grande' and treatment_date LIKE '%-05-%'";
$others8 = mysqli_query($conn, $others7);
$l_may= mysqli_num_rows($others8);

$others8 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calzas_grande' and treatment_date LIKE '%-04-%'";
$others9 = mysqli_query($conn, $others8);
$l_apr= mysqli_num_rows($others9);

$others9 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calzas_grande' and treatment_date LIKE '%-03-%'";
$others10 = mysqli_query($conn, $others9);
$l_mar= mysqli_num_rows($others10);

$others10 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calzas_grande' and treatment_date LIKE '%-02-%'";
$others11 = mysqli_query($conn, $others10);
$l_feb= mysqli_num_rows($others11);

$others11 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calzas_grande' and treatment_date LIKE '%-01-%'";
$others12 = mysqli_query($conn, $others11);
$l_jan= mysqli_num_rows($others12);

//Reconstrucción_de_dientes

$Reconstrucción_de_dientes = "SELECT * FROM `treatment_record` WHERE treatment_type='Reconstrucción_de_dientes' and treatment_date LIKE '%-12-%'";
$Reconstrucción_de_dientes1 = mysqli_query($conn, $Reconstrucción_de_dientes);
$qq_dec= mysqli_num_rows($Reconstrucción_de_dientes1);

$Reconstrucción_de_dientes1 = "SELECT * FROM `treatment_record` WHERE treatment_type='Reconstrucción_de_dientes' and treatment_date LIKE '%-11-%'";
$Reconstrucción_de_dientes2 = mysqli_query($conn, $Reconstrucción_de_dientes1);
$qq_nov= mysqli_num_rows($Reconstrucción_de_dientes2);

$Reconstrucción_de_dientes2 = "SELECT * FROM `treatment_record` WHERE treatment_type='Reconstrucción_de_dientes' and treatment_date LIKE '%-10-%'";
$Reconstrucción_de_dientes3 = mysqli_query($conn, $Reconstrucción_de_dientes2);
$qq_oct= mysqli_num_rows($Reconstrucción_de_dientes3);

$Reconstrucción_de_dientes3 = "SELECT * FROM `treatment_record` WHERE treatment_type='Reconstrucción_de_dientes' and treatment_date LIKE '%-09-%'";
$Reconstrucción_de_dientes4 = mysqli_query($conn, $Reconstrucción_de_dientes3);
$qq_sept= mysqli_num_rows($Reconstrucción_de_dientes4);

$Reconstrucción_de_dientes4 = "SELECT * FROM `treatment_record` WHERE treatment_type='Reconstrucción_de_dientes' and treatment_date LIKE '%-08-%'";
$Reconstrucción_de_dientes5 = mysqli_query($conn, $Reconstrucción_de_dientes4);
$qq_aug= mysqli_num_rows($Reconstrucción_de_dientes5);

$Reconstrucción_de_dientes5 = "SELECT * FROM `treatment_record` WHERE treatment_type='Reconstrucción_de_dientes' and treatment_date LIKE '%-07-%'";
$Reconstrucción_de_dientes6 = mysqli_query($conn, $Reconstrucción_de_dientes5);
$qq_july= mysqli_num_rows($Reconstrucción_de_dientes6);

$Reconstrucción_de_dientes6 = "SELECT * FROM `treatment_record` WHERE treatment_type='Reconstrucción_de_dientes' and treatment_date LIKE '%-06-%'";
$Reconstrucción_de_dientes7 = mysqli_query($conn, $Reconstrucción_de_dientes6);
$qq_june= mysqli_num_rows($Reconstrucción_de_dientes7);

$Reconstrucción_de_dientes7 = "SELECT * FROM `treatment_record` WHERE treatment_type='Reconstrucción_de_dientes' and treatment_date LIKE '%-05-%'";
$Reconstrucción_de_dientes8 = mysqli_query($conn, $Reconstrucción_de_dientes7);
$qq_may= mysqli_num_rows($Reconstrucción_de_dientes8);

$Reconstrucción_de_dientes8 = "SELECT * FROM `treatment_record` WHERE treatment_type='Reconstrucción_de_dientes' and treatment_date LIKE '%-04-%'";
$Reconstrucción_de_dientes9 = mysqli_query($conn, $Reconstrucción_de_dientes8);
$qq_apr= mysqli_num_rows($Reconstrucción_de_dientes9);

$Reconstrucción_de_dientes9 = "SELECT * FROM `treatment_record` WHERE treatment_type='Reconstrucción_de_dientes' and treatment_date LIKE '%-03-%'";
$Reconstrucción_de_dientes10 = mysqli_query($conn, $Reconstrucción_de_dientes9);
$qq_mar= mysqli_num_rows($Reconstrucción_de_dientes10);

$Reconstrucción_de_dientes10 = "SELECT * FROM `treatment_record` WHERE treatment_type='Reconstrucción_de_dientes' and treatment_date LIKE '%-02-%'";
$Reconstrucción_de_dientes11 = mysqli_query($conn, $Reconstrucción_de_dientes10);
$qq_feb= mysqli_num_rows($Reconstrucción_de_dientes11);

$Reconstrucción_de_dientes11 = "SELECT * FROM `treatment_record` WHERE treatment_type='Reconstrucción_de_dientes' and treatment_date LIKE '%-01-%'";
$Reconstrucción_de_dientes12 = mysqli_query($conn, $Reconstrucción_de_dientes11);
$qq_jan= mysqli_num_rows($Reconstrucción_de_dientes12);

//Calzas_de_niños

$Calzas_de_niños = "SELECT * FROM `treatment_record` WHERE treatment_type='Calzas_de_niños' and treatment_date LIKE '%-12-%'";
$Calzas_de_niños1 = mysqli_query($conn, $Calzas_de_niños);
$ww_dec= mysqli_num_rows($Calzas_de_niños1);

$Calzas_de_niños1 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calzas_de_niños' and treatment_date LIKE '%-11-%'";
$Calzas_de_niños2 = mysqli_query($conn, $Calzas_de_niños1);
$ww_nov= mysqli_num_rows($Calzas_de_niños2);

$Calzas_de_niños2 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calzas_de_niños' and treatment_date LIKE '%-10-%'";
$Calzas_de_niños3 = mysqli_query($conn, $Calzas_de_niños2);
$ww_oct= mysqli_num_rows($Calzas_de_niños3);

$Calzas_de_niños3 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calzas_de_niños' and treatment_date LIKE '%-09-%'";
$Calzas_de_niños4 = mysqli_query($conn, $Calzas_de_niños3);
$ww_sept= mysqli_num_rows($Calzas_de_niños4);

$Calzas_de_niños4 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calzas_de_niños' and treatment_date LIKE '%-08-%'";
$Calzas_de_niños5 = mysqli_query($conn, $Calzas_de_niños4);
$ww_aug= mysqli_num_rows($Calzas_de_niños5);

$Calzas_de_niños5 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calzas_de_niños' and treatment_date LIKE '%-07-%'";
$Calzas_de_niños6 = mysqli_query($conn, $Calzas_de_niños5);
$ww_july= mysqli_num_rows($Calzas_de_niños6);

$Calzas_de_niños6 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calzas_de_niños' and treatment_date LIKE '%-06-%'";
$Calzas_de_niños7 = mysqli_query($conn, $Calzas_de_niños6);
$ww_june= mysqli_num_rows($Calzas_de_niños7);

$Calzas_de_niños7 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calzas_de_niños' and treatment_date LIKE '%-05-%'";
$Calzas_de_niños8 = mysqli_query($conn, $Calzas_de_niños7);
$ww_may= mysqli_num_rows($Calzas_de_niños8);

$Calzas_de_niños8 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calzas_de_niños' and treatment_date LIKE '%-04-%'";
$Calzas_de_niños9 = mysqli_query($conn, $Calzas_de_niños8);
$ww_apr= mysqli_num_rows($Calzas_de_niños9);

$Calzas_de_niños9 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calzas_de_niños' and treatment_date LIKE '%-03-%'";
$Calzas_de_niños10 = mysqli_query($conn, $Calzas_de_niños9);
$ww_mar= mysqli_num_rows($Calzas_de_niños10);

$Calzas_de_niños10 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calzas_de_niños' and treatment_date LIKE '%-02-%'";
$Calzas_de_niños11 = mysqli_query($conn, $Calzas_de_niños10);
$ww_feb= mysqli_num_rows($Calzas_de_niños11);

$Calzas_de_niños11 = "SELECT * FROM `treatment_record` WHERE treatment_type='Calzas_de_niños' and treatment_date LIKE '%-01-%'";
$Calzas_de_niños12 = mysqli_query($conn, $Calzas_de_niños11);
$ww_jan= mysqli_num_rows($Calzas_de_niños12);

//Tratamiento_de_emergencia

$Tratamiento_de_emergencia = "SELECT * FROM `treatment_record` WHERE treatment_type='Tratamiento_de_emergencia' and treatment_date LIKE '%-12-%'";
$Tratamiento_de_emergencia1 = mysqli_query($conn, $Tratamiento_de_emergencia);
$ee_dec= mysqli_num_rows($Tratamiento_de_emergencia1);

$Tratamiento_de_emergencia1 = "SELECT * FROM `treatment_record` WHERE treatment_type='Tratamiento_de_emergencia' and treatment_date LIKE '%-11-%'";
$Tratamiento_de_emergencia2 = mysqli_query($conn, $Tratamiento_de_emergencia1);
$ee_nov= mysqli_num_rows($Tratamiento_de_emergencia2);

$Tratamiento_de_emergencia2 = "SELECT * FROM `treatment_record` WHERE treatment_type='Tratamiento_de_emergencia' and treatment_date LIKE '%-10-%'";
$Tratamiento_de_emergencia3 = mysqli_query($conn, $Tratamiento_de_emergencia2);
$ee_oct= mysqli_num_rows($Tratamiento_de_emergencia3);

$Tratamiento_de_emergencia3 = "SELECT * FROM `treatment_record` WHERE treatment_type='Tratamiento_de_emergencia' and treatment_date LIKE '%-09-%'";
$Tratamiento_de_emergencia4 = mysqli_query($conn, $Tratamiento_de_emergencia3);
$ee_sept= mysqli_num_rows($Tratamiento_de_emergencia4);

$Tratamiento_de_emergencia4 = "SELECT * FROM `treatment_record` WHERE treatment_type='Tratamiento_de_emergencia' and treatment_date LIKE '%-08-%'";
$Tratamiento_de_emergencia5 = mysqli_query($conn, $Tratamiento_de_emergencia4);
$ee_aug= mysqli_num_rows($Tratamiento_de_emergencia5);

$Tratamiento_de_emergencia5 = "SELECT * FROM `treatment_record` WHERE treatment_type='Tratamiento_de_emergencia' and treatment_date LIKE '%-07-%'";
$Tratamiento_de_emergencia6 = mysqli_query($conn, $Tratamiento_de_emergencia5);
$ee_july= mysqli_num_rows($Tratamiento_de_emergencia6);

$Tratamiento_de_emergencia6 = "SELECT * FROM `treatment_record` WHERE treatment_type='Tratamiento_de_emergencia' and treatment_date LIKE '%-06-%'";
$Tratamiento_de_emergencia7 = mysqli_query($conn, $Tratamiento_de_emergencia6);
$ee_june= mysqli_num_rows($Tratamiento_de_emergencia7);

$Tratamiento_de_emergencia7 = "SELECT * FROM `treatment_record` WHERE treatment_type='Tratamiento_de_emergencia' and treatment_date LIKE '%-05-%'";
$Tratamiento_de_emergencia8 = mysqli_query($conn, $Tratamiento_de_emergencia7);
$ee_may= mysqli_num_rows($Tratamiento_de_emergencia8);

$Tratamiento_de_emergencia8 = "SELECT * FROM `treatment_record` WHERE treatment_type='Tratamiento_de_emergencia' and treatment_date LIKE '%-04-%'";
$Tratamiento_de_emergencia9 = mysqli_query($conn, $Tratamiento_de_emergencia8);
$ee_apr= mysqli_num_rows($Tratamiento_de_emergencia9);

$Tratamiento_de_emergencia9 = "SELECT * FROM `treatment_record` WHERE treatment_type='Tratamiento_de_emergencia' and treatment_date LIKE '%-03-%'";
$Tratamiento_de_emergencia10 = mysqli_query($conn, $Tratamiento_de_emergencia9);
$ee_mar= mysqli_num_rows($Tratamiento_de_emergencia10);

$Tratamiento_de_emergencia10 = "SELECT * FROM `treatment_record` WHERE treatment_type='Tratamiento_de_emergencia' and treatment_date LIKE '%-02-%'";
$Tratamiento_de_emergencia11 = mysqli_query($conn, $Tratamiento_de_emergencia10);
$ee_feb= mysqli_num_rows($Tratamiento_de_emergencia11);

$Tratamiento_de_emergencia11 = "SELECT * FROM `treatment_record` WHERE treatment_type='Tratamiento_de_emergencia' and treatment_date LIKE '%-01-%'";
$Tratamiento_de_emergencia12 = mysqli_query($conn, $Tratamiento_de_emergencia11);
$ee_jan= mysqli_num_rows($Tratamiento_de_emergencia12);

//Sellantes

$Sellantes = "SELECT * FROM `treatment_record` WHERE treatment_type='Sellantes' and treatment_date LIKE '%-12-%'";
$Sellante1 = mysqli_query($conn, $Sellantes);
$rr_dec= mysqli_num_rows($Sellante1);

$Sellante1 = "SELECT * FROM `treatment_record` WHERE treatment_type='Sellantes' and treatment_date LIKE '%-11-%'";
$Sellante2 = mysqli_query($conn, $Sellante1);
$rr_nov= mysqli_num_rows($Sellante2);

$Sellante2 = "SELECT * FROM `treatment_record` WHERE treatment_type='Sellantes' and treatment_date LIKE '%-10-%'";
$Sellante3 = mysqli_query($conn, $Sellante2);
$rr_oct= mysqli_num_rows($Sellante3);

$Sellante3 = "SELECT * FROM `treatment_record` WHERE treatment_type='Sellantes' and treatment_date LIKE '%-09-%'";
$Sellante4 = mysqli_query($conn, $Sellante3);
$rr_sept= mysqli_num_rows($Sellante4);

$Sellante4 = "SELECT * FROM `treatment_record` WHERE treatment_type='Sellantes' and treatment_date LIKE '%-08-%'";
$Sellante5 = mysqli_query($conn, $Sellante4);
$rr_aug= mysqli_num_rows($Sellante5);

$Sellante5 = "SELECT * FROM `treatment_record` WHERE treatment_type='Sellantes' and treatment_date LIKE '%-07-%'";
$Sellante6 = mysqli_query($conn, $Sellante5);
$rr_july= mysqli_num_rows($Sellante6);

$Sellante6 = "SELECT * FROM `treatment_record` WHERE treatment_type='Sellantes' and treatment_date LIKE '%-06-%'";
$Sellante7 = mysqli_query($conn, $Sellante6);
$rr_june= mysqli_num_rows($Sellante7);

$Sellante7 = "SELECT * FROM `treatment_record` WHERE treatment_type='Sellantes' and treatment_date LIKE '%-05-%'";
$Sellante8 = mysqli_query($conn, $Sellante7);
$rr_may= mysqli_num_rows($Sellante8);

$Sellante8 = "SELECT * FROM `treatment_record` WHERE treatment_type='Sellantes' and treatment_date LIKE '%-04-%'";
$Sellante9 = mysqli_query($conn, $Sellante8);
$rr_apr= mysqli_num_rows($Sellante9);

$Sellante9 = "SELECT * FROM `treatment_record` WHERE treatment_type='Sellantes' and treatment_date LIKE '%-03-%'";
$Sellante10 = mysqli_query($conn, $Sellante9);
$rr_mar= mysqli_num_rows($Sellante10);

$Sellante10 = "SELECT * FROM `treatment_record` WHERE treatment_type='Sellantes' and treatment_date LIKE '%-02-%'";
$Sellante11 = mysqli_query($conn, $Sellante10);
$rr_feb= mysqli_num_rows($Sellante11);

$Sellante11 = "SELECT * FROM `treatment_record` WHERE treatment_type='Sellantes' and treatment_date LIKE '%-01-%'";
$Sellante12 = mysqli_query($conn, $Sellante11);
$rr_jan= mysqli_num_rows($Sellante12);

//Promoción_de_sellantes

$Promoción_de_sellantes = "SELECT * FROM `treatment_record` WHERE treatment_type='Promoción_de_sellantes' and treatment_date LIKE '%-12-%'";
$Promoción_de_sellantes1 = mysqli_query($conn, $Promoción_de_sellantes);
$tt_dec= mysqli_num_rows($Promoción_de_sellantes1);

$Promoción_de_sellantes1 = "SELECT * FROM `treatment_record` WHERE treatment_type='Promoción_de_sellantes' and treatment_date LIKE '%-11-%'";
$Promoción_de_sellantes2 = mysqli_query($conn, $Promoción_de_sellantes1);
$tt_nov= mysqli_num_rows($Promoción_de_sellantes2);

$Promoción_de_sellantes2 = "SELECT * FROM `treatment_record` WHERE treatment_type='Promoción_de_sellantes' and treatment_date LIKE '%-10-%'";
$Promoción_de_sellantes3 = mysqli_query($conn, $Promoción_de_sellantes2);
$tt_oct= mysqli_num_rows($Promoción_de_sellantes3);

$Promoción_de_sellantes3 = "SELECT * FROM `treatment_record` WHERE treatment_type='Promoción_de_sellantes' and treatment_date LIKE '%-09-%'";
$Promoción_de_sellantes4 = mysqli_query($conn, $Promoción_de_sellantes3);
$tt_sept= mysqli_num_rows($Promoción_de_sellantes4);

$Promoción_de_sellantes4 = "SELECT * FROM `treatment_record` WHERE treatment_type='Promoción_de_sellantes' and treatment_date LIKE '%-08-%'";
$Promoción_de_sellantes5 = mysqli_query($conn, $Promoción_de_sellantes4);
$tt_aug= mysqli_num_rows($Promoción_de_sellantes5);

$Promoción_de_sellantes5 = "SELECT * FROM `treatment_record` WHERE treatment_type='Promoción_de_sellantes' and treatment_date LIKE '%-07-%'";
$Promoción_de_sellantes6 = mysqli_query($conn, $Promoción_de_sellantes5);
$tt_july= mysqli_num_rows($Promoción_de_sellantes6);

$Promoción_de_sellantes6 = "SELECT * FROM `treatment_record` WHERE treatment_type='Promoción_de_sellantes' and treatment_date LIKE '%-06-%'";
$Promoción_de_sellantes7 = mysqli_query($conn, $Promoción_de_sellantes6);
$tt_june= mysqli_num_rows($Promoción_de_sellantes7);

$Promoción_de_sellantes7 = "SELECT * FROM `treatment_record` WHERE treatment_type='Promoción_de_sellantes' and treatment_date LIKE '%-05-%'";
$Promoción_de_sellantes8 = mysqli_query($conn, $Promoción_de_sellantes7);
$tt_may= mysqli_num_rows($Promoción_de_sellantes8);

$Promoción_de_sellantes8 = "SELECT * FROM `treatment_record` WHERE treatment_type='Promoción_de_sellantes' and treatment_date LIKE '%-04-%'";
$Promoción_de_sellantes9 = mysqli_query($conn, $Promoción_de_sellantes8);
$tt_apr= mysqli_num_rows($Promoción_de_sellantes9);

$Promoción_de_sellantes9 = "SELECT * FROM `treatment_record` WHERE treatment_type='Promoción_de_sellantes' and treatment_date LIKE '%-03-%'";
$Promoción_de_sellantes10 = mysqli_query($conn, $Promoción_de_sellantes9);
$tt_mar= mysqli_num_rows($Promoción_de_sellantes10);

$Promoción_de_sellantes10 = "SELECT * FROM `treatment_record` WHERE treatment_type='Promoción_de_sellantes' and treatment_date LIKE '%-02-%'";
$Promoción_de_sellantes11 = mysqli_query($conn, $Promoción_de_sellantes10);
$tt_feb= mysqli_num_rows($Promoción_de_sellantes11);

$Promoción_de_sellantes11 = "SELECT * FROM `treatment_record` WHERE treatment_type='Promoción_de_sellantes' and treatment_date LIKE '%-01-%'";
$Promoción_de_sellantes12 = mysqli_query($conn, $Promoción_de_sellantes11);
$tt_jan= mysqli_num_rows($Promoción_de_sellantes12);


//Extracción_de_dientes_en_niños

$Extracción_de_dientes_en_niños = "SELECT * FROM `treatment_record` WHERE treatment_type='Extracción_de_dientes_en_niños' and treatment_date LIKE '%-12-%'";
$Extracción_de_dientes_en_niños1 = mysqli_query($conn, $Extracción_de_dientes_en_niños);
$yy_dec= mysqli_num_rows($Extracción_de_dientes_en_niños1);

$Extracción_de_dientes_en_niños1 = "SELECT * FROM `treatment_record` WHERE treatment_type='Extracción_de_dientes_en_niños' and treatment_date LIKE '%-11-%'";
$Extracción_de_dientes_en_niños2 = mysqli_query($conn, $Extracción_de_dientes_en_niños1);
$yy_nov= mysqli_num_rows($Extracción_de_dientes_en_niños2);

$Extracción_de_dientes_en_niños2 = "SELECT * FROM `treatment_record` WHERE treatment_type='Extracción_de_dientes_en_niños' and treatment_date LIKE '%-10-%'";
$Extracción_de_dientes_en_niños3 = mysqli_query($conn, $Extracción_de_dientes_en_niños2);
$yy_oct= mysqli_num_rows($Extracción_de_dientes_en_niños3);

$Extracción_de_dientes_en_niños3 = "SELECT * FROM `treatment_record` WHERE treatment_type='Extracción_de_dientes_en_niños' and treatment_date LIKE '%-09-%'";
$Extracción_de_dientes_en_niños4 = mysqli_query($conn, $Extracción_de_dientes_en_niños3);
$yy_sept= mysqli_num_rows($Extracción_de_dientes_en_niños4);

$Extracción_de_dientes_en_niños4 = "SELECT * FROM `treatment_record` WHERE treatment_type='Extracción_de_dientes_en_niños' and treatment_date LIKE '%-08-%'";
$Extracción_de_dientes_en_niños5 = mysqli_query($conn, $Extracción_de_dientes_en_niños4);
$yy_aug= mysqli_num_rows($Extracción_de_dientes_en_niños5);

$Extracción_de_dientes_en_niños5 = "SELECT * FROM `treatment_record` WHERE treatment_type='Extracción_de_dientes_en_niños' and treatment_date LIKE '%-07-%'";
$Extracción_de_dientes_en_niños6 = mysqli_query($conn, $Extracción_de_dientes_en_niños5);
$yy_july= mysqli_num_rows($Extracción_de_dientes_en_niños6);

$Extracción_de_dientes_en_niños6 = "SELECT * FROM `treatment_record` WHERE treatment_type='Extracción_de_dientes_en_niños' and treatment_date LIKE '%-06-%'";
$Extracción_de_dientes_en_niños7 = mysqli_query($conn, $Extracción_de_dientes_en_niños6);
$yy_june= mysqli_num_rows($Extracción_de_dientes_en_niños7);

$Extracción_de_dientes_en_niños7 = "SELECT * FROM `treatment_record` WHERE treatment_type='Extracción_de_dientes_en_niños' and treatment_date LIKE '%-05-%'";
$Extracción_de_dientes_en_niños8 = mysqli_query($conn, $Extracción_de_dientes_en_niños7);
$yy_may= mysqli_num_rows($Extracción_de_dientes_en_niños8);

$Extracción_de_dientes_en_niños8 = "SELECT * FROM `treatment_record` WHERE treatment_type='Extracción_de_dientes_en_niños' and treatment_date LIKE '%-04-%'";
$Extracción_de_dientes_en_niños9 = mysqli_query($conn, $Extracción_de_dientes_en_niños8);
$yy_apr= mysqli_num_rows($Extracción_de_dientes_en_niños9);

$Extracción_de_dientes_en_niños9 = "SELECT * FROM `treatment_record` WHERE treatment_type='Extracción_de_dientes_en_niños' and treatment_date LIKE '%-03-%'";
$Extracción_de_dientes_en_niños10 = mysqli_query($conn, $Extracción_de_dientes_en_niños9);
$yy_mar= mysqli_num_rows($Extracción_de_dientes_en_niños10);

$Extracción_de_dientes_en_niños10 = "SELECT * FROM `treatment_record` WHERE treatment_type='Extracción_de_dientes_en_niños' and treatment_date LIKE '%-02-%'";
$Extracción_de_dientes_en_niños11 = mysqli_query($conn, $Extracción_de_dientes_en_niños10);
$yy_feb= mysqli_num_rows($Extracción_de_dientes_en_niños11);

$Extracción_de_dientes_en_niños11 = "SELECT * FROM `treatment_record` WHERE treatment_type='Extracción_de_dientes_en_niños' and treatment_date LIKE '%-01-%'";
$Extracción_de_dientes_en_niños12 = mysqli_query($conn, $Extracción_de_dientes_en_niños11);
$yy_jan= mysqli_num_rows($Extracción_de_dientes_en_niños12);

//Extracción_de_dientes_en_adultos

$Extracción_de_dientes_en_adultos = "SELECT * FROM `treatment_record` WHERE treatment_type='Extracción_de_dientes_en_adultos' and treatment_date LIKE '%-12-%'";
$Extracción_de_dientes_en_adultos1 = mysqli_query($conn, $Extracción_de_dientes_en_adultos);
$uu_dec= mysqli_num_rows($Extracción_de_dientes_en_adultos1);

$Extracción_de_dientes_en_adultos1 = "SELECT * FROM `treatment_record` WHERE treatment_type='Extracción_de_dientes_en_adultos' and treatment_date LIKE '%-11-%'";
$Extracción_de_dientes_en_adultos2 = mysqli_query($conn, $Extracción_de_dientes_en_adultos1);
$uu_nov= mysqli_num_rows($Extracción_de_dientes_en_adultos2);

$Extracción_de_dientes_en_adultos2 = "SELECT * FROM `treatment_record` WHERE treatment_type='Extracción_de_dientes_en_adultos' and treatment_date LIKE '%-10-%'";
$Extracción_de_dientes_en_adultos3 = mysqli_query($conn, $Extracción_de_dientes_en_adultos2);
$uu_oct= mysqli_num_rows($Extracción_de_dientes_en_adultos3);

$Extracción_de_dientes_en_adultos3 = "SELECT * FROM `treatment_record` WHERE treatment_type='Extracción_de_dientes_en_adultos' and treatment_date LIKE '%-09-%'";
$Extracción_de_dientes_en_adultos4 = mysqli_query($conn, $Extracción_de_dientes_en_adultos3);
$uu_sept= mysqli_num_rows($Extracción_de_dientes_en_adultos4);

$Extracción_de_dientes_en_adultos4 = "SELECT * FROM `treatment_record` WHERE treatment_type='Extracción_de_dientes_en_adultos' and treatment_date LIKE '%-08-%'";
$Extracción_de_dientes_en_adultos5 = mysqli_query($conn, $Extracción_de_dientes_en_adultos4);
$uu_aug= mysqli_num_rows($Extracción_de_dientes_en_adultos5);

$Extracción_de_dientes_en_adultos5 = "SELECT * FROM `treatment_record` WHERE treatment_type='Extracción_de_dientes_en_adultos' and treatment_date LIKE '%-07-%'";
$Extracción_de_dientes_en_adultos6 = mysqli_query($conn, $Extracción_de_dientes_en_adultos5);
$uu_july= mysqli_num_rows($Extracción_de_dientes_en_adultos6);

$Extracción_de_dientes_en_adultos6 = "SELECT * FROM `treatment_record` WHERE treatment_type='Extracción_de_dientes_en_adultos' and treatment_date LIKE '%-06-%'";
$Extracción_de_dientes_en_adultos7 = mysqli_query($conn, $Extracción_de_dientes_en_adultos6);
$uu_june= mysqli_num_rows($Extracción_de_dientes_en_adultos7);

$Extracción_de_dientes_en_adultos7 = "SELECT * FROM `treatment_record` WHERE treatment_type='Extracción_de_dientes_en_adultos' and treatment_date LIKE '%-05-%'";
$Extracción_de_dientes_en_adultos8 = mysqli_query($conn, $Extracción_de_dientes_en_adultos7);
$uu_may= mysqli_num_rows($Extracción_de_dientes_en_adultos8);

$Extracción_de_dientes_en_adultos8 = "SELECT * FROM `treatment_record` WHERE treatment_type='Extracción_de_dientes_en_adultos' and treatment_date LIKE '%-04-%'";
$Extracción_de_dientes_en_adultos9 = mysqli_query($conn, $Extracción_de_dientes_en_adultos8);
$uu_apr= mysqli_num_rows($Extracción_de_dientes_en_adultos9);

$Extracción_de_dientes_en_adultos9 = "SELECT * FROM `treatment_record` WHERE treatment_type='Extracción_de_dientes_en_adultos' and treatment_date LIKE '%-03-%'";
$Extracción_de_dientes_en_adultos10 = mysqli_query($conn, $Extracción_de_dientes_en_adultos9);
$uu_mar= mysqli_num_rows($Extracción_de_dientes_en_adultos10);

$Extracción_de_dientes_en_adultos10 = "SELECT * FROM `treatment_record` WHERE treatment_type='Extracción_de_dientes_en_adultos' and treatment_date LIKE '%-02-%'";
$Extracción_de_dientes_en_adultos11 = mysqli_query($conn, $Extracción_de_dientes_en_adultos10);
$uu_feb= mysqli_num_rows($Extracción_de_dientes_en_adultos11);

$Extracción_de_dientes_en_adultos11 = "SELECT * FROM `treatment_record` WHERE treatment_type='Extracción_de_dientes_en_adultos' and treatment_date LIKE '%-01-%'";
$Extracción_de_dientes_en_adultos12 = mysqli_query($conn, $Extracción_de_dientes_en_adultos11);
$uu_jan= mysqli_num_rows($Extracción_de_dientes_en_adultos12);

//Otros

$Otros = "SELECT * FROM `treatment_record` WHERE treatment_type='Otros' and treatment_date LIKE '%-12-%'";
$Otros1 = mysqli_query($conn, $Otros);
$ii_dec= mysqli_num_rows($Otros1);

$Otros1 = "SELECT * FROM `treatment_record` WHERE treatment_type='Otros' and treatment_date LIKE '%-11-%'";
$Otros2 = mysqli_query($conn, $Otros1);
$ii_nov= mysqli_num_rows($Otros2);

$Otros2 = "SELECT * FROM `treatment_record` WHERE treatment_type='Otros' and treatment_date LIKE '%-10-%'";
$Otros3 = mysqli_query($conn, $Otros2);
$ii_oct= mysqli_num_rows($Otros3);

$Otros3 = "SELECT * FROM `treatment_record` WHERE treatment_type='Otros' and treatment_date LIKE '%-09-%'";
$Otros4 = mysqli_query($conn, $Otros3);
$ii_sept= mysqli_num_rows($Otros4);

$Otros4 = "SELECT * FROM `treatment_record` WHERE treatment_type='Otros' and treatment_date LIKE '%-08-%'";
$Otros5 = mysqli_query($conn, $Otros4);
$ii_aug= mysqli_num_rows($Otros5);

$Otros5 = "SELECT * FROM `treatment_record` WHERE treatment_type='Otros' and treatment_date LIKE '%-07-%'";
$Otros6 = mysqli_query($conn, $Otros5);
$ii_july= mysqli_num_rows($Otros6);

$Otros6 = "SELECT * FROM `treatment_record` WHERE treatment_type='Otros' and treatment_date LIKE '%-06-%'";
$Otros7 = mysqli_query($conn, $Otros6);
$ii_june= mysqli_num_rows($Otros7);

$Otros7 = "SELECT * FROM `treatment_record` WHERE treatment_type='Otros' and treatment_date LIKE '%-05-%'";
$Otros8 = mysqli_query($conn, $Otros7);
$ii_may= mysqli_num_rows($Otros8);

$Otros8 = "SELECT * FROM `treatment_record` WHERE treatment_type='Otros' and treatment_date LIKE '%-04-%'";
$Otros9 = mysqli_query($conn, $Otros8);
$ii_apr= mysqli_num_rows($Otros9);

$Otros9 = "SELECT * FROM `treatment_record` WHERE treatment_type='Otros' and treatment_date LIKE '%-03-%'";
$Otros10 = mysqli_query($conn, $Otros9);
$ii_mar= mysqli_num_rows($Otros10);

$Otros10 = "SELECT * FROM `treatment_record` WHERE treatment_type='Otros' and treatment_date LIKE '%-02-%'";
$Otros11 = mysqli_query($conn, $Otros10);
$ii_feb= mysqli_num_rows($Otros11);

$Otros11 = "SELECT * FROM `treatment_record` WHERE treatment_type='Otros' and treatment_date LIKE '%-01-%'";
$Otros12 = mysqli_query($conn, $Otros11);
$ii_jan= mysqli_num_rows($Otros12);
?>


<script>

new Chart(document.getElementById("bar-chart-grouped2"), {
    type: 'bar',
    data: {
      labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
      datasets: [
        {
          label: "Diagnóstico_Odontológico",
          backgroundColor: "#7EE5A2",
          data: [<?php echo $p_jan; ?>,<?php echo $p_feb; ?>,<?php echo $p_mar; ?>,<?php echo $p_apr; ?>,<?php echo $p_may; ?>,<?php echo $p_june; ?>,<?php echo $p_july; ?>,<?php echo $p_aug; ?>,<?php echo $p_sept; ?>,<?php echo $p_oct; ?>,<?php echo $p_nov; ?>,<?php echo $p_dec; ?>]
        }, {
          label: "Limpieza_de_niños",
          backgroundColor: "#FF4DCD",
          data: [<?php echo $c_jan; ?>,<?php echo $c_feb; ?>,<?php echo $c_mar; ?>,<?php echo $c_apr; ?>,<?php echo $c_may; ?>,<?php echo $c_june; ?>,<?php echo $c_july; ?>,<?php echo $c_aug; ?>,<?php echo $c_sept; ?>,<?php echo $c_oct; ?>,<?php echo $c_nov; ?>,<?php echo $c_dec; ?>]
        }, {
          label: "Limpieza_de_adultos",
          backgroundColor: "#AEFF80",
          data: [<?php echo $t_jan; ?>,<?php echo $t_feb; ?>,<?php echo $t_mar; ?>,<?php echo $t_apr; ?>,<?php echo $t_may; ?>,<?php echo $t_june; ?>,<?php echo $t_july; ?>,<?php echo $t_aug; ?>,<?php echo $t_sept; ?>,<?php echo $t_oct; ?>,<?php echo $t_nov; ?>,<?php echo $t_dec; ?>]
        }, {
          label: "Flúor",
          backgroundColor: "#BFBBA7",
          data: [<?php echo $ps_jan; ?>,<?php echo $ps_feb; ?>,<?php echo $ps_mar; ?>,<?php echo $ps_apr; ?>,<?php echo $ps_may; ?>,<?php echo $ps_june; ?>,<?php echo $ps_july; ?>,<?php echo $ps_aug; ?>,<?php echo $ps_sept; ?>,<?php echo $ps_oct; ?>,<?php echo $ps_nov; ?>,<?php echo $ps_dec; ?>]
        }, {
          label: "Calza_pequeña",
          backgroundColor: "#FF5681",
          data: [<?php echo $pm_jan; ?>,<?php echo $pm_feb; ?>,<?php echo $pm_mar; ?>,<?php echo $pm_apr; ?>,<?php echo $pm_may; ?>,<?php echo $pm_june; ?>,<?php echo $pm_july; ?>,<?php echo $pm_aug; ?>,<?php echo $pm_sept; ?>,<?php echo $pm_oct; ?>,<?php echo $pm_nov; ?>,<?php echo $pm_dec; ?>]
        }, {
          label: "Calza_mediana",
          backgroundColor: "#FFED69",
          data: [<?php echo $o_jan; ?>,<?php echo $o_feb; ?>,<?php echo $o_mar; ?>,<?php echo $o_apr; ?>,<?php echo $o_may; ?>,<?php echo $o_june; ?>,<?php echo $o_july; ?>,<?php echo $o_aug; ?>,<?php echo $o_sept; ?>,<?php echo $o_oct; ?>,<?php echo $o_nov; ?>,<?php echo $o_dec; ?>]
        }, {
          label: "Calzas_grande",
          backgroundColor: "#70C9BD",
          data: [<?php echo $l_jan; ?>,<?php echo $l_feb; ?>,<?php echo $l_mar; ?>,<?php echo $l_apr; ?>,<?php echo $l_may; ?>,<?php echo $l_june; ?>,<?php echo $l_july; ?>,<?php echo $l_aug; ?>,<?php echo $l_sept; ?>,<?php echo $l_oct; ?>,<?php echo $l_nov; ?>,<?php echo $l_dec; ?>]
        }, {
          label: "Reconstrucción_de_dientes",
          backgroundColor: "#c97070",
          data: [<?php echo $qq_jan; ?>,<?php echo $qq_feb; ?>,<?php echo $qq_mar; ?>,<?php echo $qq_apr; ?>,<?php echo $qq_may; ?>,<?php echo $qq_june; ?>,<?php echo $qq_july; ?>,<?php echo $qq_aug; ?>,<?php echo $qq_sept; ?>,<?php echo $qq_oct; ?>,<?php echo $qq_nov; ?>,<?php echo $qq_dec; ?>]
        }, {
          label: "Calzas_de_niños",
          backgroundColor: "#c99f70",
          data: [<?php echo $ww_jan; ?>,<?php echo $ww_feb; ?>,<?php echo $ww_mar; ?>,<?php echo $ww_apr; ?>,<?php echo $ww_may; ?>,<?php echo $ww_june; ?>,<?php echo $ww_july; ?>,<?php echo $ww_aug; ?>,<?php echo $ww_sept; ?>,<?php echo $ww_oct; ?>,<?php echo $ww_nov; ?>,<?php echo $ww_dec; ?>]
        }, {
          label: "Tratamiento_de_emergencia",
          backgroundColor: "#c3c970",
          data: [<?php echo $ee_jan; ?>,<?php echo $ee_feb; ?>,<?php echo $ee_mar; ?>,<?php echo $ee_apr; ?>,<?php echo $ee_may; ?>,<?php echo $ee_june; ?>,<?php echo $ee_july; ?>,<?php echo $ee_aug; ?>,<?php echo $ee_sept; ?>,<?php echo $ee_oct; ?>,<?php echo $ee_nov; ?>,<?php echo $ee_dec; ?>]
        }, {
          label: "Sellantes",
          backgroundColor: "#8bc970",
          data: [<?php echo $rr_jan; ?>,<?php echo $rr_feb; ?>,<?php echo $rr_mar; ?>,<?php echo $rr_apr; ?>,<?php echo $rr_may; ?>,<?php echo $rr_june; ?>,<?php echo $rr_july; ?>,<?php echo $rr_aug; ?>,<?php echo $rr_sept; ?>,<?php echo $rr_oct; ?>,<?php echo $rr_nov; ?>,<?php echo $rr_dec; ?>]
        }, {
          label: "Promoción_de_sellantes",
          backgroundColor: "#70c9b4",
          data: [<?php echo $tt_jan; ?>,<?php echo $tt_feb; ?>,<?php echo $tt_mar; ?>,<?php echo $tt_apr; ?>,<?php echo $tt_may; ?>,<?php echo $tt_june; ?>,<?php echo $tt_july; ?>,<?php echo $tt_aug; ?>,<?php echo $tt_sept; ?>,<?php echo $tt_oct; ?>,<?php echo $tt_nov; ?>,<?php echo $tt_dec; ?>]
        }, {
          label: "Extracción_de_dientes_en_niños",
          backgroundColor: "#192b73",
          data: [<?php echo $yy_jan; ?>,<?php echo $yy_feb; ?>,<?php echo $yy_mar; ?>,<?php echo $yy_apr; ?>,<?php echo $yy_may; ?>,<?php echo $yy_june; ?>,<?php echo $yy_july; ?>,<?php echo $yy_aug; ?>,<?php echo $yy_sept; ?>,<?php echo $yy_oct; ?>,<?php echo $yy_nov; ?>,<?php echo $yy_dec; ?>]
        }, {
          label: "Extracción_de_dientes_en_adultos",
          backgroundColor: "#af9ad9",
          data: [<?php echo $uu_jan; ?>,<?php echo $uu_feb; ?>,<?php echo $uu_mar; ?>,<?php echo $uu_apr; ?>,<?php echo $uu_may; ?>,<?php echo $uu_june; ?>,<?php echo $uu_july; ?>,<?php echo $uu_aug; ?>,<?php echo $uu_sept; ?>,<?php echo $uu_oct; ?>,<?php echo $uu_nov; ?>,<?php echo $uu_dec; ?>]
        }, {
          label: "OTROS",
          backgroundColor: "#52184e",
          data: [<?php echo $ii_jan; ?>,<?php echo $ii_feb; ?>,<?php echo $ii_mar; ?>,<?php echo $ii_apr; ?>,<?php echo $ii_may; ?>,<?php echo $ii_june; ?>,<?php echo $ii_july; ?>,<?php echo $ii_aug; ?>,<?php echo $ii_sept; ?>,<?php echo $ii_oct; ?>,<?php echo $ii_nov; ?>,<?php echo $ii_dec; ?>]
        }
        
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Número de Tratamientos Contra Meses Según Tipo de Tratamiento'
      }
    }
});



</script>

<br><br>

<div id="profile" align="center">
<a titlt="print screen" alt="print screen" onClick="window.print();" "target="_blank" style="cursor:pointer;"><img src="img/printer.png" width="50" height="50"></a>
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
