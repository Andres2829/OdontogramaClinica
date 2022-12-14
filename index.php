<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <style>
        html, body {
            margin: 0;
            padding: 0;
            min-height: 100vh; 
        }
        .main {
            background-image: url("img/a.jpg"); ;
            background-position: bottom;
            overflow: hidden;
            height: auto;
        }
        .footer {
            height: auto;
            background-color: #ccc;
        }
        
        .main .title {
            border: 1px solid #fff;
            width: 300px;
            height: 50px;
            text-align: center;
            color: #fff;
            top: calc(80vh - 45%);
            left: 50%;
            position: absolute;
            margin-left: -150px;
        }
    </style>

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


  <body class="main">

<?php
  
  if(isset($_REQUEST['error']))
  {
    echo "<script>alert('You enter wrong details')
        
    </script>";

  }

?>
  

<br><br>

    <!-- Login Section -->
    <section id="loginPart">
      <div class="container">
        <h2 class="text-center">Inicio</h2>
        <hr class="star-primary">
        <div class="row">
          <div class="col-lg-8 mx-auto">

            <form name="loginform" id="loginForm" method="post" action="loginprocess.php">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Usuario</label>
                  <input class="form-control" id="username" name="username" type="text" placeholder="Usuario" required data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Contraseña</label>
                  <input class="form-control" id="password" name="password" type="password" placeholder="Contraseña" required data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg" id="login" name="login">Ingresar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>



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
