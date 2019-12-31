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
      <!-- <li class="nav-item active">
        <a class="nav-link" href="santri.php">
          <i class="fas fa-fw fa-folder"></i>
          <span>Santri</span>
        </a>
      </li> -->
    </ul>
    <br>
    <div class="container-fluid">

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
                $sqlnya = "SELECT * FROM db_tbl_hafalan";
                $queryi = mysqli_query($koneksi,$sqlnya);
                $result = mysqli_num_rows($queryi);
                ?>
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5"><?php echo "Terdapat $result riwayat hafalan seluruh pesantren!";?></div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <?php
                include "conn.php";
                $sql1 = "SELECT * FROM db_tbl_softskill";
                $query1 = mysqli_query($koneksi,$sql1);
                $result1 = mysqli_num_rows($query1);
                ?>
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5"><?php echo "Terdapat $result1 riwayat softskill seluruh pesantren!";?></div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <?php
                include "conn.php";
                $sql2 = "SELECT * FROM db_tbl_santri";
                $query2 = mysqli_query($koneksi,$sql2);
                $result2 = mysqli_num_rows($query2);
                ?>
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5"><?php echo "Terdapat $result2 santri di seluruh pesantren!";?></div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <?php
                include "conn.php";
                $sql3 = "SELECT * FROM db_tbl_ustad";
                $query3 = mysqli_query($koneksi,$sql3);
                $result3 = mysqli_num_rows($query3);
                ?>
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5"><?php echo "Terdapat $result3 ustad di seluruh pesantren!";?></div>
              </div>
            </div>
          </div>

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="dashboard.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Tambah data santri</li>
        </ol>

        <div class="card-body">
        <form method="POST" action="tambah_santri.php">
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

          <input type="submit" name="tambahSantri" class="btn btn-primary btn-block" ></input>
        </form>
  
          </div>

              <!-- Breadcrumbs-->
      <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="dashboard.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Tambah data ustad</li>
      </ol>    
          <div class="card-body">
          <?php

          include 'conn.php';
          $cek_dulu = "SELECT * FROM db_tbl_ustad ORDER BY id_ustad DESC LIMIT 0,1";
          $mydata = mysqli_query($koneksi, $cek_dulu);
          $row= mysqli_fetch_array($mydata);
          // ID OTOMATIS//***************************************************
          $awal=substr($row['id_ustad'],3,4)+1;
          if($awal<10){
            $auto='UST000'.$awal;
          }elseif($awal > 9 && $awal <=99){
            $auto='UST00'.$awal;
          }else{
            $auto='UST0'.$awal;
          }
          
          ?>
              <form method="POST" action="tambah_ustad.php">
                <div class="form-group">
                  <div class="form-label-group">
                    <input type="text" name="id" id="id" value="<?php echo $auto ;?>" readonly>
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

                <input type="submit" name="input" class="btn btn-primary btn-block"></input>
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

      <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="dashboard.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Ganti Password</li>
        </ol>

        <div class="card-body">
        <form method="POST" action="password.php">
          <div class="form-group">
                <div class="form-label-group">
                  <input type="email" name="emailnya" id="emailnya" class="form-control" placeholder="email" required="required">
                  <label for="emailnya">Email</label>
                </div>
          </div>
          <div class="form-group">
            <select class="form-control" name="jenis_akun" required="required">
              <option disabled selected value> -- Choose One --</option>
              <option value="Ustad">Ustad</option>
              <option value="Santri">Santri</option>
            </select>
          </div>
          <div class="form-group">
                <div class="form-label-group">
                  <input type="password" name="pass_baru" id="pass_baru" class="form-control" placeholder="email" required="required">
                  <label for="pass_baru">New Password</label>
                </div>
          </div>
          <input type="submit" name="resetPass" class="btn btn-primary btn-block" ></input>
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
