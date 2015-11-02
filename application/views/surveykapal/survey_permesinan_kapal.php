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
	              <th><a href="<?php echo base_url(); ?>home/survey_lambung_kapal">Lambung</a></th>
	              <th style="background-color: #2F8ABB;"><a href="<?php echo base_url(); ?>home/survey_permesinan_kapal">Permesinan</a></th>
	              <th><a href="<?php echo base_url(); ?>home/survey_outfitting_kapal">Outfitting</a></th>
	            </tr>
	        	</thead>
	        </table>
			<table class="display" style="margin-bottom:0px;">
	          <thead>
	            <tr>
	              <th style="background-color:white;color:black;">Survey Permesinan Kapal</th>
	            </tr>
	          </thead>
	        </table>
	        <table class="display">
	          <thead>
	            <tr>
	              <th>Bagian</th>
	              <th>Nama</th>
	              <th>Kondisi</th>
	              <th>Depresiasi</th>
	           	</tr>
	          </thead>
	          <tbody>
	            <tr class="odd">
	              <td style="border-bottom: 1px solid #E6E6E6;" class="center" rowspan="4">Permesinan</td>
	              <td>Main engine</td>
	              <td>Bekerja dengan baik</td>
	              <td>Perawatan</td>
	            </tr>
	            <tr class="even">
	              <td>Mesin bantu</td>
	              <td>Bekerja dengan baik</td>
	              <td>Perawatan</td>
	            </tr>
	            <tr class="odd">
	              <td>Poros dan daun kemudi</td>
	              <td>Setiap dock survey dilakukan reparasi</td>
	              <td>Perawatan</td>
	            </tr>
	            <tr class="even">
	              <td style="border-bottom: 1px solid #E6E6E6;">Poros dan Baling-baling propeller</td>
	              <td style="border-bottom: 1px solid #E6E6E6;">Setiap dock survey dilakukan reparasi</td>
	              <td style="border-bottom: 1px solid #E6E6E6;">Perawatan</td>
	            </tr>
	            <tr class="odd">
	              <td style="border-bottom: 1px solid #E6E6E6;" class="center" rowspan="2">Perpipaan</td>
	              <td>Pipa kamar mesin</td>
	              <td>Terdapat kebocoran</td>
	              <td>Perawatan</td>
	            </tr>
	            <tr class="even">
	              <td style="border-bottom: 1px solid #E6E6E6;">Pipa ballast</td>
	              <td style="border-bottom: 1px solid #E6E6E6;">Terdapat kebocoran</td>
	              <td style="border-bottom: 1px solid #E6E6E6;">Perawatan</td>
	            </tr>
	            <tr class="odd">
	              <td style="border-bottom: 1px solid #E6E6E6;" class="center" rowspan="7">Pompa</td>
	              <td>Pompa air bersih</td>
	              <td>Ada kerusakan</td>
	              <td>Perawatan</td>
	            </tr>
	            <tr class="even">
	              <td>Pompa pemadam</td>
	              <td>Ada kerusakan</td>
	              <td>Perawatan</td>
	            </tr>
	            <tr class="odd">
	              <td>Pompa bilga</td>
	              <td>Ada kerusakan</td>
	              <td>Perawatan</td>
	            </tr>
	            <tr class="even">
	              <td>Pompa air ballast</td>
	              <td>Ada kerusakan</td>
	              <td>Perawatan</td>
	            </tr>
	            <tr class="odd">
	              <td>Pompa BBM</td>
	              <td>Ada kerusakan</td>
	              <td>Perawatan</td>
	            </tr>
	            <tr class="even">
	              <td>Pompa minyak pelumas</td>
	              <td>Ada kerusakan</td>
	              <td>Perawatan</td>
	            </tr>
	            <tr class="odd">
	              <td>Pompa pendingin</td>
	              <td>Ada kerusakan</td>
	              <td>Perawatan</td>
	            </tr>
</body>


</html>
