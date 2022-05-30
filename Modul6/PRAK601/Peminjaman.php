<?php
require_once 'Model.php';
session_start();
if(isset($_GET['id_peminjam'])){
    hapuspeminjaman($_GET['id_peminjam']);
}
?>

<html>
    <head>
    <title>Data Peminjaman</title>
        <body>
        <center><h1>Data Peminjaman</h1></center>
        <a href="FormPeminjaman.php" style="padding:0.5% 0.8%; background-color:#eee; border-radius:2px; text-decoration:none; font-weight:bold;">Tambah Data</a>
        <a href="Index.php" style="padding:0.5% 0.8%; background-color:#eee; border-radius:2px; text-decoration:none; font-weight:bold;">Beranda</a><br><br>
            <table border=1 cellspacing=0 width=100%>   
            <tr style="text-align:center; font-weight:bold; background-color:#eee;">
                <th>ID</th>
			    <th>Tanggal Peminjaman</th>
			    <th>Tanggal Kembali</th>
                <th>Opsi</th>
		    </tr>
                <?php
                tampilpeminjaman();
                ?>
            </table>
        </body>
    </head>
</html>