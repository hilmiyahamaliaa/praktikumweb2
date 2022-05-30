<?php
require_once 'Model.php';
session_start();
if(isset($_GET['id_member'])){
    hapusmember($_GET['id_member']);
}
?>

<html>
    <head>
    <title>Data Member</title>
        <body>
        <center><h1>Data Member</h1></center>
        <a href="FormMember.php" style="padding:0.5% 0.8%; background-color:#eee; border-radius:2px; text-decoration:none; font-weight:bold;">Tambah Data</a>
        <a href="Index.php" style="padding:0.5% 0.8%; background-color:#eee; border-radius:2px; text-decoration:none; font-weight:bold;">Beranda</a><br><br>
            <table border=1 cellspacing=0 width=100%>   
            <tr style="text-align:center; font-weight:bold; background-color:#eee;">
                <th>ID</th>
			    <th>Nama Member</th>
			    <th>Nomor Member</th>
			    <th>Alamat</th>
			    <th>Tanggal Mendaftar</th>
			    <th>Tanggal Terakhir Bayar</th>
                <th>Opsi</th>
		    </tr>
                <?php
                tampilmember();
                ?>
            </table>
        </body>
    </head>
</html>