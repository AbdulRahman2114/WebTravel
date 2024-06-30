<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "travel";

$conn = new mysqli($server,$username,$password,$database);

if($conn){
}
//mysqli_connect($server,$username,$password,$database) or die("Koneksi gagal");
//mysqli_select_db($database) or die("Database tidak bisa dibuka");
?>