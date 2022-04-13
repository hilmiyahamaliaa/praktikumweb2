<!DOCTYPE html>
<html>
    <head>
        <title>PRAK302</title>
    </head>
    <style>
        img{
            width:30px;
        }
        </style>
    <body>
        <form action="" method="POST">
            Tinggi : <input type="number" name="tinggi" value="<?=isset($_POST['tinggi']) ? $_POST['tinggi'] : ''?>"/><br>
            Alamat Gambar : <input type="url" name="link" value="<?=isset($_POST['link']) ? $_POST['link'] : ''?>"/><br>
            <input type="submit" name="submit" value="Cetak"><br><br>
        </form>

        <?php
        if(isset($_POST['submit'])){
            $tinggi = $_POST["tinggi"];
            $link = $_POST["link"];
            $i=0;
            while($i<$tinggi){
                $j=0;
                while($j<=$i){
                    echo"<img>";
                    $j++;
                }
                $j=0;
                while($j<$tinggi-$i){
                    $image=$link;
                    $imageData = base64_encode(file_get_contents($image));
                    echo "<img src = '$link'>";
                    $j++;
                }
                echo"<br>";
                $i++;
            }
        } 
        ?>
    </body>
</html>