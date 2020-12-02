<?php 
// koneksi database
include 'coneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
// menghapus data dari database
mysqli_query($coneksi,"delete from riwayatpendidikan where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location: http://localhost/AJAQ");
 
?>