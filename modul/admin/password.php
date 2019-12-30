<?php
include 'conn.php';
        if(isset($_POST['resetPass'])) {


            $email = $_POST['emailnya'];

            $jenis = $_POST['jenis_akun'];
            
            $pass = $_POST['pass_baru'];

            if($jenis == 'Ustad'){
                $cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM db_tbl_ustad WHERE email='$email'"));
                if ($cek == 0) {
                    echo '<script language="javascript">
                        alert ("Akun belum terdaftar");
                        window.location="dashboard.php";
                        </script>';
                
                        exit();
                }else{
                    $ganti_data = "UPDATE db_tbl_ustad SET password='$pass' WHERE email='$email'";
                    
                    $cek_ganti = mysqli_query($koneksi,$ganti_data);

                    echo '<script language="javascript">
                    alert ("Berhasil di update");
                    window.location="dashboard.php";
                    </script>';
                    // $cek_data = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM db_tbl_ustad WHERE email='$email'"));
                    // if($cek_data == $pass){
                    //     echo '<script language="javascript">
                    //     alert ("Berhasil di update");
                    //     window.location="dashboard.php";
                    //     </script>';
                    // //header("Location: index.php");
                    // }else{
                    //     echo '<script language="javascript">
                    //     alert ("Ulangi");
                    //     window.location="dashboard.php";
                    //     </script>';

                    // }
                }

            }else{ //for santri
                $cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM db_tbl_santri WHERE email='$email'"));
                if ($cek == 0) {
                    echo '<script language="javascript">
                        alert ("Akun belum terdaftar");
                        window.location="dashboard.php";
                        </script>';
                
                        exit();
                }else{
                    $ganti_data = "UPDATE db_tbl_santri SET password='$pass' WHERE email='$email'";
                    
                    $cek_ganti = mysqli_query($koneksi,$ganti_data);

                    echo '<script language="javascript">
                    alert ("Berhasil di update");
                    window.location="dashboard.php";
                    </script>';
                    }
            }
        }

?>