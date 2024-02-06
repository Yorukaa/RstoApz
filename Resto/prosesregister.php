<?php
include "config/classDB.php";
    if(isset($_POST['register'])){
        extract($_POST);
        $pass = password_hash($password,PASSWORD_DEFAULT);
        $ins = $dbo->insert("tblpelanggan","null,'$nama_pelanggan','$alamat','$no_hp','$username','$pass','1'");
        if($ins){
            ?>
                <script>
                    alert('Register Berhasil');
                    location.href='login.php';
                </script>
            <?php
        }else{
            ?>
            <script>
                alert('Register Gagal!, Periksa Data Anda Lagi');
                location.href='register.php';
            </script>
        <?php
        }
    }
?>