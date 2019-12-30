<?php

        include 'conn.php';

        session_start();
        
        $kode=$_POST['kode'];
        $pelaksanaan=$_POST['pelaksanaan'];
        $santri=$_POST['id_santri'];
        $pidato=$_POST['pidato'];
        $imam=$_POST['imam'];
        $ustad = $_SESSION['email'];
        $cek = "SELECT id_ustad FROM db_tbl_ustad WHERE email='$ustad'";
        $query = mysqli_query($koneksi,$cek);
        $rows= mysqli_fetch_array($query);
        $row1=$rows['id_ustad'];

        if (isset($_POST['input'])){
            $query="INSERT INTO db_tbl_softskill VALUES ('$kode', '$pelaksanaan', '$santri', '$row1', '$pidato', '$imam')";
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