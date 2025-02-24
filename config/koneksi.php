<?php 

//variable
$hostname = 'localhost';
$username = 'root';
$password = '';
$database_name ='inventory_tiaranurmala';

$conn = mysqli_connect( $hostname,$username,$password,$database_name);

if(!$conn){
    die('Koneksi gagal' . mysqli_connect_error());
}