<?php
// buat koneksi dengan database mysql
$dbhost = "127.0.0.1:3372";
$dbuser = "root";
$dbpass = "root";
$dbname = "bk";
$link = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

//periksa koneksi, tampilkan pesan kesalahan jika gagal
if(!$link){
  die ("Koneksi dengan database gagal: ".mysqli_connect_errno().
       " - ".mysqli_connect_error());
}
?>
