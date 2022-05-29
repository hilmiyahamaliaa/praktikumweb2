<?php
require 'Model.php';
if(isset($_GET['id_member'])){
    editmember();
}
?>
<html>
    <head>
    <?php echo (isset($_GET['id_member'])) ? "<title>Update Member</title>": "<title>Tambah Member</title>" ?>
        <body>
        <br>
        <a href="Member.php" style="padding:1% 0.8%; background-color:#eee; border-radius:2px; text-decoration:none; font-weight:bold;">Data Member</a><br><br>
            <table>
                <form action="" method="post">
                <tr>
                    <td>ID Member</td>
                    <td>:</td>
                    <td><input type="text" name="id_member" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["id_member"] . "" : "value = '' "; ?> required> <br></td>
                </tr>
                <tr>
                    <td>Nama Member</td>
                    <td>:</td>
                    <td><input type="text" name="nama_member" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["nama_member"] . "" : "value = '' "; ?> required> <br></td>
                </tr>
                <tr>
                    <td>Nomor Member</td>
                    <td>:</td>
                    <td><input type="text" name="nomor_member" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["nomor_member"] . "" : "value = '' "; ?> required> <br></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["alamat"] . "" : "value = '' "; ?> required> <br></td>
                </tr>
                <tr>
                    <td>Tanggal Mendaftar</td>
                    <td>:</td>
                    <td><input type="date" name="tgl_mendaftar" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["tgl_mendaftar"] . "" : "value = '' "; ?> required> <br></td>
                </tr>
                <tr>
                    <td>Tanggal Terakhir Bayar</td>
                    <td>:</td>
                    <td><input type="date" name="tgl_terakhir_bayar" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["tgl_terakhir_bayar"] . "" : "value = '' "; ?> required> <br></td>
                </tr>
                <tr>
                    <td>
                    <?php
                    if (isset($_GET['id_member'])) {
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
        tambahmember($_POST['id_member'],$_POST['nama_member'],$_POST['nomor_member'],$_POST['alamat'], $_POST['tgl_mendaftar'], $_POST['tgl_terakhir_bayar']);
        }
        if (isset($_POST['update'])) {
        updatemember($_GET['id_member'],$_POST['nama_member'],$_POST['nomor_member'],$_POST['alamat'],$_POST['tgl_mendaftar'],$_POST['tgl_terakhir_bayar']);
        }
        ?>
    </head>
</html>