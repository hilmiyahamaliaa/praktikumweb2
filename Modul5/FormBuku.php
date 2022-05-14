<?php
require 'Koneksi.php';
?>
<html>
    <head>
        <title>Form Buku</title>
        <body>
            <table>
                <form action="Buku.php" method="post">
                <tr>
                    <td>Judul Buku : </td>
                    <td><input type="text" name="judul_buku" value = "" required><br></td>
                </tr>
                <tr>
                    <td>Penulis : </td>
                    <td><input type="text" name="penulis" value = "" required><br></td>
                </tr>
                <tr>
                    <td>Penerbit : </td>
                    <td><input type="text" name="penerbit" value = "" required><br></td>
                </tr>
                <tr>
                    <td>Tahun Terbit : </td>
                    <td><input type="text" name="tahun_terbit" value = "" required><br></td>
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
        ?>
    </head>
</html>