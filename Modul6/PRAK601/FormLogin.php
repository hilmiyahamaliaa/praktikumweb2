<?php
require 'koneksi.php';
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
if(isset($_SESSION['nomor_member'])){
    header("Location: Login.php");
}

if(isset($_POST['submit'])){
    $nomor_member = trim($_POST['nomor_member']);
    $password = trim($_POST['password']);

    if($nomor_member == "" || $password == ""){
        header("Location: ErrorPage.php?e=1");
        exit();
    }

    $sql = koneksi()->prepare("SELECT * FROM member WHERE nomor_member = ? AND password = ?");
    $sql->bindParam(1, $nomor_member);
    $sql->bindParam(2, $password);
    $sql->execute();

    if($sql->rowCount() != 0){
        $_SESSION['nomor_member'] = 1;
        session_start();
        header("Location: Login.php");
    }else{
        header("Location: ErrorPage.php?e=2");
        exit();
    }
}
}
?>

<html>
    <head>
        <title>Form Login</title>
    </head>
    <body>
        <center>
        <table>
        <form method="post" action="">
            <h1>Form Login</h1>
            <tr>
                <td>Nomor Member</td>
                <td>:</td>
                <td><input type="text" name="nomor_member" value=""><br></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" value=""></td>
            </tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </form>
        </table>
        </center>
    </body>
</html>