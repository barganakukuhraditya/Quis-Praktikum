<?php
$server = "localhost";
$user = "root";
$password = "";
$namadb = "pegawai";

$koneksi= mysqli_connect($server, $user, $password, $namadb);

if(!$namadb){
    die("Gagal terhubung dengan database : ". mysqli_connect_error());
}
?>