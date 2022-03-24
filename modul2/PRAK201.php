<!DOCTYPE html>
<html>
    <head>
    <title>Prak201</title>
    </head>
    <body>
        <form method="POST">
            Nama: 1 <input type="text" name="nama1" value="<?=isset($_POST['nama1']) ? $_POST['nama1'] : ''?>"/><br>
            Nama: 2 <input type="text" name="nama2" value="<?=isset($_POST['nama2']) ? $_POST['nama2'] : ''?>"/><br>
            Nama: 3 <input type="text" name="nama3" value="<?=isset($_POST['nama3']) ? $_POST['nama3'] : ''?>"/><br>
            <input type="submit" value="Urutkan">
        </form>
        <?php
        error_reporting(0);
        $nama1 = $_POST['nama1'];
        $nama2 = $_POST['nama2'];
        $nama3 = $_POST['nama3'];
        if($nama1<$nama2 && $nama1<$nama2 && $nama2<$nama3){
            echo "$nama1<br>$nama2<br>$nama3";
        }
        else if($nama1<$nama2 && $nama1<$nama2 && $nama2>$nama3){
            echo "$nama1<br>$nama3<br>$nama2";
        }
        else if($nama2<$nama1 && $nama2<$nama3 && $nama1>$nama3){
            echo "$nama2<br>$nama3<br>$nama1";
        }
        else if($nama2<$nama1 && $nama2<$nama3 && $nama1<$nama3){
            echo "$nama2<br>$nama1<br>$nama3";
        }
        else if($nama3<$nama1 && $nama3<$nama2 && $nama1<$nama2){
            echo "$nama3<br>$nama1<br>$nama2";
        }
        else if($nama3<$nama1 && $nama3<$nama2 && $nama1>$nama2){
            echo "$nama3<br>$nama2<br>$nama1";
        }
        ?>
    </body>
</html>
