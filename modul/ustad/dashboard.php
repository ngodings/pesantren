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

  <title>WELCOME USTAD</title>

  <!-- Custom fonts for this template-->
  <link href="../template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../template/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../template/css/sb-admin.css" rel="stylesheet">

</head>

<body>
<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="dashboard.php">DASHBOARD USTAD</a>

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
    <a class="nav-link" href="dashboadr.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li class="nav-item">
        <a class="nav-link" href="profile.php">
          <i class="fas fa-fw fa-mask"></i>
          <span>Profile</span></a>
      </li>
</ul>



<div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="dashboard.php">Penilaian Hafalan</a>
          </li>
          <li class="breadcrumb-item active">Tambahkan untuk penilaian setiap santri!</li>
        </ol>

        <div class="card-body">
        <?php

        include 'conn.php';
        $cek = "SELECT * FROM db_tbl_hafalan ORDER BY id_hafalan DESC LIMIT 0,1";
        $data = mysqli_query($koneksi, $cek);
        $rows= mysqli_fetch_array($data);
        // ID OTOMATIS//***************************************************
        $kodeawal=substr($rows['id_hafalan'],3,4)+1;
        if($kodeawal<10){
          $kode='HA0000'.$kodeawal;
        }elseif($kodeawal > 9 && $kodeawal <=99){
          $kode='HA000'.$kodeawal;
        }else{
          $kode='HA00'.$kodeawal;
        }
        
        ?>
      <form method="POST" action="hafalan.php">
      <div class="form-group">
            <div class="form-label-group">
            <input type="text" name="id" id="id" value="<?php echo $kode ;?>" readonly>
              <label>ID</label>
            </div>
          </div> 
        <div class="form-group">
            <div class="form-label-group">
              <input type="date" name="tanggalHafalan" id="tanggalHafalan" class="form-control" placeholder="Full name" required="required">
              <label for="tanggalHafalan">Date</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
                <input type="text" name="surah" id="surah" class="form-control" placeholder="Surah" required="required">
                <label for="surah">Surah</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
                <input type="number" name="juz" id="juz" class="form-control" placeholder="Juz" required="required">
                <label for="juz">Juz</label>
            </div>
            </div>
          <div class="form-group">
            <div class="form-label-group">
                <input type="number" name="pencapaian" id="pencapaian" class="form-control" placeholder="Pencapaian" required="required">
                <label for="pencapaian">Pencapaian</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" name="idSantri" id="idSantri" class="form-control" placeholder="ID Santri" required="required">
              <label for="idSantri">ID Santri</label>
            </div>
          </div>


          <input type="submit" name="submit" class="btn btn-primary btn-block" ></input>
        </form>
      </div>
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="dashboard.php">Penilaian Softskill</a>
          </li>
          <li class="breadcrumb-item active">Tambahkan untuk penilaian setiap santri!</li>
        </ol>

        <div class="card-body">
        <?php

        include 'conn.php';
        $cek_dulu = "SELECT * FROM db_tbl_softskill ORDER BY id_softskill DESC LIMIT 0,1";
        $mydata = mysqli_query($koneksi, $cek_dulu);
        $row= mysqli_fetch_array($mydata);
        // ID OTOMATIS//***************************************************
        $awal=substr($row['id_softskill'],3,4)+1;
        if($awal<10){
          $auto='SK0000'.$awal;
        }elseif($awal > 9 && $awal <=99){
          $auto='SK000'.$awal;
        }else{
          $auto='SK00'.$awal;
        }
        
        ?>
        <form method="POST" action="softskill.php">
          <div class="form-group">
                <div class="form-label-group">
                <input type="text" name="kode" id="id" value="<?php echo $auto ;?>" readonly>
                  <label for="kode">ID</label>
                </div>
          </div>
          <div class="form-group">
                <div class="form-label-group">
                  <input type="date" name="pelaksanaan" id="pelaksanaan" class="form-control" placeholder="Tanggal Pelaksanaan" required="required">
                  <label for="pelaksanaan">Tanggal Pelaksanaan</label>
                </div>
          </div>
          <div class="form-group">
                <div class="form-label-group">
                  <input type="text" name="id_santri" id="id_santri" class="form-control" placeholder="ID Santri" required="required">
                  <label for="id_santri">ID Santri</label>
                </div>
          </div>
          <div class="form-group">
                <div class="form-label-group">
                  <input type="number" name="pidato" id="pidato" class="form-control" placeholder="pidato" required="required">
                  <label for="pidato">Pidato</label>
                </div>
          </div>
          <div class="form-group">
                <div class="form-label-group">
                  <input type="number" name="imam" id="imam" class="form-control" placeholder="imam" required="required">
                  <label for="imam">Imam</label>
                </div>
          </div>


          <input type="submit" name="input" class="btn btn-primary btn-block" ></input>
        </form>
      </div>

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="dashboard.php">Penilaian Softskill</a>
          </li>
          <li class="breadcrumb-item active">Tambahkan untuk penilaian setiap santri!</li>
        </ol>

      <div class="card-body">
        <?php

        include 'conn.php';
        $cek2 = "SELECT * FROM db_tbl_pelanggaran ORDER BY id_pelanggaran DESC LIMIT 0,1";
        $mydata2 = mysqli_query($koneksi, $cek2);
        $row2= mysqli_fetch_array($mydata2);
        // ID OTOMATIS//***************************************************
        $awal2=substr($row2['id_pelanggaran'],3,4)+1;
        if($awal2<10){
          $auto2='PG0000'.$awal2;
        }elseif($awal2 > 9 && $awal2 <=99){
          $auto2='PG000'.$awal2;
        }else{
          $auto2='PG00'.$awal2;
        }
        
        ?>
        <form method="POST" action="pelanggaran.php">
          <div class="form-group">
                <div class="form-label-group">
                <input type="text" name="code" id="code" value="<?php echo $auto2 ;?>" readonly>
                  <label for="code">ID</label>
                </div>
          </div>
          <div class="form-group">
                <div class="form-label-group">
                  <input type="date" name="tanggal" id="tanggal" class="form-control" placeholder="Tanggal Pelaksanaan" required="required">
                  <label for="tanggal">Tanggal Pelaksanaan</label>
                </div>
          </div>
          <div class="form-group">
                <div class="form-label-group">
                  <input type="text" name="santri" id="santri" class="form-control" placeholder="ID Santri" required="required">
                  <label for="santri">ID Santri</label>
                </div>
          </div>
          <div class="form-group">
                <div class="form-label-group">
                  <input type="text" name="pelanggaran" id="pelanggaran" class="form-control" placeholder="Pelanggaran" required="required">
                  <label for="pelanggaran">Pelanggaran</label>
                </div>
          </div>
          <div class="form-group">
                <div class="form-label-group">
                  <input type="text" name="keterangan" id="keterangan" class="form-control" placeholder="keterangan" required="required">
                  <label for="keterangan">Keterangan</label>
                </div>
          </div>


          <input type="submit" name="send" class="btn btn-primary btn-block" ></input>
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
