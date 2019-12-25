<?php
        // mengaktifkan session php
        session_start();
        
        // menghubungkan dengan koneksi
        include 'conn.php';
        


        if(isset($_POST['submit'])){
            // menangkap data yang dikirim dari form
            $email = $_POST['email'];
            $password = $_POST['password'];
			$sql="SELECT * FROM db_tbl_santri WHERE email='$email'";
			$query=mysqli_query($koneksi,$sql);
			$row=mysqli_fetch_array($query);
			if($email != $row['email']){
				print "username yang anda masukkan 
				tidak terdaftar";
			}else if($password != $row['password']){
				print "password yang anda masukkan salah";
			}else{
				$_SESSION['username']=$username;
				header("location:modul/santri/dashboard.php");
			}
	}
?>