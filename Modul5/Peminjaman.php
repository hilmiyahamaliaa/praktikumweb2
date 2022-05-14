<html>
    <head>
    <title>Data Peminjaman</title>
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
        <center><h1>Data Peminjaman</h1></center>
            <table border=1>
            <thead>
            <tr>
			    <th>Tanggal Pinjam</th>
			    <th>Tanggal Kembali</th>
                <th></th>
		    </tr>
            </thead>
            <tbody>
                <?php
                require_once 'Koneksi.php';
                $tampil = "SELECT * FROM Peminjaman";
                $query = mysqli_query($koneksi, $tampil);
                while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
				    <td><?php echo $data['tgl_pinjam']; ?></td>
				    <td><?php echo $data['tgl_kembali']; ?> </td>
                    <td>
                    <a href="FormPeminjaman.php?id_member=<?=$data['id_peminjaman']?>" class="btn btn-success">Edit</a> |
                    <a href="Peminjaman.php?id_member=<?=$data['id_peminjaman']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
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