<?php
        include 'conn.php';
        //require_once("conn.php");
        // if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $cek = "SELECT * FROM db_tbl_santri WHERE email = '$email' ";
        $cek_user= mysqli_query($koneksi, $cek);
        $user = mysqli_fetch_array($cek_user);
        //echo $user['email'];
        $emailSantri = $user['email'];
        if ($email == $emailSantri) {
            echo '<script language="javascript">
                  alert ("Email Sudah Ada Yang Menggunakan");
                  window.location="index.php";
                  </script>';
            //echo $user['email'];
                  exit();
        }else{
            if(isset($_POST['submit'])) {
            $id = $_POST['id_santri'];
            $nama = $_POST['nama'];
            $kelas = $_POST['kelas'];
            $asal = $_POST['asal'];
            $email = $_POST['email'];
            $password = $_POST['password'];
             // membaca kode barang terbesar
             $query = "SELECT max(id_santri) as maxID FROM db_tbl_santri";
             $hasil = mysqli_query($koneksi, $query);
             $data  = mysqli_fetch_array($hasil);
             $idSantri = $data['maxID'];
 
             $noUrut = (int) substr($idSantri, 5, 4);
 
             $noUrut++;
 
             $char = "SANTR";
             $newID = $char . sprintf("%04s", $noUrut);
 

 
             $regis = "INSERT INTO db_tbl_santri VALUES ('$id', '$nama', '$kelas', '$asal', '$email', '$password')";
             $hasil2 = mysqli_query($koneksi,$regis);
             header("Location: ./index.php");


            }
        }
        
        // if ( isset( $_POST['submit'] ) ) {


           

        // }else{
        //     header("Location: ./registrasi.php");
        // }


  
  ?>