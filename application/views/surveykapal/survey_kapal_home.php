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
    <link href="<?php echo base_url(); ?>assets/mamba/css/font-awesome.min.css" rel="stylesheet" media="screen">
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
				<p>Survey Kapal</p>
			</div>
				<div class="container">
					<div class="row">
						<div class="col-md-12" style="margin-top:30px;">
							<div class="col-md-6">
								<div class="brand">
									<h1><a class="hvr-float-shadow" href="<?php echo base_url(); ?>home/survey_dokumen_kapal">Survey <br>Dokumen</a></h1>
									<div class="line-spacer"></div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="brand">
									<?php
									$row = $this->db->get_where('survey_dokumen', array('id' => 1))->row();
									$result = strcmp($row->Kondisi_Dokumen, "belum_dibuka");
									if (!$result) {
										echo "<h1><a href='#'>Survey <br>Kondisi Kapal</a></h1>";
									}
									else{
										echo "<h1><a class='hvr-float-shadow' href='".base_url()."home/survey_lambung_kapal'>Survey <br>Kondisi Kapal</a></h1><div class='line-spacer'></div>";
									}?>
									
								</div>
							</div>
						</div>
					</div>
					<p style="margin-top:70px;color:white;font-size: 20px;">Keterangan : Dalam melakukan penilaian kapal, bagian yang dicek dahulu adalah dokumen kapal kemudian kondisi kapal. Kondisi kapal dapat diakses apabila dokumen kapal sudah diakses.</p>
					<div class="col-md-12" style="margin-top:80px;margin-bottom:20px;">
						<h3><a style="color:white;" class="hvr-grow-shadow" href="<?php echo base_url(); ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></h3>
					
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
