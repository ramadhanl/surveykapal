<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Evaluasi</title>
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
				<p>Evaluasi </p>
			</div>
				<a style="color:#5bc0de ; font-size:22px">Soal 2</a>
				<br><br>
        <div class="col-md-6">
          <p>Kapal dengan spesifikasi:</p>
          <ul>
            <li>Loa : 30m</li>
            <li>Lpp : 28.4m</li>
            <li>D : 4.9m</li>
            <li>H : 3,8m</li>
            <li>B : 9.5m</li>
            <li>Vs : 12 Knot</li>
            <li>Engine output : 3200 HP</li>
            <li>Tahun bangun : 2011</li>
            <li>Biaya pembangunan : Rp. 52.625.561.573</li>
          </ul>
        </div>
        <div class="col-md-6">
          <p>Mempunyai kondisi : </p>
          <ul>
            <li>Pada dokumen : lengkap</li>
            <li>Pada lambung ada kerusakan pada :
              <ul>
                <li>Pelat sisi atas ceruk buritan</li>
                <li>Pelat sisi bawah ceruk buritan</li>
                <li>Pelat sisi bawah ruang mesin</li>
                <li>Pelat bottom ruang mesin</li>
                <li>Pelat geladak ruang mesin</li>
                <li>Pelat geladak ceruk haluan</li>
                <li>Pelat keel ruang mesin</li>
              </ul>
            </li>
            <li>Permesinan ada kerusakan pada : 
              <ul>
                <li>Poros dan daun kemudi</li>
                <li>Pipa kamar mesin</li>
              </ul>
            </li>
            <li>Outfitting ada kerusakan pada : 
              <ul>
                <li>Alat komunikasi</li>
              </ul>
            </li>
          </ol>
        </div>
        <h4  style="color:#5bc0de;font-size:18px;margin-bottom:15px;">Berapa perkiraan harga dari kapal tersebut?</h4>
         <div class="col-md-6">
         <a class="pilihan" href="#benar">A. Rp. 46.836.749.800</a>
         </div>
         <div class="col-md-6">
         <a class="pilihan" href="#salah">B. Rp. 40.836.749.800</a>
         </div>
         <div class="col-md-6">
         <a class="pilihan" href="#salah">C. Rp. 35.836.749.800</a>
         </div>
         <div class="col-md-6">
         <a class="pilihan" href="#salah">D. Rp. 50.836.749.800</a>
         </div>
        <div id="benar" class="modalDialog">
          <div>
            <a href="#close" title="Close" class="close">X</a>
            <h2>Selamat!</h2>
            <p>Jawaban yang benar adalah a. Rp. 46.836.749.800</p>
            <div class="col-md-6">
              <a class="pilihan" href="<?php echo base_url(); ?>home/evaluasi3">Soal selanjutnya</a>
            </div>
            <div class="col-md-6">
              <a class="pilihan" href="<?php echo base_url(); ?>">Kembali</a>
            </div>
          </div>
        </div>
        <div id="salah" class="modalDialog">
          <div>
            <a href="#close" title="Close" class="close">X</a>
            <h2>Hampir benar! </h2>
            <p>Jawaban yang benar adalah a. Rp. 46.836.749.800</p>
            <div class="col-md-6">
              <a class="pilihan" href="<?php echo base_url(); ?>home/evaluasi3">Soal selanjutnya</a>
            </div>
            <div class="col-md-6">
              <a class="pilihan" href="<?php echo base_url(); ?>">Kembali</a>
            </div>
          </div>
        </div>
		</body>


</html>
