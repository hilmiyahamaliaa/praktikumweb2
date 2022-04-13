<!DOCTYPE html>
<html>
    <head>
        <title>PRAK303</title>
    </head>
    <body>
        <form action="" method="POST">
            Batas Bawah : <input type="number" name="bawah" value="<?=isset($_POST['bawah']) ? $_POST['bawah'] : ''?>"/><br>
            Batas Atas : <input type="number" name="atas" value="<?=isset($_POST['atas']) ? $_POST['atas'] : ''?>"/><br>
            <input type="submit" name="submit" value="Cetak"><br><br>
        </form>

        <?php
        if(isset($_POST['submit'])){
            $bawah = $_POST["bawah"];
            $atas = $_POST["atas"];
            $gambar = "https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png";
            do {
                if (($bawah +7) %5 == 0 ) {
                    echo "<img src='$gambar' width='20' height='20'>";
                } else {
                    echo "$bawah ";
                } 
                $bawah++;           
            } while ($bawah <= $atas);
        }
        ?>
    </body>
</html>