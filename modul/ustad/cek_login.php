<?php
         // mengaktifkan session php
         session_start();
        
         // menghubungkan dengan koneksi
         include 'conn.php';
 
         $email = $_POST['email'];
         $password = $_POST['password'];
         $sql="SELECT * FROM db_tbl_ustad WHERE email='$email'";
         $query=mysqli_query($koneksi,$sql);
         $hasil= $query->fetch_assoc();
         
             if($query->num_rows == 0){
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
                 header("location:dashboard.php");
                 }
             }
	
?>