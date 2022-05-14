<?php
require_once "Koneksi.php";

function tambahmember($koneksi){
    if(isset($_POST['tambah_member'])){
    $id_member = $_POST['id_member'];
    $nama_member = $_POST['nama_member'];
    $nomor_member = $_POST['nomor_member'];
    $alamat = $_POST['alamat'];
    $tgl_mendaftar = $_POST['tgl_mendaftar'];
    $tgl_terakhir_bayar = $_POST['tgl_terakhir_bayar'];

    $tambah = "INSERT INTO member VALUES ('$id_member', '$nama_member', '$nomor_member', '$alamat', '$tgl_mendaftar', '$tgl_terakhir_bayar')";
    $simpan = mysqli_query($koneksi, $tambah);
        if(!$simpan){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
        }
    }
    header("location: Member.php");
}

function tambahbuku($koneksi){
    if(isset($_POST['tambah_buku'])){
    $id_buku = $_POST['id_buku'];
    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    
    $tambah = "INSERT INTO buku VALUES ('$id_buku', '$judul_buku', '$penulis', '$penerbit', '$tahun_terbit')";
    $simpan = mysqli_query($koneksi, $tambah);
        if(!$simpan){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
            " - ".mysqli_error($koneksi));
        }
    }
    header("location: Buku.php");
}

function tambahpeminjaman($koneksi){
    if(isset($_POST['tambah_peminjam'])){
    $id_peminjam = $_POST['id_peminjam'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];
    
    $tambah = "INSERT INTO peminjaman VALUES ('$id_peminjam', '$tgl_pinjam', '$tgl_kembali')";
    $simpan = mysqli_query($koneksi, $tambah);
        if(!$simpan){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
            " - ".mysqli_error($koneksi));
        }
    }
    header("location: Peminjaman.php");
}

function updatemember($koneksi){
    if(isset($_POST['update_member'])){
    $id_member = $_POST['id_member'];
    $nama_member = $_POST['nama_member'];
    $nomor_member = $_POST['nomor_member'];
    $alamat = $_POST['alamat'];
    $tgl_mendaftar = $_POST['tgl_mendaftar'];
    $tgl_terakhir_bayar = $_POST['tgl_terakhir_bayar'];

    $update = "UPDATE member SET nama_member = '$nama_member', nomor_member = '$nomor_member', alamat = '$alamat', tgl_mendaftar = '$tgl_mendaftar', tgl_terakhir_bayar = '$tgl_terakhir_bayar' WHERE id_member = '$id_member')";
    $simpan = mysqli_query($koneksi, $update);
        if(!$simpan){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
        }
    }
    header("location: Member.php");
}

function updatebuku($koneksi){
    if(isset($_POST['update_buku'])){
    $id_buku = $_POST['id_buku'];
    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];

    $update = "UPDATE buku SET judul_buku = '$judul_buku', penulis = '$penulis', penerbit = '$penerbit', tahun_terbit = '$tahun_terbit' WHERE id_buku = '$id_buku')";
    $simpan = mysqli_query($koneksi, $update);
        if(!$simpan){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
        }
    }
    header("location: Buku.php");
}

function updatepeminjaman($koneksi){
    if(isset($_POST['update_peminjaman'])){
    $id_peminjam = $_POST['id_peminjam'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];

    $update = "UPDATE peminjaman SET tgl_pinjam = '$tgl_pinjam', tgl_kembali = '$tgl_kembali' WHERE id_peminjam = '$id_peminjam')";
    $simpan = mysqli_query($koneksi, $update);
        if(!$simpan){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
        }
    }
    header("location: Peminjaman.php");
}

function hapusmember($koneksi){
    if(isset($_POST['hapus_member'])){
        $id_member = $_POST['id_member'];

        $hapus = "DELETE FROM member WHERE id_member = '$id_member'";
        $simpan = mysqli_query($koneksi, $hapus);
        if(!$simpan){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
            " - ".mysqli_error($koneksi));
        }
    }
    header("location: Member.php");
}

function hapusbuku($koneksi){
    if(isset($_POST['hapus_buku'])){
        $id_member = $_POST['id_buku'];

        $hapus = "DELETE FROM buku WHERE id_buku = '$id_buku'";
        $simpan = mysqli_query($koneksi, $hapus);
        if(!$simpan){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
            " - ".mysqli_error($koneksi));
        }
    }
    header("location: Buku.php");
}

function hapuspeminjaman($koneksi){
    if(isset($_POST['hapus_peminjaman'])){
        $id_member = $_POST['id_peminjaman'];

        $hapus = "DELETE FROM peminjaman WHERE id_peminjaman = '$id_peminjaman'";
        $simpan = mysqli_query($koneksi, $hapus);
        if(!$simpan){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
            " - ".mysqli_error($koneksi));
        }
    }
    header("location: Peminjaman.php");
}
?>