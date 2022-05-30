<?php
session_start();
if(!isset($_SESSION['nomor_member'])){
    header("Location: ErrorPage.php");
    exit();
}

if(isset($_GET['aksi'])){
    $aksi = $_GET['aksi'];

    if($aksi == "logout"){
        if(isset($_SESSION['login'])){
            unset($_SESSION['login']);
            session_unset();
            session_destroy();
            $_SESSION = array();
        }
        header("Location: ErrorPage.php?e=1");
    }
    elseif($aksi == "beranda"){
        header("Location: Index.php");
    }exit();
}
?>

<html>
    <head>
        <title>Welcome</title>
    </head>
    <body>
        <p>SELAMAT DATANG Anda Berhasil Login</p>
        <a href="Index.php?aksi=beranda">Beranda</a><br>
        <a href="FormLogin.php?aksi=logout">LOGOUT</a>
    </body>
</html>