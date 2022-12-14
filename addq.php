<?php
  include ('connect.php');
    
   	date_default_timezone_set("Asia/Kuala_Lumpur");
    $date = date("Y-m-d");
    $pid = $_POST['pid'];
    $time = $_POST['btime'];
    $number = $_POST['qq'];

// $sql = "INSERT INTO queue VALUES ( '' , '$date' , '$time' , '$number' , '$pid') ";
// $result = mysqli_query($conn,$sql) or die ("Error running MySQL query!");

$stmt = $conn->prepare("INSERT INTO queue(queue_date, queue_time, queue_number, id ) VALUES (?,?,?,?)");
    $stmt->bind_param("ssii", $date, $time, $number, $pid);

    $stmt->execute() ;

     echo "<script>alert('Patient has been assigned for queue!');";
     echo "window.location.href = 'appointmentListReg.php';</script>";

    $stmt->close();
    $conn->close();



// echo ("<SCRIPT LANGUAGE='JavaScript'>
//         window.alert('Patient has been assigned for queue!')
//         window.location.href='appointmentListReg.php'
//         </SCRIPT>");

 ?>
