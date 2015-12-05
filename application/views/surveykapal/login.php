<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Survey kapal</title>
  <!-- CSS  -->
  <link href="<?php echo base_url(); ?>assets/css/materialize/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url(); ?>assets/css/materialize/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <!-- css -->
  	<link href="<?php echo base_url(); ?>assets/css/bootstrap-3.3.5-dist/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url(); ?>assets/mamba/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url(); ?>assets/mamba/css/style.css" rel="stylesheet" media="screen">
	<link href="<?php echo base_url(); ?>assets/mamba/color/default.css" rel="stylesheet" media="screen">
	<link href="<?php echo base_url(); ?>assets/css/hover/hover.css" rel="stylesheet" media="screen">
	<script src="<?php echo base_url(); ?>assets/mamba/js/modernizr.custom.js"></script>
</head>

<!-- Semangat!  -->

<body>
  	<div id="intro">
			<div class="intro-text">
			<div class="upper-intro">
				<h5>Tugas Akhir (MN141581)</h5>
				<p>PERANCANGAN APLIKASI BERBASIS KOMPUTER UNTUK MENINGKATKAN INTUISI</p>
				<p>DALAM MELAKUKAN PENILAIAN HARGA KAPAL BEKAS</p>
				<h5>Hakara Warid (4111100103)</h5>
			</div>
				<div class="container">
					<div class="row">
					<div class="col-md-4">
					</div>
					<div class="col-md-4">
						<div class="brand">
						<form action="<?php echo base_url(); ?>home/login_proses" method="POST">
							<input name="username" type="text" style="height:50px;font-size:40px;color:white;text-align:center;" placeholder="Username">
							<input name="password" type="password" style="height:50px;font-size:40px;color:white;text-align:center;" placeholder="Password">
							<input type="submit" value="Login" style="height:50px;width:100%;">
						</form>
						</div>
					</div>
					<div class="col-md-4">
					</div>
					</div>
				</div>
		 	</div>
	 </div>
	 <footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>Tugas Akhir - Hakara Warid</p>
				</div>
			</div>		
		</div>	
	</footer>
</body>


</html>
