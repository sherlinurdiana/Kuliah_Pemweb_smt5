
<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body> 
	<style >
		body {
			background-color: #eee;
		}

	</style>
	<header>
		<img src="F.jpg"></center>
			 <br/>
	</header>

	<menu>
		<li><a href=""> CONTACT </a></li>
		<li><a href=""> HOME </a> </li>
		
	</menu>
		<div class="recomended">

		<h2> PERSONAL DETAILS </h2>
			<table border="1"> </table>
			<img src="2.jpg" alt="1" width="150px" height="200px"><br/>
		</div>
</div>




	<br/>
	<a href="tambah.php">+ TAMBAH MAHASISWA</a>
	<br/>
	<br/>
	<table border="2" style="background-color: #33CC00">
		<tr>
			<th>id</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Gender</th>
			<th>Contac</th>
			<th>TK</th>
			<th>SD</th>
			<th>SMP</th>
			<th>SMA</th>
			<th>Alamat</th>
			<th>OPSI</th>
		</tr>
		<?php 

		include 'konn.php';
		
		$no = 1;
		$data = mysqli_query($konn,"select * from mahasiswa1");

		while($d = mysqli_fetch_array($data)) {
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td><?php echo $d['gender']; ?></td>
				<td><?php echo $d['contac']; ?></td>
				<td><?php echo $d['tk']; ?></td>
				<td><?php echo $d['sd']; ?></td>
				<td><?php echo $d['smp']; ?></td>
				<td><?php echo $d['sma']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>

	<footer>
		
		<center><a href=""> LAINYA </a></center>
		
	</menu>
		
	</footer>
</body>
</html>