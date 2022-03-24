<!DOCTYPE html>
<html>
    <head>
        <title>Prak202</title>
        <style>.error {color: #FF0000;}</style>
    </head>
    <body>
        <?php
        $nama_pesan = $nim_pesan = $jenis_pesan = "";
        $nama = $nim = $jenis = "";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            if(empty($_POST['nama'])){
                $nama_pesan = "nama tidak boleh kosong";
            }else{
                $nama = $_POST['nama'];
            }
            
            if(empty($_POST['nim'])){
                $nim_pesan = "nim tidak boleh kosong";
            }else{
                $nim = $_POST['nim'];
            }

            if(empty($_POST['gender'])){
                $jenis_pesan = "jenis kelamin tidak boleh kosong";
            }else{
                $jenis = $_POST['gender'];
            }
        }
        ?>
        <form action="" method="POST">
            Nama: <input type="text" name="nama" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"/>
            <span class="error">* <?php echo $nama_pesan?></span><br>
            Nim: <input type="text" name="nim" value="<?=isset($_POST['nim']) ? $_POST['nim'] : ''?>"/>
            <span class="error">* <?php echo $nim_pesan;?></span><br>
            Jenis Kelamin :
            <span class="error">* <?php echo $jenis_pesan;?></span><br>
            <input type="radio" name="gender" value="Laki-laki" <?php if(isset($_POST['gender'])){if($_POST['gender']=="Laki-laki"){echo 'checked';}} ?>/>Laki-laki<br>
            <input type="radio" name="gender" value="Perempuan" <?php if(isset($_POST['gender'])){if($_POST['gender']=="Perempuan"){echo 'checked';}} ?>/>Perempuan<br>
            <input type="submit" value="Submit">
        </form>
        <?php
        echo "<h2>Output : </h2>";
        echo "$nama<br>";
        echo "$nim<br>";
        echo "$jenis<br>";
        ?>
    </body>
</html>
