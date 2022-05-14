<html>
    <head>
        <title>Data Buku</title>
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
        <center><h1>Data Buku</h1></center>
            <table border=1>
            <thead>
            <tr>
			    <th>Judul Buku</th>
			    <th>Penulis</th>
			    <th>Penerbit</th>
			    <th>Tahun Terbit</th>
                <th></th>
		    </tr>
            </thead>
            <tbody>
                <?php
                require_once 'Koneksi.php';
                $tampil = "SELECT * FROM buku";
                $query = mysqli_query($koneksi, $tampil);
                while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
				    <td><?php echo $data['judul_buku']; ?></td>
				    <td><?php echo $data['penulis']; ?> </td>
				    <td><?php echo $data['penerbit']; ?> </td>
				    <td><?php echo $data['tahun_terbit']; ?></td>
                    <td>
                    <a href="FormBuku.php?id_buku=<?=$data['id_buku']?>" class="btn btn-success">Edit</a> |
                    <a href="Buku.php?id_buku=<?=$data['id_buku']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
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