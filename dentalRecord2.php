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
              <a class="nav-link js-scroll-trigger" href="appointmentListReg">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="listDen.php">Patient List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="report.php">Report Statistic</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="logout.php" onclick="javascript:return confirm('Esta seguro de salir?');">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<br><br>

<section id="appointmentPart">
  <div class="container">
    <h3 class="text-center">Patient Dental Record</h3>
    <hr class="star-primary">
    
<br>

<div align="center">
<form name="borang2" method="post" action="updateDetails.php">

<?php
include ('connect.php');
$id = $_GET['id'];
$result = mysqli_query ($conn,"SELECT * FROM users where id = $id") or die
("Error running MySQL query");
   $row = mysqli_fetch_assoc($result);

?>
</form>

<form id="borang2" name="borang2" method="post" action="">

  <a><img src="img/gigi.PNG" style="width:580px;height:250px;" align="middle"></a>
  <br><br><br>

 <table width="380"  align="center" cellspacing="12px">

       <tr>
         <th colspan="2" scope="col"></th>
       </tr>

      
      <tr>
      <td>Gigi Atas
        <br>
      <select name="gigiatas" id="gigiatas" required="required">
              <option>Select</option>
                      <option value="18">18</option>
                      <option value="17">17</option>
                      <option value="16">16</option>
                      <option value="15">15</option>
                      <option value="14">14</option>
                      <option value="13">13</option>
                      <option value="12">12</option>
                      <option value="11">11</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>

                      <option value="55">55</option>
                      <option value="54">54</option>
                      <option value="53">53</option>
                      <option value="52">52</option>
                      <option value="51">51</option>
                      <option value="61">61</option>
                      <option value="62">62</option>
                      <option value="63">63</option>
                      <option value="64">64</option>
                      <option value="65">65</option>
            </select>
      </td>
      
      
      <td>Gigi Bawah <br>
      <select name="gigibawah" id="gigibawah" required="required">
              <option>Select</option>
                      <option value="48">48</option>
                      <option value="47">47</option>
                      <option value="46">46</option>
                      <option value="45">45</option>
                      <option value="44">44</option>
                      <option value="43">43</option>
                      <option value="42">42</option>
                      <option value="41">41</option>
                      <option value="31">31</option>
                      <option value="32">32</option>
                      <option value="33">33</option>
                      <option value="34">34</option>
                      <option value="35">35</option>
                      <option value="36">36</option>
                      <option value="37">37</option>
                      <option value="38">38</option>

                      <option value="85">55</option>
                      <option value="84">54</option>
                      <option value="83">53</option>
                      <option value="82">52</option>
                      <option value="81">51</option>
                      <option value="71">61</option>
                      <option value="72">62</option>
                      <option value="73">63</option>
                      <option value="74">64</option>
                      <option value="75">65</option>
            </select>
      </td>
      </tr>
      

      <tr>
      <td height="70">
      <select name="optionatas" id="optionatas" required="required">
              <option>Select</option>
                      <option value="perlucabut">Perlu Cabut</option>
                      <option value="telahcabut">Telah Dicabut</option>
                      <option value="takdegigi">Missing</option>
                      <option value="adatampal">Ada Tampalan</option>
                      <option value="tampaldibuat">Tampal Dibuat</option>
                      <option value="untuktampal">Untuk Tampal</option>
                      <option value="tunggul">Tunggul</option>
            </select>
      </td>

      <td height="70">
      <select name="optionbawah" id="optionbawah" required="required">
              <option>Select</option>
                      <option value="perlucabut">Perlu Cabut</option>
                      <option value="telahcabut">Telah Dicabut</option>
                      <option value="takdegigi">Missing</option>
                      <option value="adatampal">Ada Tampalan</option>
                      <option value="tampaldibuat">Tampal Dibuat</option>
                      <option value="untuktampal">Untuk Tampal</option>
                      <option value="tunggul">Tunggul</option>
            </select>
      </td>
    </tr>

       

       <tr>
         <td height="23" colspan="2"><div align="center"><br><br>
         &nbsp; &nbsp; &nbsp; &nbsp;

           <input type="submit" name="SUBMIT" id="SUBMIT" value="SUBMIT">
             &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
           <input type="reset" name="RESET" id="RESET" value="RESET">
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

