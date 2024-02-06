<?php
    session_start();
    $id = isset($_GET['id'])?$_GET['id']:"";
    $aksi = isset($_GET['aksi'])?$_GET['aksi']:"";
    $val = isset($_GET['val'])?$_GET['val']:"";
    if($aksi=="hapus"){
        unset($_SESSION['cart'][$id]);
    }else if($aksi=='edit'){
        $_SESSION['cart'][$id] +=$val;
        if($_SESSION['cart'][$id]<=0){
            unset($_SESSION['cart'][$id]);
        }
    }else{
        if(isset($_SESSION['cart'][$id])){
            $_SESSION['cart'][$id] +=1;
        }else{
            $_SESSION['cart'][$id] = 1;
        }
    }


?>

<script>
    location.href='index.php?hal=cart';
</script>