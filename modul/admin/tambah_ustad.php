<?php

        include 'conn.php';

        if(isset($_POST['input'])) {
            

            $nip = $_POST['nip'];

            $cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM db_tbl_ustad WHERE nip='$nip'"));
        if ($cek > 0) {
        echo '<script language="javascript">
            alert ("NIP sudah terdaftar");
            window.location="dashboard.php";
            </script>';
          
            exit();
        }else{
          
            $id = $_POST['id'];
            $nip = $_POST['nip'];
            $nama = $_POST['namaUstad'];
            $email = $_POST['emailUstad'];
            $password = $_POST['passwordUstad'];
           

            $tambah_data = "INSERT INTO db_tbl_ustad VALUES ('$id','$nama', '$nip', '$password', '$email')";
            
            $cek_tambah = mysqli_query($koneksi,$tambah_data);

            $cek_data = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM db_tbl_ustad WHERE email='$email'"));
            if($cek_data > 0){
                  echo '<script language="javascript">
                  alert ("Berhasil");
                  window.location="dashboard.php";
                  </script>';
            
            }else{
                  echo '<script language="javascript">
                  alert ("Ulangi");
                  window.location="dashboard.php";
                  </script>';

            }
           
            
        }
      }
       
      ?>