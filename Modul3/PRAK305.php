<!DOCTYPE html>
<html>
    <head>
        <title>PRAK305</title>
    </head>
    <body>
        <form action="" method="POST">
            <input type="text" name="input" value="">
            <input type="submit" name="submit" value="submit"><br><br>
        </form>

        <?php
        if(isset($_POST['submit'])){
            $in = isset($_POST['input']) ? $_POST['input'] : null;

        $inLenght = strlen($in);

        $a = strtoupper($in);

        $array = str_split($a);

        echo "<h4>Input: </h4>".$in."<br>";
        echo "<h4>Output: </h4>";

        $i=0;
        while($i<=$inLenght){
            $j=0;
            while($j<$inLenght){
                if($i==0){
                    echo $array[$j];
                    $k=0;
                    while($k<$inLenght-1){
                        echo strtolower($array[$j]);
                        $k++;
                    }
                }
                $j++;
            }
            $i++;
        }
        }
        ?>
    </body>
</html>