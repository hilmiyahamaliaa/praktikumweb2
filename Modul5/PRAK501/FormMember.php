<?php
require 'Koneksi.php';
?>
<html>
    <head>
        <title>Form Member</title>
        <body>
            <table>
                <form action="Member.php" method="post">
                <tr>
                    <td>Nama Member : </td>
                    <td><input type="text" name="nama_member" value = "" required><br></td>
                </tr>
                <tr>
                    <td>Nomor Member : </td>
                    <td><input type="text" name="nomor_member" value = "" required><br></td>
                </tr>
                <tr>
                    <td>Alamat : </td>
                    <td><input type="text" name="alamat" value = "" required><br></td>
                </tr>
                <tr>
                    <td>Tanggal Mendaftar : </td>
                    <td><input type="text" name="tgl_mendaftar" value = "" required><br></td>
                </tr>
                <tr>
                    <td>Tanggal Terakhir Bayar : </td>
                    <td><input type="text" name="tgl_terakhir_bayar" value = "" required><br></td>
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
        ?>
    </head>
</html>