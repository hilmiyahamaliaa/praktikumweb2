<!DOCTYPE html>
<html>
    <head>
    <title>Prak204</title>
    </head>
    <body>
    <form method="POST">
        Nilai : <input type="number"  name="nilai" value="<?=isset($_POST['nilai']) ? $_POST['nilai'] : ''?>"/><br>
        <input type="submit" value="Konversi">
    </form>

    <?php
    error_reporting(0);
    $nilai = $_POST['nilai'];
    if($nilai==0){
        echo"<h2><b>Hasil : Nol</b></h2>";
    }else if($nilai>0 AND $nilai <10){
        echo"<h2><b>Hasil : Satuan</b></h2>";
    }else if($nilai>=11 AND $nilai <20){
        echo"<h2><b>Hasil : Belasan</b></h2>";
    }else if($nilai>=10 AND $nilai <100){
        echo"<h2><b>Hasil : Puluhan</b></h2>";
    }else if($nilai>=100 AND $nilai <1000){
        echo"<h2><b>Hasil : Ratusan</b></h2>";
    }else if($nilai>=1000){
        echo"<h2><b>Hasil : Anda Menginput Melebihi Limit Bilangan</b></h2>";
    }
    ?>
    </body>
</html> 