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
</head>

<!-- Semangat!  -->

<body>
  	<div class="container">

      <!-- CONTENT -->
  
	<div class="row">
		<div class="col-sm-12 col-lg-12">
			<div class="judul-konten">
				<p>Input Data </p>
			</div>
				<a style="color:#5bc0de ; font-size:18px">Silahkan input data untuk mendapatkan kisaran harga kapal</a>
				<br><br>
				<form action="<?php echo base_url(); ?>home/manual" method="post">
                    <div class="form-group">
                      <label>Lpp (Panjang kapal)  - Range 24 s/d 36.6 (m):</label><input name="lpp" type="text" class="form-control" name="nama" >
                    </div>
                    <div class="form-group">
                      <label>Tahun pembuatan  - Range 1967 s/d 2012 :</label><input name="tahun" type="text" class="form-control" name="nama" >
                    </div>
                    <div class="form-group">
                      <label>Engine output  - Range 1600 s/d 3200 (HP) :</label><input name="engine" type="text" class="form-control" name="nama" >
                    </div>
                    
              </div>

              <br>
             <p style="font-size:18px;"> Input data diperlukan untuk mendapatkan harga kapal acuan berdasarkan harga pasaran yang ada. Data harga pasaran kapal yang digunakan dapat dilihat dengan memilih tombol "Data".
             Untuk melanjutkan silahkan memilih tombol "Lanjut".</p>
             <a href="<?php echo base_url(); ?>home/datakapal" class="rekap">Data</a>
			 <input class="btn btn-info" type="submit" class="form-control" value="Lanjut" style="width:100%;float:right;position:relative;background-color: #2F8ABB;">
</body>


</html>
