<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$database = "perpustakaan";

$connect = new mysqli ($hostname, $username, $password, $database);

if($connect->connect_error) {
    die ('Maaf koneksi gagal :'. $connect->connect_error);
}
 ?>