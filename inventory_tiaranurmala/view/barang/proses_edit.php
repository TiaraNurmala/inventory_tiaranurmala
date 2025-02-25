<?php 

$id_barang = $_GET['id_barang'];
$nama_barang = $_POST['nama_barang'];
$id_jenis = $_POST['id_jenis'];
$harga = $_POST['harga'];
$stok= $_POST['stok'];


include '../../config/koneksi.php';

$query= mysqli_query($conn,
"UPDATE barang SET nama_barang='$nama_barang', id_jenis='$id_jenis', harga='$harga', stok='$stok' WHERE id_barang='$id_barang'");


if($query){
    echo "<script>alert('data berhasil diedit')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
    echo "<script>alert('data gagal diedit')</script>";
    echo "<script>window.location.href='proses_tambah.php'</script>";
}
  