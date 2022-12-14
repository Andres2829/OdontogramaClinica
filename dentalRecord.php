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

    <style>
        .active{
            width: 37px;
            height: 37px;
        }
        img{
            display: inline-block;
        }
        .gap{
            margin-top: 100px;
            margin-bottom: 100px;
        }

        .check {
            width:30px;
            height:30px;
            }
    </style>

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

<section id="dentalRecord">
  <div class="container">
    <h3 class="text-center">REGISTRO DENTAL DEL PACIENTE</h3>
    <hr class="star-primary">
    
<br>

<div align="center">

<?php
include ('connect.php');
session_start();
$_SESSION['id'] = $_GET['id'];
$id = $_SESSION['id'];

  $stmt = $mysqli->prepare("SELECT * FROM users WHERE id = ?");
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $result=$stmt->get_result();
   $row = $result->fetch_assoc();

?>

<form id="borang2" name="borang2" method="post" action="dentalRecordProcess.php?id=<?php echo $id;?>">

 <table width="450"  align="center" cellspacing="12px">

       <tr>
         <th colspan="2" scope="col"></th>
       </tr>

       <tr>
         <td height="24"><br>
         Nombre del paciente :</td>
         <td height="24"><br><?php echo $row["name"];?></td>
        </tr>

         <tr>
         <td height="24"><br>
           Cedula :</td>
         <td height="24"><br><?php echo $row["documento"];?></td>
         </tr>

         <tr>
         <td height="24"><br>
           Fecha :</td>
         <td height="24"><br><input type="date" name="treatment_date" value="<?php echo date("Y-m-d"); ?>"></td>
         </tr>

        <tr>
          <td height="24"><br>
          Tipo de Tratamiento  :</td>
         <td height ="24"><label for="treatment_type"></label><br>
              <select name="treatment_type" id="treatment_type">
                    <option value="Diagnóstico_Odontológico">Diagnóstico Odontológico</option>
                    <option value="Limpieza_de_niños">Limpieza de niños</option>
                    <option value="Limpieza_de_adultos">Limpieza de adultos</option>
                    <option value="Flúor">Flúor</option>
                    <option value="Calza_pequeña">Calza pequeña</option>
                    <option value="Calza_mediana">Calza mediana</option>
                    <option value="Calzas_grande">Calzas grande</option>
                    <option value="Reconstrucción_de_dientes">Reconstrucción de dientes</option>
                    <option value="Calzas_de_niños">Calzas de niños</option>
                    <option value="Tratamiento_de_emergencia">Tratamiento de emergencia</option>
                    <option value="Sellantes">Sellantes</option>
                    <option value="Promoción_de_sellantes">Promoción de sellantes</option>
                    <option value="Extracción_de_dientes_en_niños">Extracción de dientes en niños</option>
                    <option value="Extracción_de_dientes_en_adultos">Extracción de dientes en adultos</option>
                    <option value="Otros">Otros</option>
            </select></td>
          </tr>

         <tr>
        <td height="24"><br>
          Notas :</td>
        <td height="24"><br><label for="treatment_note"></label>
          <textarea name="treatment_note" cols="30" rows="4"></textarea></td>
        </tr>

       </table>

       <br>
       <br>
       <br>
    <center>
      <div>
        <img src="img/white.jpg" height="43" sizes="" />
        <img src="img/white.jpg" height="43"/>
        <img src="img/white.jpg" height="43"/>
        <img src="img/nombor/55.jpg" height="43"/>
        <img src="img/nombor/54.jpg" height="43"/>
        <img src="img/nombor/53.jpg" height="43"/>
        <img src="img/nombor/52.jpg" height="43"/>
        <img src="img/nombor/51.jpg" height="43"/>
        <img src="img/nombor/61.jpg" height="43"/>
        <img src="img/nombor/62.jpg" height="43"/>
        <img src="img/nombor/63.jpg" height="43"/>
        <img src="img/nombor/64.jpg" height="43"/>
        <img src="img/nombor/65.jpg" height="43"/>
        <img src="img/white.jpg" height="43"/>
        <img src="img/white.jpg" height="43"/>
        <img src="img/white.jpg" height="43"/>
      </div>
    <div>
        <img src="img/white.jpg" height="42"/>
        <img src="img/white.jpg" height="42"/>
        <img src="img/white.jpg" height="42"/>
       
        <?php  
        //SELECT * FROM users, treatment_record where users.id = '1' AND treatment_record.id = users.id
          $stmt = $mysqli->prepare("SELECT * FROM treatment_record where id = ? order by treatment_date DESC" );
          $stmt->bind_param("s", $_GET['id']);
          $stmt->execute();
          $result = $stmt->get_result();
          //if($result->num_rows === 0) ;
          $row = $result->fetch_assoc();
           {
            // $id[] = $row['id'];
            // $name[] = $row['name'];
            // $age[] = $row['age'];

          ?>
          <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
        <img src="img/<?php echo ($row==null ?"normal2" :$row['gg_55']) ?>.png" id="gg_55" height="42" class="btn1 btn-success" data-id="55"/>
        <input type="Hidden" name="gg_55" id="hid_gg_55" value="<?php echo ($row==null ?"normal2" :$row['gg_55']) ?>">
        <img src="img/<?php echo ($row==null ?"normal2" :$row['gg_54']) ?>.png" id="gg_54" height="42" class="btn1 btn-success" data-id="54"/>
        <input type="Hidden" name="gg_54" id="hid_gg_54" value="<?php echo ($row==null ?"normal2" :$row['gg_54']) ?>">
        <img src="img/<?php echo ($row==null ?"normal1" :$row['gg_53']) ?>.png" id="gg_53" height="42" class="btn1 btn-success" data-id="53"/>
        <input type="Hidden" name="gg_53" id="hid_gg_53" value="<?php echo ($row==null ?"normal1" :$row['gg_53']) ?>">
        <img src="img/<?php echo ($row==null ?"normal1" :$row['gg_52']) ?>.png" id="gg_52" height="42" class="btn1 btn-success" data-id="52"/>
        <input type="Hidden" name="gg_52" id="hid_gg_52" value="<?php echo ($row==null ?"normal1" :$row['gg_52']) ?>">
        <img src="img/<?php echo ($row==null ?"normal1" :$row['gg_51']) ?>.png" id="gg_51" height="42" class="btn1 btn-success" data-id="51"/>
        <input type="Hidden" name="gg_51" id="hid_gg_51" value="<?php echo ($row==null ?"normal1" :$row['gg_51']) ?>">
        <img src="img/<?php echo ($row==null ?"normal1" :$row['gg_61']) ?>.png" id="gg_61" height="42" class="btn1 btn-success" data-id="61"/>
        <input type="Hidden" name="gg_61" id="hid_gg_61" value="<?php echo ($row==null ?"normal1" :$row['gg_61']) ?>">
        <img src="img/<?php echo ($row==null ?"normal1" :$row['gg_62']) ?>.png" id="gg_62" height="42" class="btn1 btn-success" data-id="62"/>
        <input type="Hidden" name="gg_62" id="hid_gg_62" value="<?php echo ($row==null ?"normal1" :$row['gg_62']) ?>">
        <img src="img/<?php echo ($row==null ?"normal1" :$row['gg_63']) ?>.png" id="gg_63" height="42" class="btn1 btn-success" data-id="63"/>
        <input type="Hidden" name="gg_63" id="hid_gg_63" value="<?php echo ($row==null ?"normal1" :$row['gg_63']) ?>">
        <img src="img/<?php echo ($row==null ?"normal2" :$row['gg_64']) ?>.png" id="gg_64" height="42" class="btn1 btn-success" data-id="64"/>
        <input type="Hidden" name="gg_64" id="hid_gg_64" value="<?php echo ($row==null ?"normal2" :$row['gg_64']) ?>">
        <img src="img/<?php echo ($row==null ?"normal2" :$row['gg_65']) ?>.png" id="gg_65" height="42" class="btn1 btn-success" data-id="65"/>
        <input type="Hidden" name="gg_65" id="hid_gg_65" value="<?php echo ($row==null ?"normal2" :$row['gg_65']) ?>">
        <img src="img/white.jpg" height="42"/>
        <img src="img/white.jpg" height="42"/>        
        <img src="img/white.jpg" height="42"/>        
    </div>
    <div>
        <img src="img/<?php echo ($row==null ?"normal2" :$row['gg_18']) ?>.png" id="gg_18" height="42" class="btn1 btn-success"  data-id="18"/>
        <input type="Hidden" name="gg_18" id="hid_gg_18" value="<?php echo ($row==null ?"normal2" :$row['gg_18']) ?>">
        <img src="img/<?php echo ($row==null ?"normal2" :$row['gg_17']) ?>.png" id="gg_17" height="42" class="btn1 btn-success"  data-id="17"/>
        <input type="Hidden" name="gg_17" id="hid_gg_17" value="<?php echo ($row==null ?"normal2" :$row['gg_17']) ?>">
        <img src="img/<?php echo ($row==null ?"normal2" :$row['gg_16']) ?>.png" id="gg_16" height="42" class="btn1 btn-success"  data-id="16"/>
        <input type="Hidden" name="gg_16" id="hid_gg_16" value="<?php echo ($row==null ?"normal2" :$row['gg_16']) ?>">
        <img src="img/<?php echo ($row==null ?"normal2" :$row['gg_15']) ?>.png" id="gg_15" height="42" class="btn1 btn-success"  data-id="15"/>
        <input type="Hidden" name="gg_15" id="hid_gg_15" value="<?php echo ($row==null ?"normal2" :$row['gg_15']) ?>">
        <img src="img/<?php echo ($row==null ?"normal2" :$row['gg_14']) ?>.png" id="gg_14" height="42" class="btn1 btn-success"  data-id="14"/>
        <input type="Hidden" name="gg_14" id="hid_gg_14" value="<?php echo ($row==null ?"normal2" :$row['gg_14']) ?>">
        <img src="img/<?php echo ($row==null ?"normal1" :$row['gg_13']) ?>.png" id="gg_13" height="42" class="btn1 btn-success"  data-id="13"/>
        <input type="Hidden" name="gg_13" id="hid_gg_13" value="<?php echo ($row==null ?"normal1" :$row['gg_13']) ?>">
        <img src="img/<?php echo ($row==null ?"normal1" :$row['gg_12']) ?>.png" id="gg_12" height="42" class="btn1 btn-success"  data-id="12"/>
        <input type="Hidden" name="gg_12" id="hid_gg_12" value="<?php echo ($row==null ?"normal1" :$row['gg_12']) ?>">
        <img src="img/<?php echo ($row==null ?"normal1" :$row['gg_11']) ?>.png" id="gg_11" height="42" class="btn1 btn-success"  data-id="11"/>
        <input type="Hidden" name="gg_11" id="hid_gg_11" value="<?php echo ($row==null ?"normal1" :$row['gg_11']) ?>">
        <img src="img/<?php echo ($row==null ?"normal1" :$row['gg_21']) ?>.png" id="gg_21" height="42" class="btn1 btn-success"  data-id="21"/>
        <input type="Hidden" name="gg_21" id="hid_gg_21" value="<?php echo ($row==null ?"normal1" :$row['gg_21']) ?>">
        <img src="img/<?php echo ($row==null ?"normal1" :$row['gg_22']) ?>.png" id="gg_22" height="42" class="btn1 btn-success"  data-id="22"/>
        <input type="Hidden" name="gg_22" id="hid_gg_22" value="<?php echo ($row==null ?"normal1" :$row['gg_22']) ?>">
        <img src="img/<?php echo ($row==null ?"normal1" :$row['gg_23']) ?>.png" id="gg_23" height="42" class="btn1 btn-success"  data-id="23"/>
        <input type="Hidden" name="gg_23" id="hid_gg_23" value="<?php echo ($row==null ?"normal1" :$row['gg_23']) ?>">
        <img src="img/<?php echo ($row==null ?"normal2" :$row['gg_24']) ?>.png" id="gg_24" height="42" class="btn1 btn-success"  data-id="24"/>
        <input type="Hidden" name="gg_24" id="hid_gg_24" value="<?php echo ($row==null ?"normal2" :$row['gg_24']) ?>">
        <img src="img/<?php echo ($row==null ?"normal2" :$row['gg_25']) ?>.png" id="gg_25" height="42" class="btn1 btn-success"  data-id="25"/>
        <input type="Hidden" name="gg_25" id="hid_gg_25" value="<?php echo ($row==null ?"normal2" :$row['gg_25']) ?>">
        <img src="img/<?php echo ($row==null ?"normal2" :$row['gg_26']) ?>.png" id="gg_26" height="42" class="btn1 btn-success"  data-id="26"/>
        <input type="Hidden" name="gg_26" id="hid_gg_26" value="<?php echo ($row==null ?"normal2" :$row['gg_26']) ?>">
        <img src="img/<?php echo ($row==null ?"normal2" :$row['gg_27']) ?>.png" id="gg_27" height="42" class="btn1 btn-success"  data-id="27"/>
        <input type="Hidden" name="gg_27" id="hid_gg_27" value="<?php echo ($row==null ?"normal2" :$row['gg_27']) ?>">
        <img src="img/<?php echo ($row==null ?"normal2" :$row['gg_28']) ?>.png" id="gg_28" height="42" class="btn1 btn-success"  data-id="28"/>
        <input type="Hidden" name="gg_28" id="hid_gg_28" value="<?php echo ($row==null ?"normal2" :$row['gg_28']) ?>">     
    </div>    
    <div>
      <img src="img/nombor/18.jpg" height="44"/>
      <img src="img/nombor/17.jpg" height="44"/>
      <img src="img/nombor/16.jpg" height="44"/>
      <img src="img/nombor/15.jpg" height="44"/>
      <img src="img/nombor/14.jpg" height="44"/>
      <img src="img/nombor/13.jpg" height="44"/>
      <img src="img/nombor/12.jpg" height="44"/>
      <img src="img/nombor/11.jpg" height="44"/>
      <img src="img/nombor/21.jpg" height="44"/>
      <img src="img/nombor/22.jpg" height="44"/>
      <img src="img/nombor/23.jpg" height="44"/>
      <img src="img/nombor/24.jpg" height="44"/>
      <img src="img/nombor/25.jpg" height="44"/>
      <img src="img/nombor/26.jpg" height="44"/>
      <img src="img/nombor/27.jpg" height="44"/>
      <img src="img/nombor/28.jpg" height="44"/>
    </div>  
    <div>
      <br>
    </div>
    <div>
      <img src="img/nombor/48.jpg" height="44"/>
      <img src="img/nombor/47.jpg" height="44"/>
      <img src="img/nombor/46.jpg" height="44"/>
      <img src="img/nombor/45.jpg" height="44"/>
      <img src="img/nombor/44.jpg" height="44"/>
      <img src="img/nombor/43.jpg" height="44"/>
      <img src="img/nombor/42.jpg" height="44"/>
      <img src="img/nombor/41.jpg" height="44"/>
      <img src="img/nombor/31.jpg" height="44"/>
      <img src="img/nombor/32.jpg" height="44"/>
      <img src="img/nombor/33.jpg" height="44"/>
      <img src="img/nombor/34.jpg" height="44"/>
      <img src="img/nombor/35.jpg" height="44"/>
      <img src="img/nombor/36.jpg" height="44"/>
      <img src="img/nombor/37.jpg" height="44"/>
      <img src="img/nombor/38.jpg" height="44"/>
    </div>  
    <div>
        <img src="img/<?php echo ($row==null ?"normal2" :$row['gg_48']) ?>.png" id="gg_48" height="42" class="btn1 btn-success"  data-id="48"/>
        <input type="Hidden" name="gg_48" id="hid_gg_48" value="<?php echo ($row==null ?"normal2" :$row['gg_48']) ?>">
        <img src="img/<?php echo ($row==null ?"normal2" :$row['gg_47']) ?>.png" id="gg_47" height="42" class="btn1 btn-success"  data-id="47"/>
        <input type="Hidden" name="gg_47" id="hid_gg_47" value="<?php echo ($row==null ?"normal2" :$row['gg_47']) ?>">
        <img src="img/<?php echo ($row==null ?"normal2" :$row['gg_46']) ?>.png" id="gg_46" height="42" class="btn1 btn-success"  data-id="46"/>
        <input type="Hidden" name="gg_46" id="hid_gg_46" value="<?php echo ($row==null ?"normal2" :$row['gg_46']) ?>">
        <img src="img/<?php echo ($row==null ?"normal2" :$row['gg_45']) ?>.png" id="gg_45" height="42" class="btn1 btn-success"  data-id="45"/>
        <input type="Hidden" name="gg_45" id="hid_gg_45" value="<?php echo ($row==null ?"normal2" :$row['gg_45']) ?>">
        <img src="img/<?php echo ($row==null ?"normal2" :$row['gg_44']) ?>.png" id="gg_44" height="42" class="btn1 btn-success"  data-id="44"/>
        <input type="Hidden" name="gg_44" id="hid_gg_44" value="<?php echo ($row==null ?"normal2" :$row['gg_44']) ?>">
        <img src="img/<?php echo ($row==null ?"normal1" :$row['gg_43']) ?>.png" id="gg_43" height="42" class="btn1 btn-success"  data-id="43"/>
        <input type="Hidden" name="gg_43" id="hid_gg_43" value="<?php echo ($row==null ?"normal1" :$row['gg_43']) ?>">
        <img src="img/<?php echo ($row==null ?"normal1" :$row['gg_42']) ?>.png" id="gg_42" height="42" class="btn1 btn-success"  data-id="42"/>
        <input type="Hidden" name="gg_42" id="hid_gg_42" value="<?php echo ($row==null ?"normal1" :$row['gg_42']) ?>">
        <img src="img/<?php echo ($row==null ?"normal1" :$row['gg_41']) ?>.png" id="gg_41" height="42" class="btn1 btn-success"  data-id="41"/>
        <input type="Hidden" name="gg_41" id="hid_gg_41" value="<?php echo ($row==null ?"normal1" :$row['gg_41']) ?>">
        <img src="img/<?php echo ($row==null ?"normal1" :$row['gg_31']) ?>.png" id="gg_31" height="42" class="btn1 btn-success"  data-id="31"/>
        <input type="Hidden" name="gg_31" id="hid_gg_31" value="<?php echo ($row==null ?"normal1" :$row['gg_31']) ?>">
        <img src="img/<?php echo ($row==null ?"normal1" :$row['gg_32']) ?>.png" id="gg_32" height="42" class="btn1 btn-success"  data-id="32"/>
        <input type="Hidden" name="gg_32" id="hid_gg_32" value="<?php echo ($row==null ?"normal1" :$row['gg_32']) ?>">
        <img src="img/<?php echo ($row==null ?"normal1" :$row['gg_33']) ?>.png" id="gg_33" height="42" class="btn1 btn-success"  data-id="33"/>
        <input type="Hidden" name="gg_33" id="hid_gg_33" value="<?php echo ($row==null ?"normal1" :$row['gg_33']) ?>">
        <img src="img/<?php echo ($row==null ?"normal2" :$row['gg_34']) ?>.png" id="gg_34" height="42" class="btn1 btn-success"  data-id="34"/>
        <input type="Hidden" name="gg_34" id="hid_gg_34" value="<?php echo ($row==null ?"normal2" :$row['gg_34']) ?>">
        <img src="img/<?php echo ($row==null ?"normal2" :$row['gg_35']) ?>.png" id="gg_35" height="42" class="btn1 btn-success"  data-id="35"/>
        <input type="Hidden" name="gg_35" id="hid_gg_35" value="<?php echo ($row==null ?"normal2" :$row['gg_35']) ?>">
        <img src="img/<?php echo ($row==null ?"normal2" :$row['gg_36']) ?>.png" id="gg_36" height="42" class="btn1 btn-success"  data-id="36"/>
        <input type="Hidden" name="gg_36" id="hid_gg_36" value="<?php echo ($row==null ?"normal2" :$row['gg_36']) ?>">
        <img src="img/<?php echo ($row==null ?"normal2" :$row['gg_37']) ?>.png" id="gg_37" height="42" class="btn1 btn-success"  data-id="37"/>
        <input type="Hidden" name="gg_37" id="hid_gg_37" value="<?php echo ($row==null ?"normal2" :$row['gg_37']) ?>">
        <img src="img/<?php echo ($row==null ?"normal2" :$row['gg_38']) ?>.png" id="gg_38" height="42" class="btn1 btn-success"  data-id="38"/>
        <input type="Hidden" name="gg_38" id="hid_gg_38" value="<?php echo ($row==null ?"normal2" :$row['gg_38']) ?>">      
    </div>
    <div>
        <img src="img/white.jpg" height="42"/>
        <img src="img/white.jpg" height="42"/>
        <img src="img/white.jpg" height="42"/>
        <img src="img/<?php echo ($row==null ?"normal2" :$row['gg_85']) ?>.png" id="gg_85" height="42" class="btn1 btn-success" data-id="85"/>
        <input type="Hidden" name="gg_85" id="hid_gg_85" value="<?php echo ($row==null ?"normal2" :$row['gg_85']) ?>">
        <img src="img/<?php echo ($row==null ?"normal2" :$row['gg_84']) ?>.png" id="gg_84" height="42" class="btn1 btn-success" data-id="84"/>
        <input type="Hidden" name="gg_84" id="hid_gg_84" value="<?php echo ($row==null ?"normal2" :$row['gg_84']) ?>">
        <img src="img/<?php echo ($row==null ?"normal1" :$row['gg_83']) ?>.png" id="gg_83" height="42" class="btn1 btn-success"  data-id="83"/>
        <input type="Hidden" name="gg_83" id="hid_gg_83" value="<?php echo ($row==null ?"normal1" :$row['gg_83']) ?>">
        <img src="img/<?php echo ($row==null ?"normal1" :$row['gg_82']) ?>.png" id="gg_82" height="42" class="btn1 btn-success"  data-id="82"/>
        <input type="Hidden" name="gg_82" id="hid_gg_82" value="<?php echo ($row==null ?"normal1" :$row['gg_82']) ?>">
        <img src="img/<?php echo ($row==null ?"normal1" :$row['gg_81']) ?>.png" id="gg_81" height="42" class="btn1 btn-success"  data-id="81"/>
        <input type="Hidden" name="gg_81" id="hid_gg_81" value="<?php echo ($row==null ?"normal1" :$row['gg_81']) ?>">
        <img src="img/<?php echo ($row==null ?"normal1" :$row['gg_71']) ?>.png" id="gg_71" height="42" class="btn1 btn-success"  data-id="71"/>
        <input type="Hidden" name="gg_71" id="hid_gg_71" value="<?php echo ($row==null ?"normal1" :$row['gg_71']) ?>">
        <img src="img/<?php echo ($row==null ?"normal1" :$row['gg_72']) ?>.png" id="gg_72" height="42" class="btn1 btn-success"  data-id="72"/>
        <input type="Hidden" name="gg_72" id="hid_gg_72" value="<?php echo ($row==null ?"normal1" :$row['gg_72']) ?>">
        <img src="img/<?php echo ($row==null ?"normal1" :$row['gg_73']) ?>.png" id="gg_73" height="42" class="btn1 btn-success"  data-id="73"/>
        <input type="Hidden" name="gg_73" id="hid_gg_73" value="<?php echo ($row==null ?"normal1" :$row['gg_73']) ?>">
        <img src="img/<?php echo ($row==null ?"normal2" :$row['gg_74']) ?>.png" id="gg_74" height="42" class="btn1 btn-success"  data-id="74"/>
        <input type="Hidden" name="gg_74" id="hid_gg_74" value="<?php echo ($row==null ?"normal2" :$row['gg_74']) ?>">
        <img src="img/<?php echo ($row==null ?"normal2" :$row['gg_75']) ?>.png" id="gg_75" height="42" class="btn1 btn-success"  data-id="75"/>
        <input type="Hidden" name="gg_75" id="hid_gg_75" value="<?php echo ($row==null ?"normal2" :$row['gg_75']) ?>">
        <img src="img/white.jpg" height="42"/>
        <img src="img/white.jpg" height="42"/>        
        <img src="img/white.jpg" height="42"/>       
    </div>
    <div>
        <img src="img/white.jpg" height="42"/>
        <img src="img/white.jpg" height="42"/>
        <img src="img/white.jpg" height="42"/>
        <img src="img/nombor/85.jpg" height="42"/>
        <img src="img/nombor/84.jpg" height="42"/>
        <img src="img/nombor/83.jpg" height="42"/>
        <img src="img/nombor/82.jpg" height="42"/>
        <img src="img/nombor/81.jpg" height="42"/>
        <img src="img/nombor/71.jpg" height="42"/>
        <img src="img/nombor/72.jpg" height="42"/>
        <img src="img/nombor/73.jpg" height="42"/>
        <img src="img/nombor/74.jpg" height="42"/>
        <img src="img/nombor/75.jpg" height="42"/>
        <img src="img/white.jpg" height="42"/>
        <img src="img/white.jpg" height="42"/>
        <img src="img/white.jpg" height="42"/>
      </div>
    <?php  }  ?>
    </center>
  
    <style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 20%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>





        <!-- Trigger/Open The Modal -->
    <!-- <button id="myBtn">Open Modal</button> -->

    <!-- The Modal -->
    <div id="myModal" class="modal">
     
      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>
        <p>Insertar Registro de Tratamiento</p>
       
          <input type="Hidden" name="hidGGid" id="hidGGid">
        <select name="optionatas" id="optionatas" required="required">
              <option>Seleccione</option>
                      <option value="perlucabut">Para Extracción</option>
                      <option value="telahcabut">Extraído</option>
                      <option value="xdegigi">Desaparecido</option>
                      <option value="adatampal">Calzado</option>
                      <option value="tampaldibuat">Calza Realizada</option>
                      <option value="untuktampal">Para Calzar</option>
                      <option value="tunggul">Raíz Dental Retenida</option>
            </select><br><br>
        <input type="button" id="btnTreat" onclick="modal.style.display = 'none';" value="Tratar">
         
      </div>

    </div>


    <script>
      //get the modal
      var modal = document.getElementById("myModal") ;
      //gigi atas
      var gg55 = document.getElementById("gg_55") ;
      var gg54 = document.getElementById("gg_54") ;
      var gg53 = document.getElementById("gg_53") ;
      var gg52 = document.getElementById("gg_52") ;
      var gg51 = document.getElementById("gg_51") ;
      var gg61 = document.getElementById("gg_61") ;
      var gg62 = document.getElementById("gg_62") ;
      var gg63 = document.getElementById("gg_63") ;
      var gg64 = document.getElementById("gg_64") ;
      var gg65 = document.getElementById("gg_65") ;
      var gg18 = document.getElementById("gg_18") ;
      var gg17 = document.getElementById("gg_17") ;
      var gg16 = document.getElementById("gg_16") ;
      var gg15 = document.getElementById("gg_15") ;
      var gg14 = document.getElementById("gg_14") ;
      var gg13 = document.getElementById("gg_13") ;
      var gg12 = document.getElementById("gg_12") ;
      var gg11 = document.getElementById("gg_11") ;
      var gg21 = document.getElementById("gg_21") ;
      var gg22 = document.getElementById("gg_22") ;
      var gg23 = document.getElementById("gg_23") ;
      var gg24 = document.getElementById("gg_24") ;
      var gg25 = document.getElementById("gg_25") ;
      var gg26 = document.getElementById("gg_26") ;
      var gg27 = document.getElementById("gg_27") ;
      var gg28 = document.getElementById("gg_28") ;
      
      //gigi bawah
      var gg48 = document.getElementById("gg_48") ;
      var gg47 = document.getElementById("gg_47") ;
      var gg46 = document.getElementById("gg_46") ;
      var gg45 = document.getElementById("gg_45") ;
      var gg44 = document.getElementById("gg_44") ;
      var gg43 = document.getElementById("gg_43") ;
      var gg42 = document.getElementById("gg_42") ;
      var gg41 = document.getElementById("gg_41") ;
      var gg31 = document.getElementById("gg_31") ;
      var gg32 = document.getElementById("gg_32") ;
      var gg33 = document.getElementById("gg_33") ;
      var gg34 = document.getElementById("gg_34") ;
      var gg35 = document.getElementById("gg_35") ;
      var gg36 = document.getElementById("gg_36") ;
      var gg37 = document.getElementById("gg_37") ;
      var gg38 = document.getElementById("gg_38") ;
      var gg85 = document.getElementById("gg_85") ;
      var gg84 = document.getElementById("gg_84") ;
      var gg83 = document.getElementById("gg_83") ;
      var gg82 = document.getElementById("gg_82") ;
      var gg81 = document.getElementById("gg_81") ;
      var gg71 = document.getElementById("gg_71") ;
      var gg72 = document.getElementById("gg_72") ;
      var gg73 = document.getElementById("gg_73") ;
      var gg74 = document.getElementById("gg_74") ;
      var gg75 = document.getElementById("gg_75") ;


      //get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0] ;

      //user click image, open modal
      //gigi atas
      gg55.onclick = function() {
        modal.style.display = "block" ;
      }

      gg54.onclick = function() {
        modal.style.display = "block" ;
      }

      gg53.onclick = function() {
        modal.style.display = "block" ;
      }

      gg52.onclick = function() {
        modal.style.display = "block" ;
      }

      gg51.onclick = function() {
        modal.style.display = "block" ;
      }

      gg61.onclick = function() {
        modal.style.display = "block" ;
      }

      gg62.onclick = function() {
        modal.style.display = "block" ;
      }

      gg63.onclick = function() {
        modal.style.display = "block" ;
      }

      gg64.onclick = function() {
        modal.style.display = "block" ;
      }

      gg65.onclick = function() {
        modal.style.display = "block" ;
      }

      gg18.onclick = function() {
        modal.style.display = "block" ;
      }

      gg17.onclick = function() {
        modal.style.display = "block" ;
      }

      gg16.onclick = function() {
        modal.style.display = "block" ;
      }

      gg15.onclick = function() {
        modal.style.display = "block" ;
      }

      gg14.onclick = function() {
        modal.style.display = "block" ;
      }

      gg13.onclick = function() {
        modal.style.display = "block" ;
      }

      gg12.onclick = function() {
        modal.style.display = "block" ;
      }

      gg11.onclick = function() {
        modal.style.display = "block" ;
      }

      gg21.onclick = function() {
        modal.style.display = "block" ;
      }

      gg22.onclick = function() {
        modal.style.display = "block" ;
      }

      gg23.onclick = function() {
        modal.style.display = "block" ;
      }

      gg24.onclick = function() {
        modal.style.display = "block" ;
      }

      gg25.onclick = function() {
        modal.style.display = "block" ;
      }

      gg26.onclick = function() {
        modal.style.display = "block" ;
      }

      gg27.onclick = function() {
        modal.style.display = "block" ;
      }

      gg28.onclick = function() {
        modal.style.display = "block" ;
      }

      //gigi bawah
      gg48.onclick = function() {
        modal.style.display = "block" ;
      }

      gg47.onclick = function() {
        modal.style.display = "block" ;
      }

      gg46.onclick = function() {
        modal.style.display = "block" ;
      }

      gg45.onclick = function() {
        modal.style.display = "block" ;
      }

      gg44.onclick = function() {
        modal.style.display = "block" ;
      }

      gg43.onclick = function() {
        modal.style.display = "block" ;
      }

      gg42.onclick = function() {
        modal.style.display = "block" ;
      }

      gg41.onclick = function() {
        modal.style.display = "block" ;
      }

      gg31.onclick = function() {
        modal.style.display = "block" ;
      }

      gg32.onclick = function() {
        modal.style.display = "block" ;
      }

      gg33.onclick = function() {
        modal.style.display = "block" ;
      }

      gg34.onclick = function() {
        modal.style.display = "block" ;
      }

      gg35.onclick = function() {
        modal.style.display = "block" ;
      }

      gg36.onclick = function() {
        modal.style.display = "block" ;
      }

      gg37.onclick = function() {
        modal.style.display = "block" ;
      }

      gg38.onclick = function() {
        modal.style.display = "block" ;
      }

      gg85.onclick = function() {
        modal.style.display = "block" ;
      }

      gg84.onclick = function() {
        modal.style.display = "block" ;
      }

      gg83.onclick = function() {
        modal.style.display = "block" ;
      }

      gg82.onclick = function() {
        modal.style.display = "block" ;
      }

      gg81.onclick = function() {
        modal.style.display = "block" ;
      }

      gg71.onclick = function() {
        modal.style.display = "block" ;
      }

      gg72.onclick = function() {
        modal.style.display = "block" ;
      }

      gg73.onclick = function() {
        modal.style.display = "block" ;
      }

      gg74.onclick = function() {
        modal.style.display = "block" ;
      }

      gg75.onclick = function() {
        modal.style.display = "block" ;
      }

      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
        modal.style.display = "none";
      }

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none" ;
        }
      }
    </script>

    <br><br><br>

    <h5 class="text-center">INDICADORES DE SALUD BUCAL</h5>
    <hr class="star-primary">
        <tr>
          <td height="24"><br>
          Enfermedad Periodontal :</td>
         <td height ="24"><label for="enfermedad_periodontal"></label><br>
              <select name="enfermedad_periodontal" id="enfermedad_periodontal">
                    <option value="Ninguno">Ninguno</option>
                    <option value="Leve">Leve</option>
                    <option value="Moderada">Moderada</option>
                    <option value="Severa">Severa</option> 
            </select></td>
          </tr>

          <tr>
          <td height="24"><br>
          Mal Oclusión :</td>
         <td height ="24"><label for="mal_oclusion"></label><br>
              <select name="mal_oclusion" id="mal_oclusion">
                    <option value="Ninguno">Ninguno</option>
                    <option value="ANGLE_I">ANGLE I</option>
                    <option value="ANGLE_II">ANGLE II</option>
                    <option value="ANGLE_III">ANGLE III</option> 
            </select></td>
          </tr>

          <tr>
          <td height="24"><br>
          Fluorosis :</td>
         <td height ="24"><label for="fluorosis"></label><br>
              <select name="fluorosis" id="fluorosis">
                    <option value="Ninguno">Ninguno</option>
                    <option value="Leve">Leve</option>
                    <option value="Moderada">Moderada</option>
                    <option value="Severa">Severa</option> 
            </select></td>
          </tr>

          <br><br><br><br><br>

          <h5 class="text-center">HIGIENE ORAL SIMPLIFICADA</h5>
          <hr class="star-primary">
          <br>
          <div > 
                  <script>
                        function sumar() {

                        var total = 0;
                        var suma = 0;

                        var numero1 = document.getElementById("txt_campo_7").value;
                        var suma = parseFloat(numero1);

                    
                          $(".monto").each(function() {

                            if (isNaN(parseFloat($(this).val()))) {

                              total += 0;
                              suma += 0;

                            } else {

                              total += parseFloat($(this).val()/suma);
                            }

                        });

                        //alert(total);
                        document.getElementById('total_placa').innerHTML = total;
                        document.getElementById('total_placa1').value = total;
                        };
                </script>
                      <script>
                        function sumarcal() {

                        var totalcal = 0;
                        var sumacal = 0;

                        var numero1cal = document.getElementById("txt_campo_14").value;
                        var sumacal = parseFloat(numero1cal);

                    
                          $(".montocal").each(function() {

                            if (isNaN(parseFloat($(this).val()))) {

                              totalcal += 0;
                              sumacal += 0;

                            } else {

                              totalcal += parseFloat($(this).val()/sumacal);
                            }

                        });

                        //alert(total);
                        document.getElementById('spTotalcal').innerHTML = totalcal;
                        document.getElementById('total_calculo').value = totalcal;
                        };
                        function sumargin() {

                        var totalgin = 0;
                        var sumagin = 0;

                        var numero1gin = document.getElementById("txt_campo_21").value;
                        var sumagin = parseFloat(numero1gin);

                    
                          $(".montogin").each(function() {

                            if (isNaN(parseFloat($(this).val()))) {

                              totalgin += 0;
                              sumagin += 0;

                            } else {

                              totalgin += parseFloat($(this).val()/sumagin);
                            }
                            
                        });

                        //alert(total);
                        document.getElementById('spTotalgin').innerHTML = totalgin;
                        document.getElementById('total_gingivitis').value = totalgin;
                        };
                    </script>
            <table width="100%" cellpadding="10px" cellspacing="10px">
              
              <tbody class="text-center"><tr>
                
                  <td width="25%" colspan="0">
                  <h7></h7>
                      <input type="checkbox" value="España" name="countries[]"><label>16</label><br>
                        <input type="checkbox" value="Portugal" name="countries[]"><label>11</label><br>
                        <input type="checkbox" value="Francia" name="countries[]"><label>26</label><br>
                        <input type="checkbox" value="Bélgica" name="countries[]"><label>36</label><br>
                        <input type="checkbox" value="Alemania" name="countries[]"><label>31</label><br>
                        <input type="checkbox" value="Italia" name="countries[]"><label>46</label><br>                   
                    </td>
                    <td width="25%" colspan="0">
                    <h7></h7>
                      <input type="checkbox" value="Estados Unidos" name="countries[]"><label>17</label><br>
                        <input type="checkbox" value="México" name="countries[]"><label>21</label><br>
                        <input type="checkbox" value="Nicaragua" name="countries[]"><label>27</label><br>
                        <input type="checkbox" value="República Dominicana" name="countries[]"><label>37</label><br>
                        <input type="checkbox" value="Cuba" name="countries[]"><label>41</label><br>
                        <input type="checkbox" value="Colombia" name="countries[]"><label>47</label><br>
                    </td>
                    <td width="25%" colspan="0">
                    <h7></h7>
                      <input type="checkbox" value="Russia" name="countries[]"><label>55</label><br>
                        <input type="checkbox" value="China" name="countries[]"><label>51</label><br>
                        <input type="checkbox" value="India" name="countries[]"><label>65</label><br>
                        <input type="checkbox" value="Australia" name="countries[]"><label>75</label><br>
                        <input type="checkbox" value="Corea del Sud" name="countries[]"><label>71</label><br>
                        <input type="checkbox" value="Corea del Norte" name="countries[]"><label>85</label><br>
                    </td>


                    <td width="25%" colspan="0">
                    <h7><br><br>PLACA</h7>
                      <input type="number" id="txt_campo_1" value="0" class="monto" onkeyup="sumar();"><label></label><br>
                      <input type="number" id="txt_campo_2" value="0" class="monto" onkeyup="sumar();"><label></label><br>
                      <input type="number" id="txt_campo_3" value="0" class="monto" onkeyup="sumar();"><label></label><br>
                      <input type="number" id="txt_campo_4" value="0" class="monto" onkeyup="sumar();"><label></label><br>
                      <input type="number" id="txt_campo_5" value="0" class="monto" onkeyup="sumar();"><label></label><br>
                      <input type="number" id="txt_campo_6" value="0" class="monto" onkeyup="sumar();"><label></label><br>
                      <span>Dientes afecatos</span><br>
                      <input type="text" id="txt_campo_7" value="0" onkeyup="sumar();" />
                      <span>Total Placa: </span><span name="total_placa" id="total_placa"></span>
                      <input id = "total_placa1" value="0" type="text" name="total_placa1" >
                    </td>

                    <td width="25%" colspan="0">
                    <h7><br><br>CÁLCULO</h7>
                      <input type="number" id="txt_campo_8" value="0" class="montocal" onkeyup="sumarcal();"><label></label><br>
                      <input type="number" id="txt_campo_9" value="0" class="montocal" onkeyup="sumarcal();"><label></label><br>
                      <input type="number" id="txt_campo_10" value="0" class="montocal" onkeyup="sumarcal();"><label></label><br>
                      <input type="number" id="txt_campo_11" value="0" class="montocal" onkeyup="sumarcal();"><label></label><br>
                      <input type="number" id="txt_campo_12" value="0" class="montocal" onkeyup="sumarcal();"><label></label><br>
                      <input type="number" id="txt_campo_13" value="0" class="montocal" onkeyup="sumarcal();"><label></label><br>
                      <span>Dientes afecatos</span><br>
                      <input type="text" id="txt_campo_14" value="0" onkeyup="sumarcal();" />
                      <span>Total CÁLCULO: </span> <span id="spTotalcal"></span>
                      <input id = "total_calculo" value="0" type="text" name="total_calculo" >
                    </td>

                    <td width="25%" colspan="0">
                    <h7><br><br>GINGIVITIS</h7>
                      <input type="number" id="txt_campo_15" value="0" class="montogin" onkeyup="sumargin();"><label></label><br>
                      <input type="number" id="txt_campo_16" value="0" class="montogin" onkeyup="sumargin();"><label></label><br>
                      <input type="number" id="txt_campo_17" value="0" class="montogin" onkeyup="sumargin();"><label></label><br>
                      <input type="number" id="txt_campo_18" value="0" class="montogin" onkeyup="sumargin();"><label></label><br>
                      <input type="number" id="txt_campo_19" value="0" class="montogin" onkeyup="sumargin();"><label></label><br>
                      <input type="number" id="txt_campo_20" value="0" class="montogin" onkeyup="sumargin();"><label></label><br>
                      <span>Dientes afecatos</span><br>
                      <input type="text" id="txt_campo_21" value="0" onkeyup="sumargin();" />
                      <span>Total GINGIVITIS: </span> <span id="spTotalgin"></span>
                      <input id = "total_gingivitis" value="0" type="text" name="total_gingivitis">
                    </td>

                </tr>

        </tr>
            </tbody>
          </table>


          </div>



          

      <table width="400"  align="center" cellspacing="12px">

       <tr>
         <td height="23" colspan="2"><div align="center"><br><br>
         &nbsp; &nbsp; &nbsp; &nbsp;
          <br>
           <input type="submit" class="btn btn-success btn-lg" name="SUBMIT" id="SUBMIT" value="GUARDAR">
             &nbsp; &nbsp; &nbsp; 
           <input type="reset" class="btn btn-success btn-lg" name="RESET" id="RESET" value="BORRAR">
         </div></td>
         </tr>
     </table>

   </form>


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

  <script type="text/javascript">
  

    $(document).ready(function () {
      $(".btn1").click(function(event){

          $("#hidGGid").val(event.target.id);

        });

        $("#btnTreat").click(function(event){
          var IdTargetgg = "#hid_"+ $("#hidGGid").val();
            var ggAction = $("#optionatas option:Selected").val();
            $(IdTargetgg).val(ggAction);
            $("#"+$("#hidGGid").val()).attr("src","img/"+ggAction+".png")
            
          });
      /* $(".cek").change(function(){
        
        var val = [];
        $(".cek").each(function () {
          if($(this).is(":checked")) {
            val.push($(this).val());
            $(".display").html(val);
          }else{
            $(".display").html(" ");
          }
        });
        
      });

      
      $('.btn1').on("click", function(){

        var data = $(this).data("id") 
        var clas = $(this).hasClass("btn-success");
        var jsonTeeth = "[teeth: {}]"
        if(clas == true)
        {
          $(this).removeClass( "btn-success" );
          if($(this).attr("src") == 'img/gg2.png')
          {
             $(this).attr("src","img/gg2_active.png");
          }else
          {
             $(this).attr("src","img/gg1_active.png");
          }
            alert(data+" Selected");

        }else{
          $(this).addClass("btn-success");
          if($(this).attr("src") == 'img/gg2_active.png'){
                       $(this).attr("src","img/gg2.png");
                    }else{
                       $(this).attr("src","img/gg1.png");
                    }
        }
        
      });
    */
    }); 

  </script>

