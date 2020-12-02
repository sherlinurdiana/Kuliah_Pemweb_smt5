<?php 
$coneksi = mysqli_connect("localhost","root","","pendidikan");
 
// Check connection
if (mysqli_connect_error()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
	
	header("location: http://localhost/AJAQ");

}
 
?>

