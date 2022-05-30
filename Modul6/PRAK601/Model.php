<?php
require_once "Koneksi.php";

//------TAMBAH DATA------//

function tambahmember($id_member,$nama_member,$nomor_member,$alamat,$tgl_mendaftar,$tgl_terakhir_bayar)
{
    $sql = "INSERT INTO member(id_member,nama_member,nomor_member,alamat,tgl_mendaftar,tgl_terakhir_bayar)values(:id_member,:nama_member,:nomor_member,:alamat,:tgl_mendaftar,:tgl_terakhir_bayar)";
    $stmt = koneksi()->prepare($sql);
    $hasil = $stmt->execute(array(':id_member' => $id_member, ':nama_member'=>$nama_member,':nomor_member'=>$nomor_member,':alamat'=>$alamat,':tgl_mendaftar'=>$tgl_mendaftar,':tgl_terakhir_bayar'=>$tgl_terakhir_bayar));
    if (!empty($hasil)) {
        header('location:Member.php');
    }
}

function tambahbuku($id_buku,$judul,$penulis,$penerbit,$tahun_terbit)
{
    $sql = "INSERT INTO buku(id_buku,judul_buku,penulis,penerbit,tahun_terbit)values(:id_buku,:judul,:penulis,:penerbit,:tahun_terbit)";
    $stmt = koneksi()->prepare($sql);
    $hasil = $stmt->execute(array(':id_buku' => $id_buku, ':judul'=>$judul,':penulis'=>$penulis,':penerbit'=>$penerbit,':tahun_terbit'=>$tahun_terbit));
    if (!empty($hasil)) {
        header('location:Buku.php');
    }
}

function tambahpeminjaman($id_peminjam,$tgl_pinjam,$tgl_kembali)
{
    $sql = "INSERT INTO peminjaman(id_peminjam,tgl_pinjam,tgl_kembali)values(:id_peminjam,:tgl_pinjam,:tgl_kembali)";
    $stmt = koneksi()->prepare($sql);
    $hasil = $stmt->execute(array(':id_peminjam' => $id_peminjam,':tgl_pinjam'=>$tgl_pinjam,':tgl_kembali'=>$tgl_kembali));
    if (!empty($hasil)) {
        header('location:Peminjaman.php');
    }
}

//------UPDATE DATA------//

function updatemember($id,$nama,$nomor_member,$alamat,$tgl_mendaftar,$tgl_terakhir_bayar)
{
    $pdo_statement = koneksi()->prepare(
        "update member set nama_member='" . $nama . "', nomor_member ='" . $nomor_member . "', alamat='" . $alamat . "', tgl_mendaftar='" . $tgl_mendaftar . "', tgl_terakhir_bayar='".$tgl_terakhir_bayar."' where id_member=" . $id
    );
    $hasil = $pdo_statement->execute();
    if($hasil){
        header('location:Member.php');
    }
}

function updatebuku($id,$judul,$penulis,$penerbit,$tahun_terbit)
{
    $pdo_statement = koneksi()->prepare(
        "update buku set judul_buku='" . $judul . "', penulis='" . $penulis . "', penerbit='" . $penerbit . "', tahun_terbit='" . $tahun_terbit . "' where id_buku=" . $id
    );
    $hasil = $pdo_statement->execute();
    if($hasil){
        header('location:Buku.php');
    }
}

function updatepeminjaman($id_peminjam,$tgl_pinjam,$tgl_kembali)
{
    $pdo_statement = koneksi()->prepare(
        "update peminjaman set tgl_pinjam='" . $tgl_pinjam . "', tgl_kembali='" . $tgl_kembali . "' where id_peminjam=" . $id_peminjam
    );
    $hasil = $pdo_statement->execute();
    if($hasil){
        header('location:Peminjaman.php');
    }
}

//------HAPUS DATA------//

function hapusmember($id_member){
    $stmt = koneksi()->prepare("DELETE FROM member WHERE id_member=".$id_member);
    $hasil= $stmt->execute();
    if($hasil){
        header('location:Member.php');
    }
}

function hapusbuku($id_buku){
    $stmt = koneksi()->prepare("DELETE FROM buku where id_buku=" . $id_buku);
    $hasil = $stmt->execute();
    if ($hasil) {
        header('location:Buku.php');
    }
}

function hapuspeminjaman($id_peminjam){
    $stmt = koneksi()->prepare("DELETE FROM peminjaman WHERE id_peminjam=".$id_peminjam);
    $hasil= $stmt->execute();
    if($hasil){
        header('location:Peminjaman.php');
    }
}

//------EDIT DATA------//

function editmember(){
    $stmt = koneksi()->prepare("SELECT * FROM member WHERE id_member =".$_GET['id_member']);
    $stmt->execute();
    $GLOBALS['result'] = $stmt->fetchAll();
}

function editbuku(){
    $stmt = koneksi()->prepare("SELECT * FROM buku WHERE id_buku =".$_GET['id_buku']);
    $stmt->execute();
    $GLOBALS['result'] = $stmt->fetchAll();
}

function editpeminjaman(){
    $stmt = koneksi()->prepare("SELECT * FROM peminjaman WHERE id_peminjam =".$_GET['id_peminjam']);
    $stmt->execute();
    $GLOBALS['result'] = $stmt->fetchAll();
}

//------TAMPIL DATA------//

function tampilmember(){
    $stmt = koneksi()->prepare("SELECT * FROM member");
    $stmt->execute();
    $hasil = $stmt -> fetchAll();
    if(!empty($hasil)){
        foreach ($hasil as $datamember){
            echo"<tr>";
            echo"<td>".$datamember['id_member']."</td>";
            echo"<td>".$datamember['nama_member']."</td>";
			echo"<td>".$datamember['nomor_member']."</td>";
			echo"<td>".$datamember['alamat']."</td>";
			echo"<td>".$datamember['tgl_mendaftar']."</td>";
            echo"<td>".$datamember['tgl_terakhir_bayar']."</td>";
            echo"<td>";
            echo"<a href='FormMember.php?id_member=".$datamember['id_member']."'>Edit</a> |";
            echo"<a href='Member.php?id_member=".$datamember['id_member']."' onclick=\"return confirm('Apakah anda yakin menghapus data ini?')\">Hapus</a>";
            echo"</td>";
            echo"</tr>";
        }
    }
}

function tampilbuku(){
    $stmt = koneksi()->prepare("SELECT * FROM buku");
    $stmt->execute();
    $hasil = $stmt -> fetchAll();
    if(!empty($hasil)){
        foreach ($hasil as $databuku){
            echo"<tr>";
            echo"<td>".$databuku['id_buku']."</td>";
            echo"<td>".$databuku['judul_buku']."</td>";
			echo"<td>".$databuku['penulis']."</td>";
			echo"<td>".$databuku['penerbit']."</td>";
			echo"<td>".$databuku['tahun_terbit']."</td>";
            echo"<td>";
            echo"<a href='FormBuku.php?id_buku=".$databuku['id_buku']."'>Edit</a> |";
            echo"<a href='Buku.php?id_buku=".$databuku['id_buku']."' onclick=\"return confirm('Apakah anda yakin menghapus data ini?')\">Hapus</a>";
            echo"</td>";
            echo"</tr>";
        }
    }
}

function tampilpeminjaman(){
    $stmt = koneksi()->prepare("SELECT * FROM peminjaman");
    $stmt->execute();
    $hasil = $stmt -> fetchAll();
    if(!empty($hasil)){
        foreach ($hasil as $datapeminjaman){
            echo"<tr>";
            echo"<td>".$datapeminjaman['id_peminjam']."</td>";
            echo"<td>".$datapeminjaman['tgl_pinjam']."</td>";
			echo"<td>".$datapeminjaman['tgl_kembali']."</td>";
            echo"<td>";
            echo"<a href='FormPeminjaman.php?id_peminjam=".$datapeminjaman['id_peminjam']."'>Edit</a> |";
            echo"<a href='Peminjaman.php?id_peminjam=".$datapeminjaman['id_peminjam']."' onclick=\"return confirm('Apakah anda yakin menghapus data ini?')\">Hapus</a>";
            echo"</td>";
            echo"</tr>";
        }
    }
}
?>