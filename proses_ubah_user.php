<?php
if($_POST){
    $id_user=$_POST['id_user'];
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
        if(empty($password)){
            $update=mysqli_query($conn,"update user set id_user='".$id_user."', nama='".$nama."', username='".$username."', kota='".$Kota."', alamat='".$Alamat."', role='".$role."' where id_user = '".$id_user."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update');location.href='tampil_user.php';</script>";
            } else {
                echo "<script>alert('Gagal update');location.href='ubah_user.php?id_user=".$id_user."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update user set id_user='".$id_user."', nama='".$nama."', username='".$username."', kota='".$Kota."', alamat='".$Alamat."', password='".md5($password)."', role='".$role."' where id_user = '".$id_user."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update');location.href='tampil_user.php';</script>";
            } else {
                echo "<script>alert('Gagal update');location.href='ubah_user.php?id_user=".$id_user."';</script>";
            }
        }
        
    } 
}
?>