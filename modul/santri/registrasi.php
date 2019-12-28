<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SANTRI</title>

  <!-- Custom fonts for this template-->
  <link href="../template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../template/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../template/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
      <form method="POST" action="cek_regis.php">
      <input type="hidden" name="id_santri" >
        <div class="form-group">
            <div class="form-label-group">
              <input type="text" name="nama" id="nama" class="form-control" placeholder="Full name" required="required">
              <label for="nama">Full name</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
                <input type="text" id="kelas" class="form-control" placeholder="Class" required="required">
                <label for="kelas">Class</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
                <input type="text" id="asal" class="form-control" placeholder="Address" required="required">
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
                <input type="password" id="password" class="form-control" placeholder="Password" required="required">
                <label for="password">Password</label>
            </div>
          </div>

          <input type="submit" class="btn btn-primary btn-block" ></input>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="index.php">Login Page</a>
          <a class="d-block small" href="reset_password.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>



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
