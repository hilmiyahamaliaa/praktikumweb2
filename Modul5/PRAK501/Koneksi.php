<?php
function koneksi(){
    try{
        $connection = new PDO(
            'mysql:host=localhost;dbname=modul5', 'root', '',
            array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::ATTR_PERSISTENT => true)
        );
    }catch(PDOException $e){
        print "Gagal Terkoneksi ke Database : ".$e->getMessage(). "<br/>";
        die();
    }
    return $connection;
}
?>