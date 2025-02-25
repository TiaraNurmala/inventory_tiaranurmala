<?php 

$id_jenis = $_GET['id_jenis'];
$nama_jenis = $_POST['nama_jenis'];


include '../../config/koneksi.php';

$query= mysqli_query($conn,
"UPDATE jenis SET nama_jenis='$nama_jenis' WHERE id_jenis='$id_jenis'");


if($query){
    echo "<script>alert('data berhasil diedit')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
    echo "<script>alert('data gagal diedit')</script>";
    echo "<script>window.location.href='tambah.php'</script>";
}
  