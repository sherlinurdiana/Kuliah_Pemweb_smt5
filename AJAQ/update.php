<?php 

include 'coneksi.php';

	

$id = $_GET['id'];
$sd = $_POST['sd'];
$smp = $_POST['smp'];
$sma = $_POST['sma'];
$ptn = $_POST['ptn'];
 
// menginput data ke database
mysqli_query($coneksi,"update riwayatpendidikan set sd='$sd', smp='$smp', sma='$sma', ptn='$ptn' WHERE id='$id'");

header("location: http://localhost/AJAQ");


?>