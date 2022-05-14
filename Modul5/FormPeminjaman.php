<?php
require 'Koneksi.php';
?>
<html>
    <head>
        <title>Form Peminjaman</title>
        <body>
            <table>
                <form action="Peminjaman.php" method="post">
                <tr>
                    <td>Tanggal Pinjam : </td>
                    <td><input type="text" name="tgl_pinjam" value = "" required><br></td>
                </tr>
                <tr>
                    <td>Tanggal Kembali : </td>
                    <td><input type="text" name="tgl_kembali" value = "" required><br></td>
                </tr>
                <tr>
                    <td>
                    <?php
                    if (isset($_GET['id_peminjaman'])) {
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