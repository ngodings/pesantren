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
    <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="dashboard.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol> 
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <?php
                include "conn.php";
                $santri2 = $_SESSION['email'];
                $cek2 = "SELECT id_santri FROM db_tbl_santri WHERE email='$santri2'";
                $query2 = mysqli_query($koneksi,$cek2);
                $rows2= mysqli_fetch_array($query2);
                $row=$rows2['id_santri'];
                $sqlnya = "SELECT * FROM db_tbl_hafalan WHERE id_santri='$row'";
                $queryi = mysqli_query($koneksi,$sqlnya);
                $result = mysqli_num_rows($queryi);
                ?>
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5"><?php echo "Terdapat $result riwayat hafalanmu!";?></div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="hafalan.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <?php
                include "conn.php";
                $santri = $_SESSION['email'];
                $cek = "SELECT id_santri FROM db_tbl_santri WHERE email='$santri'";
                $query = mysqli_query($koneksi,$cek);
                $rows= mysqli_fetch_array($query);
                $row1=$rows['id_santri'];
                $sql = "SELECT * FROM db_tbl_softskill WHERE id_santri='$row1' ";
                $kueri = mysqli_query($koneksi,$sql);
                $hasil = mysqli_num_rows($kueri);     
                
                ?>
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5"><?php echo "Terdapat $hasil riwayat softskillmu!";?></div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="softskill.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
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
