<!DOCTYPE html>
<html lang="en">

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
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" href="css/monthly.css">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Staff Management System</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Profile">
          <a class="nav-link" href="profileDen.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Profile</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Sistema Dental Patronato Tulcán">
          <a class="nav-link" href="appointmentListDen.php">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Sistema Dental Patronato Tulcán</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Mohon Cuti">
          <a class="nav-link" href="applycutiden.php">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Apply Leave</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Mohon Cuti">
          <a class="nav-link" href="leavehistoryden.php">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Leave History</span>
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
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Leave History</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
          <div class="table-responsive">
          		<div id="form">
                  <div class="content">
                    <h3>Leave History</h3>
                    <section>
                      <table width="100%" class="table table-stripped table-hover table-bordered">
                      <thead>
                         <tr>
                           <th></th>
                           <th width="120">Leave Type</th>
                           <th>From</th>
                           <th>To</th>
                           <th>Description</th>
                           <th width="120">Posting Date</th>
                           <th width="200">Admin Remak</th>
                           <th>Status</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php
                        include ('connect.php');

                        $result = mysqli_query ($conn,"SELECT * FROM tblleaves") or die("Error running MySQL query") ; 

                        while($row = mysqli_fetch_assoc($result))
                        {
                        echo "<tr>";
                        echo "<td>".$row['leave_id']."</td>";
                        echo "<td>".$row['LeaveType']."</td>";
                        echo "<td>".$row['ToDate']."</td>";
                        echo "<td>".$row['FromDate']."</td>";
                        echo "<td>".$row['Description']."</td>";
                        echo "<td>".$row['PostingDate']."</td>";
                        echo "<td>".$row['AdminRemark']."</td>";
                        if ($row['Status'] == 0)
                        {
                          echo "<td>Not Approved</td>";
                        }
                        else
                        {
                          echo "<td>Approved</td>";
                        }
                        
                        echo "<tr>";
                      }
                        ?>

                      </tbody>
                      </table>
                    </section>
                  </div>  
              </div>
        	</div>
        </div>
        <div class="card-footer small text-muted">Leave History</div>
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
            <a class="btn btn-primary" href="login.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/monthly.js"></script>



  

  </div>
</body>

</html>
