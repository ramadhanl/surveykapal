<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Survey kapal</title>
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
				<p>Survey Dokumen Kapal</p>
			</div>
			  <table class="display">
	          <thead>
	            <tr>
	              <th>Nama Dokumen</th>
	              <th>Kondisi</th>
	              <th>Depresiasi</th>
	              
	            </tr>
	          </thead>
	          <tbody>
	           <tr class="odd">
	              <td>Gross Akte</td>
	              <td>Ada dan masih berlaku</td>
	              <td>tidak</td>
	            </tr>
	            <tr class="even">
	              <td>Sertifikat kelayakan kapal</td>
	              <td>Ada dan masih berlaku</td>
	              <td>tidak</td>
	            </tr>
	            <tr class="odd">
	              <td>Sertfikat lambung</td>
	              <td>Ada dan masih berlaku</td>
	              <td>tidak</td>
	            </tr>
	            <tr class="even">
	              <td>Sertifikat mesin</td>
	              <td>Ada dan masih berlaku</td>
	              <td>tidak</td>
	            </tr>
	            <tr class="odd">
	              <td>Surat ukur internasional</td>
	              <td>Ada dan masih berlaku</td>
	              <td>tidak</td>
	            </tr>
	            <tr class="even">
	              <td>Sertifikat keselamatan kapal barang</td>
	              <td>Ada dan masih berlaku</td>
	              <td>tidak</td>
	            </tr>
	            <tr class="odd">
	              <td>Sertifikat radio komunikasi</td>
	              <td>Ada dan masih berlaku</td>
	              <td>tidak</td>
	            </tr>
	            <tr class="even">
	              <td>Sertifikat bebas polusi</td>
	              <td>Ada dan masih berlaku</td>
	              <td>tidak</td>
	            </tr>
	            <tr class="odd">
	              <td>Sertifikat bebas tikus</td>
	              <td>Ada dan masih berlaku</td>
	              <td>tidak</td>
	            </tr>
	          </tbody>
	         </table><!--/END First Table -->
			 <br>
			 <div style="border:3px;border-style:solid;border-color:#E6E6E6;margin-bottom:20px;">
			 <div class="col-sm-12" >
			 <h4 style="text-decoration:underline;text-align:center;margin-bottom:30px;">Kesimpulan sementara </h4>
				<div class="col-sm-4" style="float:left;">
					 <p>Dari hasil pengecekan dokumen, dapat diketahui bahwa kapal ini dilengkapi dengan dokumen :</p>
					 <p>1. Sertifikat kelayakan kapal </p>
					 <p>2. Sertifikat lambung </p>
					 <p>3. Sertifikat mesin </p>
				</div>
				<div class="col-sm-4" style="float:right;">
					<p>Dokumen yang tidak lengkap adalah :</p>
				 	<p>1. Surat ukur internasional</p>
				 	<p>2. Sertifikat keselamatan kapal barang</p>
				 	<p>3. Sertifikat radio komunikasi</p>
				 	<p>4. Sertifikat bebas polusi</p>
				 	<p>5. Sertifikat bebas tikus</p>
				</div>
			</div>

			<div style="margin-top:350px;padding-left:25px;">
			<p>Kesimpulan sementara :</p>
			<p>Akan ada penyusutan biaya dari dokumen kapal</p>
			</div>
		
			</div>
			 
			 <a href="<?php echo base_url(); ?>home/survey_kapal_home" class="btn btn-primary col-sm-12" style="margin-bottom:20px;" href="index.html">Lanjut</a>
</body>


</html>
