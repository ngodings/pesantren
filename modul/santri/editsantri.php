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
        <a class="nav-link" href="profile.php">
          <i class="fas fa-fw fa-mask"></i>
          <span>Profile</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="hafalan.php">
          <i class="fas fa-fw fa-book"></i>
          <span>Hafalan</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="softskill.php">
          <i class="fas fa-fw fa-medal"></i>
          <span>Softskill</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pelanggaran.php">
          <i class="fas fa-fw fa-mail-bulk"></i>
          <span>Pelanggaran</span></a>
      </li>
</ul>

<div class="container-fluid">

<!-- DataTables -->
<div class="card mb-3">
    <div class="card-header">
        <h5>Profile Santri</h5>
    </div>
    <div class="card-body">
    <form method="POST">
                <?php
                   include 'conn.php';
                    $santri = $_SESSION['email'];
                    $cek = "SELECT id_santri FROM db_tbl_santri WHERE email='$santri'";
		            $query = mysqli_query($koneksi,$cek);
        		    $rows= mysqli_fetch_array($query);
                    $row1=$rows['id_santri']; //mengambil id dari sesi
                    $pilih= "SELECT * FROM db_tbl_santri where email='$santri'";
                    $kueri = mysqli_query($koneksi,$pilih);
                    // $row= mysqli_fetch_array($kueri);
                    // $ustad=$row['id_ustad'];
                    // $cek_ustad = "SELECT nama FROM db_tbl_ustad WHERE id_ustad='$ustad'";
                    // $query_ust = mysqli_query($koneksi,$cek_ustad);
                    // $row2=mysqli_fetch_array($query_ust);
                    while($row = mysqli_fetch_array($kueri)){
                    	if(isset($_GET['id_santri'])){
						$id_santri=$_GET['id_santri'];
							if(isset($_POST['Update'])){
							$nama=$_POST['nama'];
							$kelas=$_POST['kelas'];
							$asal=$_POST['asal'];
							$sql="UPDATE db_tbl_santri SET 
								nama='$nama',
								kelas='$kelas',
								asal='$asal',
		  					WHERE id_santri='$id_santri'";
					mysqli_query($conn,$sql) or die(mysqli_error($conn));
			}
			$sql="SELECT * FROM db_tbl_santri WHERE id_santri='$id_santri'";
		}
            ?>

    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="dashboard.php">Profile Santri</a>
          </li>
          <li class="breadcrumb-item active">Edit data profile santri</li>
        </ol>
     <div class="form-group">
            <div class="form-label-group">
            <input type="text" name="id_santri" id="id_santri" class="form-control" value="<?php print $row['id_santri'];?>" readonly>
              <label>ID Santri</label>
            </div>
          </div> 
        <div class="form-group">
            <div class="form-label-group">
             <input type="text" name="nama" id="nama" class="form-control" placeholder="nama" value="<?php print $row['nama'];?>"required="required">
                <label for="nama">Nama</label>
            </div>
        </div>
          <div class="form-group">
            <div class="form-label-group">
            <input type="text" name="kelas" id="kelas" class="form-control" value="<?php print $row['kelas'];?>"required="required">
                <label for="kelas">Kelas</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
            <input type="text" name="asal" id="asal" class="form-control" value="<?php print $row['asal'];?>"required="required">
                <label for="asal">Asal</label>
            </div>
            </div>
          <div class="form-group">
            <div class="form-label-group">
            <input type="text" name="email" id="email" class="form-control" value="<?php print $row['email'];?>"readonly>
                <label for="email">Email</label>
            </div>
          </div>
         <input type="submit" name="Update" class="btn btn-primary btn-block" ></input>
        </form>
      </div>
	<?php  } ?>

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
</form>
</body>
</html>