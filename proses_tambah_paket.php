<?php
if($_POST){
        $nama_paket=$_POST['nama_paket'];
        $jenis=$_POST['jenis'];
        $harga=$_POST['harga'];
        if(empty($nama_paket)){
            echo "<script>alert('Jenis tidak boleh kosong');location.href='tambah_paket.php';</script>";
        } else {
            include "koneksi.php";
            $insert=mysqli_query($conn,"insert into paket (nama_paket,jenis,harga) value ('".$nama_paket."','".$jenis."','".$harga."')") or die(mysqli_error($conn));
            if($insert){
                echo "<script>alert('Sukses menambahkan paket');location.href='tampil_paket.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan paket');location.href='tambah_paket.php';</script>";
            }
        }
    }
?>
