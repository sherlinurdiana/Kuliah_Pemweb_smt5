<?php 
$konn = mysqli_connect("localhost","root","","akademik2");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>