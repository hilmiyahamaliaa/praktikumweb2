<!DOCTYPE html>
<html>
    <head>
        <title>Prak04</title>
        <style>
        table, th, td{
            border: 1px solid black;
        }
        </style>
    </head>
    <body>
        <table>
            <tr><th>Daftar Smartphone Samsung</th></tr>
            <?php
            $samsung = ['Samsung Galaxy S22', 'Samsung Galaxy S22+', 'Samsung Galaxy A03', 'Samsung Galaxy Xcover 5'];
            foreach ($samsung as $hp):
            ?>
            <tr><td><?php echo ($hp);?></td></tr>
            <?php endforeach;?>
        </table>
    </body>
</html>