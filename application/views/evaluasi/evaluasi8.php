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
        <a style="color:#5bc0de ; font-size:22px">Soal 8</a>
        <br><br>
        <div class="col-md-6">
          <p>Kapal dengan spesifikasi:</p>
          <ul>
            <li>Lpp : 26m</li>
            <li>Engine output : 3200 HP</li>
            <li>Tahun bangun : 2000</li>
            <li>Biaya pembangunan : Rp. 19.223.992.819</li>
          </ul>
        </div>
        <div class="col-md-6">
          <p>Mempunyai kondisi : </p>
          <ul>
            <li>Pada dokumen : tidak ada sertifikat kelayakan kapal, lambung, surat ukur internasional, sertifikat radio komunikasi, bebas polusi dan bebas tikus</li>
            <li>Pada lambung ada kerusakan pada :
              <ul>
                <li>Pelat sisi bawah ruang mesin</li>
                <li>Pelat keel ceruk haluan</li>
              </ul>
            </li>
            <li>Permesinan ada kerusakan pada : 
              <ul>
                <li>Mesin bantu</li>
                <li>Pompa pemadam</li>
              </ul>
            </li>
            <li>Outfitting ada kerusakan pada : 
              <ul>
                <li>Jangkar dan rantai</li>
                <li>Alat keselamatan</li>
                <li>Barang akomodasi</li>
              </ul>
            </li>
          </ol>
        </div>
        <h4  style="color:#5bc0de;font-size:18px;margin-bottom:15px;">Berapa perkiraan harga dari kapal tersebut?</h4>
         <div class="col-md-6">
         <a class="pilihan" href="#salah">A. Rp. 13.223.992.819</a>
         </div>
         <div class="col-md-6">
         <a class="pilihan" href="#salah">B. Rp. 15.223.992.819</a>
         </div>
         <div class="col-md-6">
         <a class="pilihan" href="#salah">C. Rp. 17.223.992.819 </a>
         </div>
         <div class="col-md-6">
         <a class="pilihan" href="#benar">D. Rp. 19.223.992.819 </a>
         </div>
        <div id="benar" class="modalDialog">
          <div>
            <a href="#close" title="Close" class="close">X</a>
            <h2>Selamat!</h2>
            <p>Jawaban yang benar adalah d. Rp. 19.223.992.819 </p>
            <div class="col-md-6">
              <a class="pilihan" href="<?php echo base_url(); ?>home/evaluasi8">Soal selanjutnya</a>
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
            <p>Jawaban yang benar adalah a. Rp. 19.223.992.819 </p>
            <div class="col-md-6">
              <a class="pilihan" href="<?php echo base_url(); ?>home/evaluasi9">Soal selanjutnya</a>
            </div>
            <div class="col-md-6">
              <a class="pilihan" href="<?php echo base_url(); ?>">Kembali</a>
            </div>
          </div>
        </div>
    </body>

