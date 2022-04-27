<!DOCTYPE html>
<html>
    <head>
        <title>PRAK403</title>
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
                <th>No</th>
                <th>Nama</th>
                <th>Mata Kuliah diambil</th>
                <th>SKS</th>
                <th>Total SKS</th>
                <th>Keterangan</th>
            </tr>
    </body>
</html>

<?php
$data = [
    ['no'=>1 ,'nama'=>'Ridho', 'krs'=> [
        ['matkul'=>'Pemrograman I', 'sks'=>2],
        ['matkul'=>'Praktikum Pemrograman I', 'sks'=>1],
        ['matkul'=>'Pengantar Lingkungan Lahan Basah', 'sks'=>2],
        ['matkul'=>'Arsitektur Komputer', 'sks'=>3]
        ]
    ],
    ['no'=>2 ,'nama'=>'Ratna', 'krs'=> [
        ['matkul'=>'Basis Data I', 'sks'=>2],
        ['matkul'=>'Praktikum Basis Data I', 'sks'=>1],
        ['matkul'=>'Kalkulus', 'sks'=>3]
        ]
    ],
    ['no'=>3 ,'nama'=>'Tono', 'krs'=> [
        ['matkul'=>'Rekayasa Perangkat Lunak', 'sks'=>3],
        ['matkul'=>'Analisis dan Perancangan Sistem', 'sks'=>3],
        ['matkul'=>'Komputasi Awan', 'sks'=>3],
        ['matkul'=>'Kecerdasan Bisnis', 'sks'=>3]
        ]
    ],
];

for($i=0; $i<count($data); $i++){
    $total=0;
    
    for($j=0; $j<count($data[$i]['krs']); $j++){
        $total += $data[$i]['krs'][$j]['sks'];
    }
    $data[$i]['total']=$total;
}


for($i=0; $i<count($data); $i++){
    for($j=0; $j<count($data[$i]['krs']); $j++){
        echo "<tr>";
        if ($j == 0) {
            echo "<td>".$data[$i]["no"]."</td>";
            echo "<td>".$data[$i]["nama"]."</td>";
            echo "<td>".$data[$i]["krs"][$j]["matkul"]."</td>";
            echo "<td>".$data[$i]["krs"][$j]["sks"]."</td>";
            echo "<td>".$data[$i]["total"]."</td>";
            if ($data[$i]["total"] < 7) {
                echo "<td style = background-color:green>".$data[$i]["ket"] = "Revisi KRS"."</td>"; 
            }else {
                echo "<td style = background-color:red>".$data[$i]["ket"] = "Tidak Revisi"."</td>"; 
            }
        }else {
            echo "<td></td>";
            echo "<td></td>";
            echo "<td>".$data[$i]["krs"][$j]["matkul"]."</td>";
            echo "<td>".$data[$i]["krs"][$j]["sks"]."</td>";
            echo "<td></td>";
            echo "<td></td>";
        }
        echo "</tr>";
    }
}
?>    
</table>