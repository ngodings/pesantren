<?php
// mengaktifkan session php
session_start();
if(!isset($_SESSION['email'])) {
   header('location:index.php'); 
} else { 
   $email = $_SESSION['email']; 
   

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

  <title>DASHBOARD ADMIN</title>

  <!-- Custom fonts for this template-->
  <link href="../template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../template/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../template/css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">


<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="dashboard.php">DASHBOARD ADMIN</a>


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
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
    </ul>
    <br>
    <div class="container-fluid">
          <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="dashboard.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Tambah data ustad</li>
        </ol>
     
          <div class="card-body">
          <form method="POST" action="input_ustad.php">
                <div class="form-group">
                  <div class="form-label-group">
                    <input type="text" name="id" id="id" class="form-control" placeholder="Full name" required="required">
                    <label for="id">ID Ustad</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-label-group">
                    <input type="text" name="namaUstad" id="namaUstad" class="form-control" placeholder="Full name" required="required">
                    <label for="namaUstad">Full name</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-label-group">
                    <input type="text" name="nip" id="nip" class="form-control" placeholder="Full name" required="required">
                    <label for="nip">NIP</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-label-group">
                    <input type="email" name="emailUstad" id="emailUstad" class="form-control" placeholder="Email address" required="required">
                    <label for="emailUstad">Email address</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-label-group">
                      <input type="password" name="passwordUstad" id="passwordUstad" class="form-control" placeholder="Password" required="required">
                      <label for="passwordUstad">Password</label>
                  </div>
                </div>

                <input type="submit" name="inputUstad" class="btn btn-primary btn-block"></input>
              </form> 
          </div>
        

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="dashboard.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Tambah data santri</li>
        </ol>

        <div class="card-body">
        <form method="POST" action="input_santri.php">
      <div class="form-group">
            <div class="form-label-group">
              <input type="text" name="idSantri" id="idSantri" class="form-control" placeholder="ID" required="required">
              <label for="idSantri">ID</label>
            </div>
          </div>
        <div class="form-group">
            <div class="form-label-group">
              <input type="text" name="nama" id="nama" class="form-control" placeholder="Full name" required="required">
              <label for="nama">Full name</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
                <input type="text" name="kelas" id="kelas" class="form-control" placeholder="Class" required="required">
                <label for="kelas">Class</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
                <input type="text" name="asal" id="asal" class="form-control" placeholder="Address" required="required">
                <label for="asal">Address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required="required">
              <label for="email">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="required">
                <label for="password">Password</label>
            </div>
          </div>

          <input type="submit" name="submit" class="btn btn-primary btn-block" ></input>
        </form>
  
          </div>

                  <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="dashboard.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Hapus Akun</li>
        </ol>

        <div class="card-body">
        <form method="POST" action="hapus_akun.php">
          <div class="form-group">
                <div class="form-label-group">
                  <input type="email" name="emailAkun" id="emailAkun" class="form-control" placeholder="email" required="required">
                  <label for="emailAkun">email</label>
                </div>
              </div>
          <div class="form-group">
            <select class="form-control" name="jenisAkun" required="required">
              <option disabled selected value> -- Choose One --</option>
              <option value="Ustad">Ustad</option>
              <option value="Santri">Santri</option>
            </select>
          </div>

          <input type="submit" name="hapusAkun" class="btn btn-primary btn-block" ></input>
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
