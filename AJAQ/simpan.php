<?php 

include 'coneksi.php';

	
$id = $_POST['id'];
$sd = $_POST['sd'];
$smp = $_POST['smp'];
$sma = $_POST['sma'];
$ptn = $_POST['ptn'];
 
// menginput data ke database
mysqli_query($coneksi,"insert into riwayatpendidikan values('','$sd','$smp','$sma','$ptn')");

header("location: http://localhost/AJAQ");


?>