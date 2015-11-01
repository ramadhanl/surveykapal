<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Survey kondisi kapal</title>
  <!-- css -->
    <link href="<?php echo base_url(); ?>assets/blocks/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/blocks/css/main.css" rel="stylesheet">
    <!-- DATA TABLE CSS -->
    <link href="<?php echo base_url(); ?>assets/blocks/css/table.css" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
</head>

<!-- Semangat!  -->

<body>
  	<div class="container">

      <!-- CONTENT -->
	<div class="row">
		<div class="col-sm-12 col-lg-12">
			<div class="judul-konten">
				<p>Survey kondisi kapal </p>
			</div>
			<a href="<?php echo base_url(); ?>home/rekapitulasi_hasil_survey" class="rekap">Rekapitulasi</a>
			<table class="display">
	          	<thead>
	            <tr>
	              <th style="background-color: #2F8ABB;"><a href="<?php echo base_url(); ?>home/survey_lambung_kapal">Lambung</a></th>
	              <th><a href="<?php echo base_url(); ?>home/survey_permesinan_kapal">Permesinan</a></th>
	              <th><a href="<?php echo base_url(); ?>home/survey_outfitting_kapal">Outfitting</a></th>
	            </tr>
	        	</thead>
	        </table>
	        <table class="display" style="margin-bottom:-20px;">
	          <thead>
	            <tr>
	              <th style="background-color:white;color:black;">Survey Lambung Kapal</th>
	            </tr>
	          </thead>
	        </table>
	        <table class="display">
	          <thead>
	            <tr>
	              <th></th>
	              <th>Keterangan</th>
	              <th>Ceruk Buritan</th>
	              <th>Ruang Mesin</th>
	              <th>Ceruk Haluan</th>
	           	</tr>
	          </thead>
	          <tbody>
	            <tr class="odd">
	              <td rowspan="2">Pelat sisi atas</td>
	              <td>Tebal pelat</td>
	              <td>9.7</td>
	              <td>9.4</td>
	              <td>9.8</td>
	            </tr>
	            <tr class="even">
	              <td>Depresiasi</td>
	              <td>tidak</td>
	              <td>iya</td>
	              <td>tidak</td>
	            </tr>
	             <tr class="odd">
	              <td rowspan="2">Pelat sisi bawah</td>
	              <td>Tebal pelat</td>
	              <td>9.7</td>
	              <td>9.4</td>
	              <td>9.8</td>
	            </tr>
	            <tr class="even">
	              <td>Depresiasi</td>
	              <td>tidak</td>
	              <td>iya</td>
	              <td>tidak</td>
	            </tr>
	             <tr class="odd">
	              <td rowspan="2">Pelat keel</td>
	              <td>Tebal pelat</td>
	              <td>9.7</td>
	              <td>9.4</td>
	              <td>9.8</td>
	            </tr>
	            <tr class="even">
	              <td>Depresiasi</td>
	              <td>tidak</td>
	              <td>iya</td>
	              <td>tidak</td>
	            </tr>
	             <tr class="odd">
	              <td rowspan="2">Pelat bottom</td>
	              <td>Tebal pelat</td>
	              <td>9.7</td>
	              <td>9.4</td>
	              <td>9.8</td>
	            </tr>
	            <tr class="even">
	              <td>Depresiasi</td>
	              <td>tidak</td>
	              <td>iya</td>
	              <td>tidak</td>
	            </tr>
	             <tr class="odd">
	              <td rowspan="2">Pelat geladak</td>
	              <td>Tebal pelat</td>
	              <td>9.7</td>
	              <td>9.4</td>
	              <td>9.8</td>
	            </tr>
	            <tr class="even">
	              <td>Depresiasi</td>
	              <td>tidak</td>
	              <td>iya</td>
	              <td>tidak</td>
	            </tr>
			 <br>
</body>


</html>
