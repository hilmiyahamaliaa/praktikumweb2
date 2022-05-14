<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'modul5');
if (mysqli_connect_error()) {
    printf("Koneksi Gagal", mysqli_connect_error());
    exit();
}
?>