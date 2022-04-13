<!DOCTYPE html>
<html>
    <head>
        <title>Prak05</title>
        <style>
        table, th, td{
            border: 1px solid black;
        }
        </style>
    </head>
    <body>
        <table>
            <tr bgcolor="red">
                <th><h2>Daftar Smartphone Samsung</h2></th>
            </tr>
            <?php
            $samsung = ['hp1'=>'Samsung Galaxy S22', 'hp2'=>'Samsung Galaxy S22+', 'hp3'=>'Samsung Galaxy A03', 'hp4'=>'Samsung Galaxy Xcover 5'];
            foreach ($samsung as $hp):
            ?>
            <tr><td><?php echo ($hp);?></td></tr>
            <?php endforeach;?>
        </table>
    </body>
</html>