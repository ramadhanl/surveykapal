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
				<p>Teori Kondisi Kapal</p>
			</div>
			<p style="margin-top:40px;">Kondisi kapal merupakan salah satu parameter utama pada penilaian kapal karena semakin banyak kerusakan yang ditemukan, maka akan semakin tinggi depresiasi (pengurangan) harga dari kapal terebut. Ada 3 bagian yang perlu diperhatian ketika melihat kondisi kapal, yaitu lambung, permesinan dan outfitting. Masing-masing dari elemen tersebut dapat dibagi lagi menjadi bagiannya masing-masing.</p>
			<table class="display">
	          	<thead>
	            <tr>
	              <th>No.</th>
	              <th>Kondisi Badan</th>
	              <th>Kondisi Permesinan</th>
	              <th>Kondisi Outfitting</th>
	            </tr>
	        	</thead>
	        	<tbody>
	        	<tr>
	        		<td>1</td>
	        		<td>Kulit Luar</td>
	        		<td>Sistem Permesinan</td>
	        		<td>Peralatan Dek & Tambat</td>
	        	</tr>
	        	<tr>
	        		<td>2</td>
	        		<td>Rangka & Sekat</td>
	        		<td>Sistem Perpipaan</td>
	        		<td>Peralatan Navigasi</td>
	        	</tr>
	        	<tr>
	        		<td>3</td>
	        		<td>Pelat Geladak</td>
	        		<td>Sistem Kelistrikan</td>
	        		<td>Peralatan Keselamatan</td>
	        	</tr>
	        	<tr>
	        		<td>4</td>
	        		<td> </td>
	        		<td>Pompa</td>
	        		<td>Peralatan Komunikasi</td>
	        	</tr>
	        	<tr>
	        		<td>5</td>
	        		<td> </td>
	        		<td> </td>
	        		<td>Peralatan Akomodasi</td>
	        	</tr>
	        	</tbody>
	        </table>
	        <a href="<?php echo base_url(); ?>home/teori_awal_lambung_kapal" class="btn btn-primary col-sm-12" style="margin-top:20px;margin-bottom:20px;">Lanjut </a>
			</body>


</html>
