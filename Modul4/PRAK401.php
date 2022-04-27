<!DOCTYPE html>
<html>
    <head>
        <title>PRAK401</title>
    </head>
    <style>
        table{
            border: 1px solid black;
            width: 100px;
            height: 100px;
            text-align: center;
            border-collapse: collapse;
        }
        tr, td{
            border: 1px solid black;
        }
    </style>
    <body>
    <form method="POST" action="">
        Panjang : <input type="text" name="panjang" value="<?=isset($_POST['panjang']) ? $_POST['panjang'] : ''?>"/><br>
        Lebar : <input type="text" name="lebar" value="<?=isset($_POST['lebar']) ? $_POST['lebar'] : ''?>"/><br>
        Nilai : <input type="text" name="nilai" value="<?=isset($_POST['nilai']) ? $_POST['nilai'] : ''?>"/><br>
        <input type="submit" name="submit" value="Cetak"><br><br>
    </form>
    <?php 
    if (isset($_POST['submit'])){
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $nilai = $_POST['nilai'];
        $a = explode(" ", $nilai);
        $b = 0;
        $c = $panjang*$lebar;
        if(count($a)==$c){
            echo "<table>";
            for ($i=0; $i<$panjang; $i++) {
                echo "<tr>";
                for ($j=0; $j<$lebar; $j++) { 
                    echo "<td>" . $a[$b]. "</td>";;
                    $b++;
                }
                echo "</tr>";
            }
            echo "</table>";
        }
        else{
            echo "Panjang nilai tidak sesuai dengan ukuran matriks";
        }
    }    
    ?>
    </body>
</html>