<?php
require 'Model.php';
session_start();
if(isset($_GET['id_peminjam'])){
    editpeminjaman();
}
?>
<html>
    <head>
    <?php echo (isset($_GET['id_peminjam'])) ? "<title>Update Buku</title>": "<title>Tambah Buku</title>" ?>
        <body>
        <br>
        <a href="Peminjaman.php" style="padding:1% 0.8%; background-color:#eee; border-radius:2px; text-decoration:none; font-weight:bold;">Data Peminjaman</a><br><br>
            <table>
                <form action="" method="post">
                <tr>
                    <td>ID Buku</td>
                    <td>:</td>
                    <td><input type="text" name="id_peminjam" <?php echo (isset($_GET['id_peminjam'])) ?  "value = " . $result[0]["id_peminjam"] . "" : "value = '' "; ?> required> <br></td>
                </tr>
                <tr>
                    <td>Tanggal Pinjam</td>
                    <td>:</td>
                    <td><input type="date" name="tgl_pinjam" <?php echo (isset($_GET['id_peminjam'])) ?  "value = " . $result[0]["tgl_pinjam"] . "" : "value = '' "; ?> required> <br></td>
                </tr>
                <tr>
                    <td>Tanggal Kembali</td>
                    <td>:</td>
                    <td><input type="date" name="tgl_kembali" <?php echo (isset($_GET['id_peminjam'])) ?  "value = " . $result[0]["tgl_kembali"] . "" : "value = '' "; ?> required> <br></td>
                </tr>
                <tr>
                    <td>
                    <?php
                    if (isset($_GET['id_peminjam'])) {
                        echo "<button type='submit' name='update'>Update</button>";
                    }else {
                        echo "<button type='submit' name='submit'>Tambah</button>";
                    }
                    ?>
                    </td>
                </tr>
            </table>
        </body>
        </form>
        <?php
        if (isset($_POST['submit'])) {
        tambahpeminjaman($_POST['id_peminjam'],$_POST['tgl_pinjam'], $_POST['tgl_kembali']);
        }
        if (isset($_POST['update'])) {
        updatepeminjaman($_GET['id_peminjam'],$_POST['tgl_pinjam'],$_POST['tgl_kembali']);
        }
        ?>
    </head>
</html>