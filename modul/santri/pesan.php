<?php
// mengaktifkan session php
session_start();
if(!isset($_SESSION['email'])) {
   header('location:index.php'); 
} else { 
   $email = $_SESSION['email']; 
   //$password = $_SESSION['password']; 

}


?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DASHBOARD SANTRI</title>

  <!-- Custom fonts for this template-->
  <link href="../template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../template/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../template/css/sb-admin.css" rel="stylesheet">

</head>

<body>
<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="dashboard.php">DASHBOARD SANTRI</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto mr-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
         <form method="POST" action="logout.php">
          <a class="dropdown-item" href="logout.php" type="submit">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

<div id="wrapper">

<!-- Sidebar -->
<ul class="sidebar navbar-nav">
  <li class="nav-item active">
    <a class="nav-link" href="dashboard.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li class="nav-item">
        <a class="nav-link" href="hafalan.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Hafalan</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="softskill.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Softskill</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pesan.php">
          <i class="fas fa-fw fa-mail-bulk"></i>
          <span>Pesan</span></a>
      </li>
</ul>
  <div class="container-fluid">
    <div class="card-body">
        <?php

        include 'conn.php';
        $cek_dulu = "SELECT * FROM db_tbl_pesan ORDER BY id_pesan DESC LIMIT 0,1";
        $mydata = mysqli_query($koneksi, $cek_dulu);
        $row= mysqli_fetch_array($mydata);
        // ID OTOMATIS//***************************************************
        $awal=substr($row['id_pesan'],3,4)+1;
        if($awal<10){
          $auto='PSN0000'.$awal;
        }elseif($awal > 9 && $awal <=99){
          $auto='PSN000'.$awal;
        }else{
          $auto='PSN00'.$awal;
        }
        
        ?>
        <form method="POST" action="kirim_pesan.php">
          <div class="form-group">
                <div class="form-label-group">
                <input type="text" name="kode" id="kode" value="<?php echo $auto ;?>" readonly>
                  <label for="kode">ID</label>
                </div>
          </div>
          <div class="form-group">
                <div class="form-label-group">
                  <input type="text" name="name" id="name" class="form-control" placeholder="name" required="required">
                  <label for="name">Your Name</label>
                </div>
          </div>
          <div class="form-group">
                <div class="form-label-group">
                  <input type="email" name="email" id="email" class="form-control" placeholder="email" required="required">
                  <label for="email">Your Email</label>
                </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
                  <textarea class="form-control" id="message"  name="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
            </div>
        </div>
          <input type="submit" name="kirim" class="btn btn-primary btn-block" ></input>
        </form>
      </div>
    </div>
</div>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
<script src="../template/vendor/jquery/jquery.min.js"></script>
  <script src="../template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../template/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="../template/vendor/chart.js/Chart.min.js"></script>
  <script src="../template/vendor/datatables/jquery.dataTables.js"></script>
  <script src="../template/vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../template/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="../template/js/demo/datatables-demo.js"></script>
  <script src="../template/js/demo/chart-area-demo.js"></script>

</body>
</html>
