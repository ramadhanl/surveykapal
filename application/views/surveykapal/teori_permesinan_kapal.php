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
	              <th style="background-color: #FFFFFF;"><a style="color: #2F8ABB;" href="<?php echo base_url(); ?>home/teori_permesinan_kapal">Permesinan</a></th>
	              <th><a href="<?php echo base_url(); ?>home/teori_outfitting_kapal">Outfitting</a></th>
	            </tr>
	        	</thead>
	        </table>
	        <table class="display" style="margin-bottom:0px;">
	          <thead>
	            <tr>
	              <th style="background-color:white;color:black;">Teori Permesinan Kapal</th>
	            </tr>
	          </thead>
	        </table>
	        <table class="display">
	          <thead>
	            <tr>
	              <th rowspan="2">No.</th>
	              <th colspan="3">Kondisi Permesinan</th>
	            </tr>
	            <tr>
	            	<th>Sistem Permesinan</th>
	            	<th>Sistem Perpipaan</th>
	            	<th>Pompa</th>
	            </tr>
	          </thead>
	          <tbody>
	          	<tr>
	          		<td>1</td>
	          		<td>Mesin Utama</td>
	          		<td>Pipa di kamar mesin</td>
	          		<td>Pompa air bersih</td>
	          	</tr>
	          	<tr>
	          		<td>2</td>
	          		<td>Mesin bantu</td>
	          		<td>Pipa di ballast</td>
	          		<td>Pompa pemadam</td>
	          	</tr>
	          	<tr>
	          		<td>3</td>
	          		<td>Poros dan daun kemudi</td>
	          		<td> </td>
	          		<td>Pompa bilga</td>
	          	</tr>
	          	<tr>
	          		<td>4</td>
	          		<td>Pelat Alas</td>
	          		<td>Profil di dek</td>
	          		<td> </td>
	          	</tr>
	          	<tr>
	          		<td>5</td>
	          		<td>Poros dan baling-baling propeller</td>
	          		<td> </td>
	          		<td>Pompa air ballast</td>
	          	</tr>
	          	<tr>
	          		<td>6</td>
	          		<td> </td>
	          		<td></td>
	          		<td>Pompa minyak pelumas</td>
	          	</tr>
	          	<tr>
	          		<td>7</td>
	          		<td> </td>
	          		<td></td>
	          		<td>Pompa pendingin</td>
	          	</tr>
	          </tbody>
	        </table>
	        <p>Dalam melakukan penilaian harga permesinan, pipa dan pompa harus dilihat bagaimana kondisi dan performanya. Bagian tersebut penting karena digunakan sebagai penggerak kapal dan aspek teknis untuk para awak kapal. Untuk nilai dari bagian permesinan, dikarenakan bersifat bekas, maka kondisi dari peralatan ini pasti menurun sejalan dengan bertambahnya umur dari peralatan tersebut kemudian nilai depresiasi ditambah dengan kerusakan pada bagian permesinan bila ada.</p>
</body>


</html>
