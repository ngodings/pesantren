<?php

        include 'conn.php';

        session_start();
        
        $kode=$_POST['code'];
        $santri=$_POST['santri'];
        $tanggal=$_POST['tanggal'];
        $pelanggaran=$_POST['pelanggaran'];
        $ket=$_POST['keterangan'];
        $ustad = $_SESSION['email'];
        // $cek = "SELECT id_ustad FROM db_tbl_ustad WHERE email='$ustad'";
        // $query = mysqli_query($koneksi,$cek);
        // $rows= mysqli_fetch_array($query);
        // $row1=$rows['id_ustad'];

        if (isset($_POST['send'])){
            $query="INSERT INTO db_tbl_pelanggaran VALUES ('$kode', '$santri', '$tanggal', '$pelanggaran', '$ket')";
            $sql=mysqli_query($koneksi, $query);

            if($sql){
                echo '<script language="javascript">
                alert ("Sukses");
                window.location="dashboard.php";
                </script>';
            }else{
                echo '<script language="javascript">
                alert ("Gagal");
                window.location="dashboard.php";
                </script>';
            }
        }
?>