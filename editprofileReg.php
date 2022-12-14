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
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Staff Management System</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="profilereg.php">Staff Management System</a>
    <!-- <a class="navbar-brand" href="profile.php">Start Bootstrap</a> -->
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Profile">
          <a class="nav-link" href="profilereg.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Profile</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="appointmentListReg.php">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Sistema Dental Patronato Tulcán</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="applycuti.php">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Tables</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <div class="row">
        <div class="col-12">
          <h1>Profile</h1>
          <form id="form" name="form" method="post" action="editprofileprocess.php">

          <ol class="breadcrumb">
            <b style="color: #280e11; font-family: Verdana">Pamer Maklumat Personal</b>
          </ol>

          <img src="" align="left">
       <tr>
         <td height="24"><br>
           Nama Staff :</td>
         <td height="24"><input required type="text" name="name"></td>
        </tr>
        <tr>
         <td height="24"><br>
           No KP Baru :</td>
         <td height="24"><input required type="text" name="new_ic"></td>
        </tr>
        <tr>
         <td height="24"><br>
           No KP Lama :</td>
         <td height="24"><input required type="text" name="old_ic"></td>
        </tr>

      <ol class="breadcrumb">
          <b style="color: #280e11; font-family: Verdana">Status Perkhidmatan</b>
      </ol>

       <tr>
         <td height="24"><br>
          Status Perkhidmatan: </td>
         <td height="24"><input required type="text" name="status"></td>
        </tr>

         <tr>
         <td height="24"><br>
           Tempat Bertugas :</td>
         <td height="24"><input required type="text" name="tempatbertugas"></td>
        </tr>
        <ol class="breadcrumb">
          <b style="color: #280e11; font-family: Verdana">Butiran Personal</b>
      </ol>
 <table width="380"  align="left" cellspacing="12px">
       <tr>
         <th colspan="2" scope="col"></th>
       </tr>

       <tr>
         <td height="24"><br>
           Gelaran :</td>
         <td height="24"><input required type="text" name="gelaran"></td>
        </tr>

         <tr>
         <td height="24"><br>
          Jantina :</td>
        <td height="24"><input type="radio" name="jantina" value="lelaki"> Lelaki<br><input type="radio" name="jantina" value="perempuan"> Perempuan<br></td>
        </tr>

         <tr>
         <td height="24"><br>
           Agama :</td>
         <td height="24"><input required type="text" name="agama"></td>
         </tr>

         <tr>
         <td height="24"><br>
           Keturunan :</td>
         <td height="24"><br><input required type="text" name="keturunan"></td>
         </tr>

         <tr>
         <td height="24"><br>
          Umur :</td>
         <td height="24"><input required type="text" name="umur"></td>
         </tr>

         <tr>
         <td height="24"><br>
          Tarikh Lahir :</td>
         <td height="24"><input required type="date" name="dob"></td>
         </tr>

         <tr>
         <td height="24"><br>
           Tempat Kelahiran :</td>
         <td height="24"><input required type="text" name="pob"></td>
         </tr>

         <tr>
         <td height="24"><br>
           Kewarganegaraan :</td>
         <td height="24"><input required type="text" name="nationality"></td>
         </tr>
         <tr>
         <td height="24"><br>
           Status Berkahwin :</td>
         <td height="24"><input required type="text" name="marrital"></td>
         </tr>

         <tr>
         <td height="24"><br>
           Alamat Kediaman :</td>
         <td height="24"><input required type="text" name="alamat_kediaman"></td>
         </tr>

         <tr>
         <td height="24"><br>
           Poskod :</td>
         <td height="24"><input required type="text" name="poskod"></td>
         </tr>

         <tr>
         <td height="24"><br>
           Bandar :</td>
         <td height="24"><input required type="text" name="bandar"></td>
         </tr>

         <tr>
         <td height="24"><br>
           Negeri :</td>
         <td height="24"><input required type="text" name="negeri"></td>
         </tr>

         <tr>
         <td height="24"><br>
           Negara :</td>
         <td height="24"><input required type="text" name="negara"></td>
         </tr>

         <tr>
         <td height="24"><br>
           Telefon Rumah :</td>
         <td height="24"><input required type="number" name="tel_rumah"></td>
         </tr>

         <tr>
         <td height="24"><br>
           Telefon Bimbit :</td>
         <td height="24"><input required type="number" name="tel_bimbit"></td>
         </tr>

         <tr>
         <td height="24"><br>
           Nombor Telefon Pejabat :</td>
         <td height="24"><input required type="number" name="tel_pejabat"></td>
         </tr>

         <tr>
         <td height="24"><br>
           Email Aktif :</td>
         <td height="24"><input required type="email" name="email"></td>
         </tr>


         <tr>
         <td height="24"><br>
          </td>
         <td height="24"><br></td>
         </tr>

         <tr>
        <td height="23" colspan="2"><div align="center"><br>
        &nbsp; &nbsp; &nbsp; &nbsp;

          <input type="submit" name="submit" id="submit" value="SUBMIT">
           &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
          <input type="reset" name="reset" id="reset" value="RESET">

        </td>
        </tr>

  </table>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
  </div>
</body>

</html>
