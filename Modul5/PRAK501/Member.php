<html>
    <head>
    <title>Data Member</title>
        <style>
            table{
                width: 100%;
                padding-top: 30px;
                border-collapse: collapse;
            }
            table thead {
                background-color: #ebeef1;
                border-bottom: 1px solid #d3dae0;
            }
            table thead th {
                padding: 10px;
                font-weight: bold;
                font-size: 14px;
            }
            table tbody tr {
                border-bottom: 1px solid #d3dae0;
            }
        </style>
        <body>
        <center><h1>Data Member</h1></center>
            <table border=1>
            <thead>
            <tr>
			    <th>Nama Member</th>
			    <th>Nomor Member</th>
			    <th>Alamat</th>
			    <th>Tanggal Mendaftar</th>
			    <th>Tanggal Terakhir Bayar</th>
                <th></th>
		    </tr>
            </thead>
            <tbody>
                <?php
                require_once 'Koneksi.php';
                $tampil = "SELECT * FROM Member";
                $query = mysqli_query($koneksi, $tampil);
                while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
				    <td><?php echo $data['nama_member']; ?></td>
				    <td><?php echo $data['nomor_member']; ?> </td>
				    <td><?php echo $data['alamat']; ?> </td>
				    <td><?php echo $data['tgl_mendaftar']; ?></td>
                    <td><?php echo $data['tgl_terakhir_bayar']; ?></td>
                    <td>
                    <a href="FormMember.php?id_member=<?=$data['id_member']?>" class="btn btn-success">Edit</a> |
                    <a href="Member.php?id_member=<?=$data['id_member']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
            </table>
        </body>
    </head>
</html>