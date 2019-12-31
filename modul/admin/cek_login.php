<?php
        // mengaktifkan session php
        session_start();
        
        // menghubungkan dengan koneksi
        include 'conn.php';

        $email = $_POST['email'];
        $password = $_POST['password'];
		$masuk="SELECT * FROM db_tbl_admin WHERE email='$email'";
		$login=mysqli_query($koneksi,$masuk);
		$hasil= $login->fetch_assoc();
        
			if($login->num_rows == 0){
				echo '<script language="javascript">
                  alert ("Akun tidak terdaftar");
                  window.location="index.php";
                  </script>';
			}else {
                if ($password != $hasil['password']){
                    echo '<script language="javascript">
                    alert ("Password salah");
                    window.location="index.php";
                    </script>';
                }else {
                $_SESSION['email']=$hasil['email'];
                header("location: dashboard.php");
                }
			}
	
?>