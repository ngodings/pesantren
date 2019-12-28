<?php
include 'conn.php';
        if(isset($_POST['hapusAkun'])) {


            $email = $_POST['emailAkun'];

            $jenis = $_POST['jenisAkun'];

            if($jenis == 'Ustad'){
                $cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM db_tbl_ustad WHERE email='$email'"));
                if ($cek == 0) {
                    echo '<script language="javascript">
                        alert ("Akun belum terdaftar");
                        window.location="dashboard.php";
                        </script>';
                
                        exit();
                }else{
                    $hapus_data = "DELETE FROM db_tbl_ustad WHERE email='$email'";
                    //$tambah_data = mysqli_num_rows(mysqli_query($koneksi,$tambah));
                    $cek_hapus = mysqli_query($koneksi,$hapus_data);

                    //cho $email;

                    $cek_data = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM db_tbl_ustad WHERE email='$email'"));
                    if($cek_data == 0){
                        echo '<script language="javascript">
                        alert ("Berhasil dihapus");
                        window.location="dashboard.php";
                        </script>';
                    //header("Location: index.php");
                    }else{
                        echo '<script language="javascript">
                        alert ("Ulangi");
                        window.location="dashboard.php";
                        </script>';

                    }
                }

            }else{
                
                    $cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM db_tbl_santri WHERE email='$email'"));
                    if ($cek == 0) {
                        echo '<script language="javascript">
                            alert ("Akun belum terdaftar");
                            window.location="dashboard.php";
                            </script>';
                    
                            exit();
                    }else{
                        $hapus_data = "DELETE FROM db_tbl_santri WHERE email='$email'";
                        //$tambah_data = mysqli_num_rows(mysqli_query($koneksi,$tambah));
                        $cek_hapus = mysqli_query($koneksi,$hapus_data);
    
                        //cho $email;
    
                        $cek_data = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM db_tbl_santri WHERE email='$email'"));
                        if($cek_data == 0){
                            echo '<script language="javascript">
                            alert ("Berhasil dihapus");
                            window.location="dashboard.php";
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
        }

?>