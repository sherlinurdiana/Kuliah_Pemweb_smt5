<!DOCTYPE html>
<html>
<head>
	<title> Tugas Pemweb 3</title>
	<style type="text/css">
	body {
	background : #eee;
}

	</style>
	<Link rel="stylesheet" type="text/css" href="960_12_col.css">
</head>

<body>

<div class="container_12" style="border : 2px solid #000;margin-top: -6px; background:#eee">

		<div class="grid_12" style="padding-bottom: 15px; background : #996633">

		<?php
		$Desain ="DESAIN ANIMATION CV";
		echo "<center> $Desain </center>"; 
		?>



		</div> 
		<div class="container_12">
		<div class="grid_12" style=" padding-bottom: 10px;background: #cc9922">

		 <?php 
		 $cv="CURICULUM VITAE";
		  echo "$cv" ;

		  ?>


		</div>
	</div>


	<div class="container_12" style="border : 1px solid #000;">
		<div class="grid_6" style="padding-top: -10px;background: #ccc999">


		<?php 
		$Info="INFORMATION :";
		echo "<center><strong>$Info</strong></center>" ;
		?>

		 <br/><center><img src="1.jpg" alt="1" width="100px" height="150px"></center><br/>

		 <?php

		 $Nama =" SHERLI NUR DIANA ";
		 $Agama="Islam";
		 $EMAIL=" dianasherli99@gmail.com";
		 $Contact=" 0895-6131-91885";
		 $Jenis="PEREMPUAN";
		 $Alamat="Jl.sunan Kalijaga,Babat,Lamongan";

		  
		 echo "
		 <ul>
		 	<li><strong>NAMA : <br/></strong> $Nama<br/></li> 
		 	<li><strong>AGAMA : <br/></strong> $Agama<br/></li> 
		 	<li><strong>EMAIL: <br/></strong> $EMAIL<br/></li>
		 	<li><strong>CONTACT : <br/></strong> $Contact<br/></li>
		 	<li><strong>JENIS KELAMIN : <br/></strong> $Jenis<br/></li> 
		 	<li><strong>ALAMAT : <br/></strong> $Alamat<br/></li> 
		 	</ul>"
		 ?>



		</div>

		<div class="grid_6 alpha" style="border : 1px solid #000; padding-right: 7px; padding-bottom:135px; background: #999966">

			<?php 

			$Pendidikan="EDUCATION FORMAL:";
			$Pendidikan2="EDUCATION NON FORMAL:";
			$kursus="KURSUS PEMROGRAMAN = 2018";
			$tk="TK ALIM 2006-2007";
			$sd="SDN BANARAN 1 2007-2012";
			$smp="SMPN 3 BABAT 2012-2015";
			$sma="SMAM 1 BABAt 2015-2018";
			$kuliah="UPN VETERAN Jawa Timur 2018-Sekarang";


			echo "<strong><center><br/>$Pendidikan </center></strong><br/>

			<ul>
				<li>$tk<br/></li>
				<li>$sd<br/></li>
				<li>$smp<br/></li>
				<li>$sma<br/></li>
				<li>$kuliah<br/><br/><br/></li>

			<strong><center><br/><br/><br/>$Pendidikan2</center></strong><br/>
				<li>$kursus<br/></li> 

				</ul>" ;
			?>

		</div>
	</div>


	<div class="container_12" style="border : 1px solid #000;">

		<div class="grid_6" style=" padding-bottom: 20px;background: #ccc999">
		
 		<?php
		  $skil="SKIL";
		  $MW="Microsoft Word ***";
		  $ME="Microsoft Exel ***";
		  $MP="Microsoft Power Point ***";
		  $PR="Pemrograman **";

		 	echo "<strong><center><br/>SKILL: </center></strong><br/>

		 	<ul>
		 	<li>$MW</li>
		 	<li>$ME</li>
		 	<li>$MP</li>
		 	<li>$PR</li>
		 	</ul>";
		 ?>

		</div>
		<div class="grid_6 alpha" style= "border : 1px solid #000; padding-right: 7px; padding-bottom: 50px;background: #999966">

			<?php 
			$kilas="SEKILAS TENTANG DIRI:";
			$saya="Saya adalah seorang mahasiswi yang masih belajar dalam berbagai aspek. Saya memiliki kemauan dalam mencoba hal baru.Saya suka menulis dan membuat karangan.Saya akan berusaha semaksimal mungkin ketika menapaki lingkungan baru, agar dapat bermanfaat untuk orang disekitar saya.";

			echo" <center><strong>$kilas</center></strong><br/>
		 	<center>$saya</center>"?>
	
		</div>
	</div>


	<div class="container_12" style="border : 1px solid #000;">
		<div class="grid_12" style="padding-right: -4px; padding-bottom: 10px;background: #996633">
		<?php 
		$foter="<center>Lainnya</center>";
		echo "$foter"
		?>
		</div>
	</div>
</body>
</html>