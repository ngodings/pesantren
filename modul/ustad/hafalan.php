<?php

        include 'conn.php';

        session_start();
        
        $id=$_POST['id'];
        $tanggal=$_POST['tanggalHafalan'];
        $surah=$_POST['surah'];
        $juz=$_POST['juz'];
        $pencapaian=$_POST['pencapaian'];
        $santri=$_POST['idSantri'];
        $ustad = $_SESSION['email'];
        $cek = "SELECT id_ustad FROM db_tbl_ustad WHERE email='$ustad'";
        $query = mysqli_query($koneksi,$cek);
        $rows= mysqli_fetch_array($query);
        $row1=$rows['id_ustad'];

        if (isset($_POST['submit'])){
            $query="INSERT INTO db_tbl_hafalan VALUES ('$id', '$tanggal', '$surah' , '$juz',  '$pencapaian', '$santri', '$row1')";
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