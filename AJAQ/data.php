<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
		<table border="" style="background-color: #33CC00" width="960px" height="60px">

		<tr>
			<th>id</th>
			<th>SD</th>
			<th>SMP</th>
			<th>SMA</th>
			<th>Perguruan Tinggi</th>
			<th>OPSI</th>
		</tr>
<?php 

		include 'coneksi.php';
		
		$no = 1;
		$data = mysqli_query($coneksi,"select * from riwayatpendidikan");

		while($d = mysqli_fetch_array($data)) {
			?>

			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['sd']; ?></td>
				<td><?php echo $d['smp']; ?></td>
				<td><?php echo $d['sma']; ?></td>
				<td><?php echo $d['ptn']; ?></td>
				<td>

					
					<a class='hapusData' href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS </a>
					<a class='updateData' href="update.php?id=<?php echo $d['id']; ?>">EDIT</a>


					
				</td>
			</tr>
			<?php 
		}
?>
</table>
</body>
</html>