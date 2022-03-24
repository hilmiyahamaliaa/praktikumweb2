<!DOCTYPE html>
<html>
    <head>
        <title>Prak203</title>
    </head>
    <body>
    <form action="" method="POST">
        Nilai : <input type="text" name="suhu" value="<?=isset($_POST['suhu']) ? $_POST['suhu'] : ''?>"/><br>
        Dari : <br>
        <input type="radio" name="dari" value="C" <?php if(isset($_POST['dari'])){if($_POST['dari']=="C"){echo 'checked';}} ?>/>Celcius<br>
        <input type="radio" name="dari" value="F" <?php if(isset($_POST['dari'])){if($_POST['dari']=="F"){echo 'checked';}} ?>/>Fahrenheit<br>
        <input type="radio" name="dari" value="R" <?php if(isset($_POST['dari'])){if($_POST['dari']=="R"){echo 'checked';}} ?>/>Rheamur<br>
        <input type="radio" name="dari" value="K" <?php if(isset($_POST['dari'])){if($_POST['dari']=="K"){echo 'checked';}} ?>/>Kelvin<br>
        Ke : <br>
        <input type="radio" name="ke" value="C" <?php if(isset($_POST['ke'])){if($_POST['ke']=="C"){echo 'checked';}} ?>/>Celcius<br>
        <input type="radio" name="ke" value="F" <?php if(isset($_POST['ke'])){if($_POST['ke']=="F"){echo 'checked';}} ?>/>Fahrenheit<br>
        <input type="radio" name="ke" value="R" <?php if(isset($_POST['ke'])){if($_POST['ke']=="R"){echo 'checked';}} ?>/>Rheamur<br>
        <input type="radio" name="ke" value="K" <?php if(isset($_POST['ke'])){if($_POST['ke']=="K"){echo 'checked';}} ?>/>Kelvin<br>
        <input type="submit" name="submit" value="Konversi">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $nilai = $_POST['suhu'];
        $dari = $_POST['dari'];
        $ke = $_POST['ke'];

        if($dari == "C"){
            if($ke == "C"){
                $konversi = $nilai;
                echo "<h2><b>Hasil Konversi : $konversi &deg;C</b></h2>";
            }elseif($ke == "F"){
                $konversi = 1.8*$nilai+32;
                echo "<h2><b>Hasil Konversi : $konversi &deg;F</b></h2>";
            }elseif($ke == "R"){
                $konversi = 0.8*$nilai;
                echo "<h2><b>Hasil Konversi : $konversi &deg;R</b></h2>";
            }elseif($ke == "K"){
                $konversi = $nilai+273;
                echo "<h2><b>Hasil Konversi : $konversi &deg;K</b></h2>";
            }
        }elseif ($dari == "F") {
            if($ke == "C"){
                $konversi = 0.56*($nilai-32);
                echo "<h2><b>Hasil Konversi : $konversi &deg;C</b></h2>";
            }elseif($ke == "F"){
                $konversi = $nilai;
                echo "<h2><b>Hasil Konversi : $konversi &deg;F</b></h2>";
            }elseif($ke == "R"){
                $konversi = 0.44*($nilai-32);
                echo "<h2><b>Hasil Konversi : $konversi &deg;R</b></h2>";
            }elseif($ke == "K"){
                $konversi = 0.56*($nilai-32)+273;
                echo "<h2><b>Hasil Konversi : $konversi &deg;K</b></h2>";
            }
        }elseif ($dari == "R") {
            if($ke == "C"){
                $konversi = 1.25*$nilai;
                echo "<h2><b>Hasil Konversi : $konversi &deg;C</b></h2>";
            }elseif($ke == "F"){
                $konversi = 2.25*$nilai+32;
                echo "<h2><b>Hasil Konversi : $konversi &deg;F</b></h2>";
            }elseif($ke == "R"){
                $konversi = $nilai;
                echo "<h2><b>Hasil Konversi : $konversi &deg;R</b></h2>";
            }elseif($ke == "K"){
                $konversi = 1.25*$nilai+273;
                echo "<h2><b>Hasil Konversi : $konversi &deg;K</b></h2>";
            }
        }elseif ($dari == "K") {
            if($ke == "C"){
                $konversi = $nilai-273;
                echo "<h2><b>Hasil Konversi : $konversi &deg;C</b></h2>";
            }elseif($ke == "F"){
                $konversi = 1.8*($nilai-273)+32;
                echo "<h2><b>Hasil Konversi : $konversi &deg;F</b></h2>";
            }elseif($ke == "R"){
                $konversi = 0.8*($nilai-273);
                echo "<h2><b>Hasil Konversi : $konversi &deg;R</b></h2>";
            }elseif($ke == "K"){
                $konversi = $nilai;
                echo "<h2><b>Hasil Konversi : $konversi &deg;K</b></h2>";
            }
        }
    }
    ?>
    </body>
</html>