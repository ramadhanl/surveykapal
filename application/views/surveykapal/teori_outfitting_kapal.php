<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Survey Lambung Kapal</title>
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
				<p><a style="text-decoration:underline;" href="<?php echo base_url(); ?>home/teori_kondisi_kapal"> Teori Kondisi Kapal</a></p>
			</div>
			<a href="<?php echo base_url(); ?>home/survey_lambung_kapal" class="rekap col-md-6">Survey</a>
			<a style="float:right;text-decoration:underline;" href="<?php echo base_url(); ?>home/teori_lambung_kapal" class="rekap col-md-6">Teori</a>
			<table class="display">
	          	<thead>
	            <tr>
	              <th><a href="<?php echo base_url(); ?>home/teori_lambung_kapal">Lambung</a></th>
	              <th><a href="<?php echo base_url(); ?>home/teori_permesinan_kapal">Permesinan</a></th>
	              <th style="background-color: #FFFFFF;"><a style="color: #2F8ABB;"  href="<?php echo base_url(); ?>home/teori_outfitting_kapal">Outfitting</a></th>
	            </tr>
	        	</thead>
	        </table>
	        <table class="display" style="margin-bottom:0px;">
	          <thead>
	            <tr>
	              <th style="background-color:white;color:black;">Teori Lambung Kapal</th>
	            </tr>
	          </thead>
	        </table>
	        <table class="display">
	          <thead>
	            <tr>
	              <th rowspan="2">No.</th>
	              <th colspan="5">Kondisi Outfitting</th>
	            </tr>
	            <tr>
	            	<th>Dek & Tambat</th>
	            	<th>Navigasi</th>
	            	<th>Keselamatan</th>
	            	<th>Komunikasi</th>
	            	<th>Akomodasi</th>
	            </tr>
	          </thead>
	          <tbody>
	          	<tr>
	          		<td>1</td>
	          		<td>Crane</td>
	          		<td>Steering wheel</td>
	          		<td>Lifebuoy</td>
	          		<td>Radio komunikasi</td>
	          		<td>TV</td>
	          	</tr>
	          	<tr>
	          		<td>2</td>
	          		<td>Jangkar & rantai</td>
	          		<td>Compass</td>
	          		<td>Life jacket</td>
	          		<td>Telephone</td>
	          		<td>Radio</td>
	          	</tr>
	          	<tr>
	          		<td>3</td>
	          		<td>Winch</td>
	          		<td>Radar</td>
	          		<td>Life raft</td>
	          		<td>SSB</td>
	          		<td>Meja kursi</td>
	          	</tr>
	          	<tr>
	          		<td>4</td>
	          		<td>Bollard</td>
	          		<td>Echo sounder</td>
	          		<td>Sekoci</td>
	          		<td>HT</td>
	          		<td>Tempat tidur</td>
	          	</tr>
	          	<tr>
	          		<td>5</td>
	          		<td>Capstand</td>
	          		<td>GPS</td>
	          		<td>Flare</td>
	          		<td>Fax</td>
	          		<td>Lemari</td>
	          	</tr>
	          	<tr>
	          		<td>6</td>
	          		<td>Tiang</td>
	          		<td>AIS</td>
	          		<td>Pompa</td>
	          		<td>Sound system</td>
	          		<td> </td>
	          	</tr>
	          	<tr>
	          		<td>7</td>
	          		<td>Railing dan tangga</td>
	          		<td>Cilinometer</td>
	          		<td>Pemadam api</td>
	          		<td></td>
	          		<td> </td>
	          	</tr>
	          	<tr>
	          		<td>8</td>
	          		<td>Tali temali</td>
	          		<td>Peta</td>
	          		<td> </td>
	          		<td> </td>
	          		<td> </td>
	          	</tr>
	          	<tr>
	          		<td>9</td>
	          		<td> </td>
	          		<td>Teropong</td>
	          		<td> </td>
	          		<td> </td>
	          		<td> </td>
	          	</tr>	          	
	          </tbody>
	        </table>
	        <p>Elemen-elemen yang termasuk kedalam outfitting yang sudah terangkum pada tabel ini merupakan bagian yang diperiksa kelengkapan dan kondisinya apakah masih bisa digunakan atau tidak. Apabila ada kekurangan maka harus ada penggantian untuk elemen tersebut.</p>
</body>


</html>
