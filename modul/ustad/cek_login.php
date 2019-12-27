<?php
        // mengaktifkan session php
        session_start();
        
        // menghubungkan dengan koneksi
        include 'conn.php';

        $email = $_POST['email'];
        $tdkemail = $_POST['tdkemail'];
        $password = $_POST['password'];
		$sql="SELECT * FROM db_tbl_ustad WHERE email='$email'";
		$query=mysqli_query($koneksi,$sql);
		$hasil= $query->fetch_assoc();
        
			if($query->num_rows == 0){
				$_SESSION['tdkemail']=$hasil['tdkemail'];
                header("location:tdkemail.php");
			}else {
                if ($password != $hasil['password']){
                    print "password yang anda masukkan salah";
                }else {
                $_SESSION['email']=$hasil['email'];
                header("location:dashboard.php");
                }
			}
	
?>