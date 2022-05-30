<?php
session_start();
if(isset($_GET['e'])){
    $error = $_GET['e'];

    if($error == 1){
        echo "Login error! Nomor Member dan Password Harus Diisi";
    }elseif($error == 2){
        echo "Login error! Silakan Masukkan Nomor Member dan Password dengan Benar";
    }
}
?>
<br><a href="FormLogin.php" font-weight:bold;>Kembali</a><br><br>