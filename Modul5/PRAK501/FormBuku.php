<?php
require 'Model.php';
if(isset($_GET['id_buku'])){
    editbuku();
}
?>
<html>
    <head>
    <?php echo (isset($_GET['id_buku'])) ? "<title>Update Buku</title>": "<title>Tambah Buku</title>" ?>
        <body>
        <br>
        <a href="Member.php" style="padding:1% 0.8%; background-color:#eee; border-radius:2px; text-decoration:none; font-weight:bold;">Data Buku</a><br><br>
            <table>
                <form action="" method="post">
                <tr>
                    <td>ID Buku</td>
                    <td>:</td>
                    <td><input type="text" name="id_buku" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["id_buku"] . "" : "value = '' "; ?> required> <br></td>
                </tr>
                <tr>
                    <td>Judul Buku</td>
                    <td>:</td>
                    <td><input type="text" name="judul_buku" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["judul_buku"] . "" : "value = '' "; ?> required> <br></td>
                </tr>
                <tr>
                    <td>Penulis</td>
                    <td>:</td>
                    <td><input type="text" name="penulis" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["penulis"] . "" : "value = '' "; ?> required> <br></td>
                </tr>
                <tr>
                    <td>Penerbit</td>
                    <td>:</td>
                    <td><input type="text" name="penerbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["penerbit"] . "" : "value = '' "; ?> required> <br></td>
                </tr>
                <tr>
                    <td>Tahun Terbit</td>
                    <td>:</td>
                    <td><input type="text" name="tahun_terbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["tahun_terbit"] . "" : "value = '' "; ?> required> <br></td>
                </tr>
                <tr>
                    <td>
                    <?php
                    if (isset($_GET['id_buku'])) {
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
        tambahbuku($_POST['id_buku'],$_POST['judul_buku'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun_terbit']);
        }
        if (isset($_POST['update'])) {
        updatebuku($_GET['id_buku'],$_POST['judul_buku'],$_POST['penulis'],$_POST['penerbit'],$_POST['tahun_terbit']);
        }
        ?>
    </head>
</html>