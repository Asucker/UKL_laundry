<?php
if($_POST){
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $Kota=$_POST['Kota'];
    $Alamat=$_POST['Alamat'];
    $password= $_POST['password'];
    $role=$_POST['role'];
    if(empty($nama)){
        echo "<script>alert('nama user tidak boleh kosong');location.href='tambah_user.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_user.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_user.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into user (nama, username, kota, alamat, password, role) 
        value ('".$nama."','".$username."','".$Kota."','".$Alamat."','".md5($password)."','".$role."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan');location.href='tampil_user.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan');location.href='tampil_user.php';</script>";
        }
    }
}
?>