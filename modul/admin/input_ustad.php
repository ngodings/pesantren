<?php
       include "conn.php";
      if(isset($_POST['inputUstad'])){
        $cek = "SELECT * FROM db_tbl_ustad WHERE nip = '$nip' ";
        $cek_nip= mysqli_query($koneksi, $cek);
        $user = mysqli_fetch_array($cek_nip);
        $nipUstad = $user['email'];
        if($nip == $nipUstad){
          echo '<script language="javascript">
          alert ("NIP Sudah Ada Yang Menggunakan");
          window.location="dashboard.php";
          </script>';
          exit();


        }

      }
      ?>