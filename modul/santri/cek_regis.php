<?php
        include 'conn.php';
        //require_once("conn.php");
        if(isset($_POST['submit'])) {
            

            $email = $_POST['email'];

            $cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM db_tbl_santri WHERE email='$email'"));
            // $email = $_POST['email'];
            // $cek = "SELECT * FROM db_tbl_santri WHERE email = '$email' ";
            // $cek_user= mysqli_query($koneksi, $cek);
            // $user = mysqli_fetch_array($cek_user);
            // //echo $user['email'];
            // $emailSantri = $user['email'];
        if ($cek > 0) {
            echo '<script language="javascript">
                  alert ("Email Sudah Ada Yang Menggunakan");
                  window.location="index.php";
                  </script>';
            //echo $user['email'];
                  exit();
        }else{
          
            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $kelas = $_POST['kelas'];
            $asal = $_POST['asal'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            //membaca kode barang terbesar

            // $query = "SELECT max(id_santri) as maxID FROM db_tbl_santri";
            // $hasil = mysqli_query($koneksi, $query);
            // $data  = mysqli_fetch_array($hasil);
            // $idSantri = $data['maxID'];

            // $noUrut = (int) substr($idSantri, 5, 4);

            // $noUrut++;

            // $char = "SANTR";
            // $newID = $char . sprintf("%04s", $noUrut);

            $tambah_data = "INSERT INTO db_tbl_santri VALUES ('$id','$nama', '$kelas', '$asal', '$email', '$password')";
            //$tambah_data = mysqli_num_rows(mysqli_query($koneksi,$tambah));
            $cek_tambah = mysqli_query($koneksi,$tambah_data);
            echo $email;

            $cek_data = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM db_tbl_santri WHERE email='$email'"));
            if($cek_data > 0){
                  echo '<script language="javascript">
                  alert ("Berhasil");
                  window.location="index.php";
                  </script>';
            //header("Location: index.php");
            }else{
                  echo '<script language="javascript">
                  alert ("Ulangi");
                  window.location="dashboard.php";
                  </script>';

            }
           
            
        }
      }
      
        // if ( isset( $_POST['submit'] ) ) {


           

        // }else{
        //     header("Location: ./registrasi.php");
        // }


  
  ?>