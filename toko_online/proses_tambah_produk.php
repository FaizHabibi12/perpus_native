<?php
if($_POST){
    $nama_produk=$_POST['nama_produk'];
    $deskripsi=$_POST['deskripsi'];
    $harga=$_POST['harga'];
    // Assuming these fields are meant to be included in your form
    $username=$_POST['root'];
    $password= $_POST[''];
    $id_produk=$_POST['id_produk'];
    if(empty($nama_produk)){
        echo "<script>alert('nama produk tidak boleh kosong');location.href='tambah_produk.php';</script>";
    // } elseif(empty($username)){
    //     echo "<script>alert('username tidak boleh kosong');location.href='tambah_produk.php';</script>";
    // } elseif(empty($password)){
    //     echo "<script>alert('password tidak boleh kosong');location.href='tambah_produk.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($toko_online,"insert into toko_produk (nama_produk, deskripsi, harga) values ('".$nama_produk."','".$deskripsi."','".$harga."')") or die(mysqli_error($toko_online));
        if($insert){
            echo "<script>alert('Sukses menambahkan produk');location.href='tambah_produk.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan produk');location.href='tambah_produk.php';</script>";
        }
    }
}
?>