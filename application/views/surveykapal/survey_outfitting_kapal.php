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

<body>
  	<div class="container">

      <!-- CONTENT -->
	<div class="row">
		<div class="col-sm-12 col-lg-12">
			<div class="judul-konten">
				<p>Survey Outfitting Kapal</p>
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
	            <tr class="odd">
	              <td rowspan="3">Dek dan tambat</td>
	              <td>- Jangkar dan rantai</td>
	              <td>Ada kerusakan</td>
	              <td>Tidak</td>
	            </tr>
	            <tr class="even">
	              <td>- Tali tambat kapal</td>
	              <td>Semua alat masih berfungsi dengan baik</td>
	              <td>tidak</td>
	            </tr>
	            <tr class="odd">
	              <td>- Deck machinery</td>
	              <td>Semua alat masih berfungsi dengan baik</td>
	              <td>tidak</td>
	            </tr>
	            <tr class="even">
	              <td>Navigasi</td>
	              <td>- Alat navigasi</td>
	              <td>Semua alat masih berfungsi dengan baik</td>
	              <td>tidak</td>
	            </tr>
	            <tr class="odd">
	              <td>Keselamatan</td>
	              <td>- Alat keselamatan</td>
	              <td>Semua alat masih berfungsi dengan baik</td>
	              <td>tidak</td>
	            </tr>
	            <tr class="even">
	              <td>Komunikasi</td>
	              <td>- Alat komunikasi</td>
	              <td>Semua alat masih berfungsi dengan baik</td>
	              <td>tidak</td>
	            </tr>
	            <tr class="odd">
	              <td>Akomodasi</td>
	              <td>- Baranga akomodasi</td>
	              <td>Semua alat masih berfungsi dengan baik</td>
	              <td>tidak</td>
	            </tr>
</body>


</html>
