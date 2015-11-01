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
				<p>Rekapitulasi hasil survey </p>
			</div>
			  <table class="display">
	          <thead>
	            <tr>
	              <th>No</th>
	              <th>Nama</th>
	              <th>Keterangan</th>
	              <th>Bobot</th>
	              <th>Kondisi</th>
	              <th>Total</th>
	            </tr>
	          </thead>
	          <tbody>
	            <tr class="odd">
	              <td style="border-bottom: 1px solid #E6E6E6;" class="center" rowspan="8">1</td>
	              <td style="border-bottom: 1px solid #E6E6E6;" class="center" rowspan="8">Kondisi lambung</td>
	              <td>tidak ada kerusakan</td>
	              <td style="border-bottom: 1px solid #E6E6E6;" class="center" rowspan="8">40%</td>
	              <td style="border-bottom: 1px solid #E6E6E6;" class="center" rowspan="8">80%</td>
	              <td style="border-bottom: 1px solid #E6E6E6;" class="center" rowspan="8">32%</td>
	            </tr>
	            <tr class="even">
	              <td>tidak ada kerusakan</td>
	            </tr>
	            <tr class="odd">
	              <td>tidak ada kerusakan</td>
	            </tr>
	            <tr class="even">
	              <td>tidak ada kerusakan</td>
	            </tr>
	            <tr class="odd">
	              <td>tidak ada kerusakan</td>
	            </tr>
	            <tr class="even">
	              <td>tidak ada kerusakan</td>
	            </tr>
	            <tr class="odd">
	              <td>tidak ada kerusakan</td>
	            </tr>
	            <tr class="even">
	              <td style="border-bottom: 1px solid #E6E6E6;">tidak ada kerusakan</td>
	            </tr>
	            <tr class="odd">
	              <td style="border-bottom: 1px solid #E6E6E6;" class="center" rowspan="4">2</td>
	              <td style="border-bottom: 1px solid #E6E6E6;" class="center" rowspan="4">Kondisi permesinan</td>
	              <td>tidak ada kerusakan</td>
	              <td style="border-bottom: 1px solid #E6E6E6;" class="center" rowspan="4">40%</td>
	              <td style="border-bottom: 1px solid #E6E6E6;" class="center" rowspan="4">80%</td>
	              <td style="border-bottom: 1px solid #E6E6E6;" class="center" rowspan="4">32%</td>
	            </tr>
	            <tr class="even">
	              <td>tidak ada kerusakan</td>
	            </tr>
	            <tr class="odd">
	              <td>tidak ada kerusakan</td>
	            </tr>
	            <tr class="even">
	              <td style="border-bottom: 1px solid #E6E6E6;">tidak ada kerusakan</td>
	            </tr>
	            <tr class="odd">
	              <td style="border-bottom: 1px solid #E6E6E6;" class="center" rowspan="3">3</td>
	              <td style="border-bottom: 1px solid #E6E6E6;" class="center" rowspan="3">Kondisi outfitting</td>
	              <td>tidak ada kerusakan</td>
	              <td style="border-bottom: 1px solid #E6E6E6;" class="center" rowspan="3">20%</td>
	              <td style="border-bottom: 1px solid #E6E6E6;" class="center" rowspan="3">95%</td>
	              <td style="border-bottom: 1px solid #E6E6E6;" class="center" rowspan="3">19%</td>
	            </tr>
	            <tr class="even">
	              <td>tidak ada kerusakan</td>
	            </tr>
	            <tr class="odd">
	              <td>tidak ada kerusakan</td>
	            </tr>
	          </tbody>
	         </table><!--/END First Table -->
			 <br>
			 <div style="border:3px;border-style:solid;border-color:#E6E6E6;margin-bottom:20px;">
			 <div class="col-sm-12" >
			 <h4 style="text-decoration:underline;text-align:center;margin-bottom:30px;">Kesimpulan </h4>
				<div class="col-sm-12">
					 <p>Kapal mengalami penyusutan harga sekitar</p>
					 <p>Rp 50.000.000.000,00</p><br>
					 <p>Jadi perkiraan harga kapal bekas adalah</p>
					 <p>Rp 280.000.000.000,00</p><br>
					 <p>Dengan kerusakan pada </p>
					 <p>Lambung    : </p>
					 <p>1. Sebelah kanan</p>
					 <p>2. Sebelah kiri</p>
					 <p>3. Sebelah atas</p><br>
					 <p>Outfitting :</p>
					 <p>1. Sebelah kanan</p>
					 <p>2. Sebelah kiri</p>
					 <p>3. Sebelah atas</p><br>
					 <p>Permesinan : </p>
					 <p>1. Sebelah kanan</p>
					 <p>2. Sebelah kiri</p>
					 <p>3. Sebelah atas</p><br>
				</div>
			</div>
			</div>
			<a href="<?php echo base_url(); ?>home/survey_kapal_home" class="btn btn-primary col-sm-12" style="margin-bottom:20px;" href="index.html">Lanjut</a>

</body>


</html>
