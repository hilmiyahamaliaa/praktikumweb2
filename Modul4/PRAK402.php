<!DOCTYPE html>
<html>
    <head>
        <title>PRAK402</title>
    </head>
    <style>
        table, th, td{
            border: 1px solid black;
            padding: 5px;
            border-collapse: collapse;
        }
        th{
            background-color:#DFDFDE;
        }
    </style>
    <body>
        <table>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Nilai UTS</th>
                <th>Nilai UAS</th>
                <th>Nilai Akhir</th>
                <th>Huruf</th>
            </tr>
    </body>
</html>

<?php
$data = [
    ['nama' => 'Andi' ,'nim' => '2101001', 'uts' => '87', 'uas' => '65'],
    ['nama' => 'Budi' ,'nim' => '2101002', 'uts' => '76', 'uas' => '79'],
    ['nama' => 'Tono' ,'nim' => '2101003', 'uts' => '50', 'uas' => '41'],
    ['nama' => 'Jessica' ,'nim' => '2101004', 'uts' => '60', 'uas' => '75']
];

for($i=0; $i<count($data); $i++;){
    //nilai akhir 40% UTS + 60% UAS
    $data[$i]["nilai"] = $data[$i]["uts"]*0.4 + $data[$i]["uas"]*0.6;
    if ($data[$i]["nilai"]>=80) {
        $data[$i]["huruf"] = "A";
    }
    elseif ($data[$i]["nilai"]>=70) {
        $data[$i]["huruf"] = "B";
    }
    elseif ($data[$i]["nilai"]>=60) {
        $data[$i]["huruf"] = "C";
    }
    elseif ($data[$i]["nilai"]>=50) {
        $data[$i]["huruf"] = "D";
    }
    else {
        $data[$i]["huruf"] = "E";
    }
}

for($i=0; $i<count($data); $i++;){
    echo "<tr>";
    echo "<td>".$data[$i]["nama"]."</td>";
    echo "<td>".$data[$i]["nim"]."</td>";
    echo "<td>".$data[$i]["uts"]."</td>";
    echo "<td>".$data[$i]["uas"]."</td>";
    echo "<td>".$data[$i]["nilai"]."</td>";
    echo "<td>".$data[$i]["huruf"]."</td>";
    echo "</tr>";
}
?>    
</table>