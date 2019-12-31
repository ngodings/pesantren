<?php
include 'conn.php';
        //require_once("conn.php");
        if(isset($_POST['kirim'])) {
            $kode = $_POST['kode'];
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $pesan = $_POST['message'];

            $tambah_data = "INSERT INTO db_tbl_pesan VALUES ('$kode','M3118076', '$nama', '$email', '$pesan')";
            $cek_tambah = mysqli_query($koneksi,$tambah_data);

            $cek_data = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM db_tbl_pesan WHERE email='$email'"));
            if($cek_data > 0){
                  echo '<script language="javascript">
                  alert ("Berhasil");
                  window.location="pesan.php";
                  </script>';
            //header("Location: index.php");
            }else{
                  echo '<script language="javascript">
                  alert ("Ulangi");
                  window.location="pesan.php";
                  </script>';

            }
           



        }
?>