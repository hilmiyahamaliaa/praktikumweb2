<?php
require_once 'Model.php';
session_start();
if(isset($_GET['id_buku'])){
    hapusbuku($_GET['id_buku']);
}
?>

<html>
    <head>
    <title>Data Buku</title>
        <body>
        <center><h1>Data Buku</h1></center>
        <a href="FormBuku.php" style="padding:0.5% 0.8%; background-color:#eee; border-radius:2px; text-decoration:none; font-weight:bold;">Tambah Data</a>
        <a href="Index.php" style="padding:0.5% 0.8%; background-color:#eee; border-radius:2px; text-decoration:none; font-weight:bold;">Beranda</a><br><br>
            <table border=1 cellspacing=0 width=100%>   
            <tr style="text-align:center; font-weight:bold; background-color:#eee;">
                <th>ID</th>
			    <th>Judul buku</th>
			    <th>Penulis</th>
			    <th>Penerbit</th>
			    <th>Tahun Terbit</th>
                <th>Opsi</th>
		    </tr>
                <?php
                tampilbuku();
                ?>
            </table>
        </body>
    </head>
</html>