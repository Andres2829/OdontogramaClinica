<?php

  session_start();
  $user = $_SESSION['DentUser'] ;

  include ("connect.php") ;
  if(isset($_POST['submit']))
  {
    //check connection
    if ($conn->connect_error)
    {
      die("Connection failed: " . $conn->connect_error);
    }

    $name = $_POST['name'] ;
    $icnew = $_POST['new_ic'] ;
    $oldic = $_POST['old_ic'] ;
    $status = $_POST['status'] ;
    $tempatbertugas = $_POST['tempatbertugas'] ;
    $gelaran = $_POST['gelaran'] ;
    $jantina = $_POST['jantina'] ;
    $agama = $_POST['agama'] ;
    $keturunan = $_POST['keturunan'] ;
    $umur = $_POST['umur'] ;
    $dob = $_POST['dob'] ;
    $pob = $_POST['pob'] ;
    $nationality = $_POST['nationality'] ;
    $marrital = $_POST['marrital'] ;
    $alamat_kediaman= $_POST['alamat_kediaman'] ;
    $poskod = $_POST['poskod'] ;
    $bandar = $_POST['bandar'] ;
    $negeri = $_POST['negeri'] ;
    $negara = $_POST['negara'] ;
    $tel_rumah = $_POST['tel_rumah'] ;
    $tel_bimbit = $_POST['tel_bimbit'] ;
    $tel_pejabat = $_POST['tel_pejabat'] ;
    $email = $_POST['email'] ;

    // //prepare and bind
    // $stmt = $conn->prepare("INSERT INTO profile(name,new_ic,old_ic,status,tempatbertugas,gelaran,jantina,agama,keturunan,umur,dob,pob,nationality,marrital,alamat_kediaman,poskod,bandar,negeri,negara,tel_rumah,tel_bimbit,tel_pejabat,email) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)") ;
    // $stmt->bind_param("sssssssssisssssisssiiis", $name, $icnew, $oldic, $status, $tempatbertugas, $gelaran, $jantina, $agama, $keturunan, $umur, $dob, $pob, $nationality, $marrital, $alamat_kediaman, $poskod, $bandar, $negeri, $negara, $tel_rumah, $tel_bimbit, $tel_pejabat, $email) ;

    // $stmt->execute() ;

    // echo "<script>alert('The data successfully inserted')";
    // echo "window.location.href = 'profile.php';</script>";

    // $stmt->close() ;
    // $conn->close() ;

    $query = "INSERT INTO profile(name,new_ic,old_ic,status,tempatbertugas,gelaran,jantina,agama,keturunan,umur,dob,pob,nationality,marrital,alamat_kediaman,poskod,bandar,negeri,negara,tel_rumah,tel_bimbit,tel_pejabat,email) VALUES('$name','$icnew','$oldic','$status','$tempatbertugas','$gelaran','$jantina','$agama','$keturunan','$umur','$dob','$pob','$nationality','$marrital','$alamat_kediaman','$poskod','$bandar','$negeri','$negara','$tel_rumah','$tel_bimbit','$tel_pejabat','$email')";
    mysqli_query($conn,$query) ;

     echo "<html><script>alert('The data successfully inserted');";
echo "window.location.href = 'profile.php';
</script></html>";


  }
?>