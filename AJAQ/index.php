<!DOCTYPE html>
<html>
<head>
	<title>--AJAX N JQUERY--</title>
	<link rel="stylesheet" type="text/css" href="css.css">
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>

	<style >
		body {
			background-color: #eee;
		}

	</style>
	<header>
		<img src="3.jpg"></center>
			 <br/>
	</header>

	<menu>
		<li><a href=""> CONTACT </a></li>
		<li><a href=""> HOME </a> </li>
		
	</menu>
		<div class="recomended">

		<h2> PERSONAL DETAILS </h2>
			<table border="1"> 
			<img src="2.jpg" alt="1" width="150px" height="200px">
			<br/>
			NAMA : SHERLI NUR DIANA <br/>
			EMAIL : dianasherli99@gmail.com <br/>
			ALAMAT : LAMONGAN <br/>
			</table>
		</div>
</div>
	<a href=""> TAMBAHKAN RIWAYAT PENDIDIKAN </a>
	<form action="simpan.php" method="POST">
			<input type="text" name="sd" placeholder="pendidikan dasar anda.."/>
			<input type="text" name="smp" placeholder="pendidikan menengah pertama.." />
			<input type="text" name="sma" placeholder="pendidikan menengah akhir.." />
			<input type="text" name="ptn" placeholder="perguruan tinggi .." />
			<input type="submit" name="submit" value="submit" />
			
		</form>
		<hr/>
	

	<div id="content">

</div>
		
	<script type="text/javascript">

		$(document).ready(function(){
			loadData();
			$('form').on('submit',function(e){
				e.preventDefault();
				$.ajax({
					type:$(this).attr('method'),
					url:$(this).attr('action'),
					data:$(this).serialize(),
					success:function(){
						loadData();
						resetForm();
					}
				});

			})
		})
		function loadData(){
			$.get('data.php',function(data){
				$('#content').html(data);
				$('.hapusData').click(function(e){
					e.preventDefault();
					$.ajax({
					type:'get',
					url:$(this).attr('href'),
					success:function(){
						loadData();
						
					}
				});


			});
				$('.updateData').click(function(e){
					e.preventDefault();

					$('[name=sd]').val($(this).attr('sd'));
					$('[name=smp]').val($(this).attr('smp'));
					$('[name=sma]').val($(this).attr('sma'));
					$('[name=ptn]').val($(this).attr('ptn'));
					$('form').attr('action',$(this).attr('href'));

				});

	})	
				
}

		function resetForm(){
			$('[type=text]').val('');
			$('[name=sd]').focus();
			$('form').attr('action','simpan.php');
			

		}
		


	</script>

	<footer>
		<center><a href=""> LAINNYA </a></center>
	</footer>
		
	</menu>
</body>
</html>