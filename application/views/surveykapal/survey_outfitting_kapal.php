<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Survey Outfitting Kapal</title>
  <!-- css -->
    <link href="<?php echo base_url(); ?>assets/blocks/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/blocks/css/main.css" rel="stylesheet">
    <!-- DATA TABLE CSS -->
    <link href="<?php echo base_url(); ?>assets/blocks/css/table.css" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
</head>

<!-- Semangat!  -->

<body style="font-size:20px;">
  	<div class="container">

      <!-- CONTENT -->
	<div class="row">
		<div class="col-sm-12 col-lg-12">
			<div class="judul-konten">
				<p>Survey Kapal</p>
			</div>
			<a href="<?php echo base_url(); ?>home/rekapitulasi_hasil_survey" class="rekap">Rekapitulasi</a>
			<table class="display">
	          	<thead>
	            <tr>
	              <th><a href="<?php echo base_url(); ?>home/survey_lambung_kapal">Lambung</a></th>
	              <th><a href="<?php echo base_url(); ?>home/survey_permesinan_kapal">Permesinan</a></th>
	              <th style="background-color: #FFFFFF;"><a style="color: #2F8ABB;" href="<?php echo base_url(); ?>home/survey_outfitting_kapal">Outfitting</a></th>
	            </tr>
	        	</thead>
	        </table>
	        <table class="display" style="margin-bottom:0px;">
	          <thead>
	            <tr>
	              <th style="background-color:white;color:black;">Survey Outfitting Kapal</th>
	            </tr>
	          </thead>
	        </table>
	        <table class="display">
	          <thead>
	            <tr>
	              <th>Nama</th>
	              <th>Bagian</th>
	              <th>Kondisi</th>
	              <th>Depresiasi</th>
	           	</tr>
	          </thead>
	          <tbody>
	           <?php
	          	//Permesinan
	          	$no=0;
	          	$query = $this->db->get('survey_outfitting_kapal');
				foreach ($query->result() as $row){
				if(++$no%2==1)
					echo "<tr class='odd'>";
				else
					echo "<tr class='even'>";
				if($no==1)
					echo "<td rowspan='3'>Dek dan tambat</td>";
				else if($no>3)
					echo "<td>".$row->Nama_Outfitting."</td>";
				echo "<td>".$row->Bagian_Outfitting."</td>";
				echo "<td>".$row->Kondisi_Outfitting."</td>";
				echo "<td>".$row->Depresiasi_Outfitting."</td></tr>";
				}
				?>
</body>


</html>
