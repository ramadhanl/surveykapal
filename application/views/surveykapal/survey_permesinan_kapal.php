<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Survey Permesinan Kapal</title>
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
				<p>Survey Permesinan Kapal</p>
			</div>
			  <table class="display" style="border:'1|1'">
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
	              	<tr>
					    <td>Permesinan</td>
					    <td>Main Engine</td>
					    <td>Bekerja dengan Baik</td>
					    <td>Perawatan</td>
					</tr>
					<tr>
						<td></td>
						<td>Mesin Bantu</td>
					    <td>Bekerja dengan Baik</td>
					    <td>Perawatan</td>
					</tr>
	              </tr>
	              <tr class="even">
	              	<tr>
	              		<td>Perpipaan</td>
	              		<td>Pipa Kamar Mesin</td>
					    <td>Terdapat kebocoran</td>
					    <td>Perbaikan</td>
					</tr>
					<tr>
						<td></td>
						<td>Pipa Ballast</td>
					    <td>Terdapat kebocoran</td>
					    <td>Perbaikan</td>
					</tr>
	              </tr>
	            
	          </tbody>
	         </table><!--/END First Table -->
			 <br>
</body>


</html>
