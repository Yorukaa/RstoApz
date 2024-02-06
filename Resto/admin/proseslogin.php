<?php
    session_start();
    include "../config/classDB.php";

    if(isset($_POST['login'])){
        extract($_POST);
        $sel = $dbo->select("tblpelanggan where username='$username'");
        foreach($sel as $row){

            $pass = $row['password'];
        }
        if(password_verify($password,$pass)){
            $_SESSION['iduser'] = $row['idpelanggan'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['nama_pelanggan'] = $row['nama_pelanggan'];
            ?>
                <script>
                    location.href = 'index.php';
                </script>
            <?php
        }else{
            ?>
                <script>
                    alert('Login Gagal!')
                    location.href = 'login.php';
                </script>
            <?php
        }
    }
?>