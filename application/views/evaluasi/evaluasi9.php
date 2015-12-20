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
        <a style="color:#5bc0de ; font-size:22px">Soal 9</a>
        <br><br>
        <div class="col-md-6">
          <p>Kapal dengan spesifikasi:</p>
          <ul>
            <li>Lpp : 30m</li>
            <li>Engine output : 2400 HP</li>
            <li>Tahun bangun : 1980</li>
            <li>Biaya pembangunan : Rp. 18.977.166.090</li>
          </ul>
        </div>
        <div class="col-md-6">
          <p>Mempunyai kondisi : </p>
          <ul>
            <li>Pada dokumen : tidak ada sertifikat kelayakan kapal, lambung, surat ukur internasional, sertifikat radio komunikasi, bebas polusi dan bebas tikus</li>
            <li>Pada lambung ada kerusakan pada :
              <ul>
                  <li>Pelat sisi atas ruang mesin</li>
                  <li>Pelat sisi atas ceruk haluan</li>
                  <li>Pelat bottom ceruk buritan</li>
                  <li>Pelat bottom ceruk haluan</li>
                  <li>Pelat geladak ceruk buritan</li>
                  <li>Pelat geladak ceruk haluan</li>
                  <li>Pelat keel ruang mesin</li>
              </ul>
            </li>
            <li>Permesinan ada kerusakan pada : 
              <ul>
                  <li>Pompa air bersih</li>
                  <li>Pompa air ballast</li>
                  <li>Pompa minyak pelumas</li>
              </ul>
            </li>
            <li>Outfitting ada kerusakan pada : 
              <br>Tidak ada kerusakan
            </li>
          </ol>
        </div>
        <h4  style="color:#5bc0de;font-size:18px;margin-bottom:15px;">Berapa perkiraan harga dari kapal tersebut?</h4>
         <div class="col-md-6">
         <a class="pilihan" href="#salah">A. Rp. 11.889.677.820</a>
         </div>
         <div class="col-md-6">
         <a class="pilihan" href="#salah">B. Rp. 15.889.677.820</a>
         </div>
         <div class="col-md-6">
         <a class="pilihan" href="#benar">C. Rp. 16.889.677.820 </a>
         </div>
         <div class="col-md-6">
         <a class="pilihan" href="#salah">D. Rp. 13.889.677.820</a>
         </div>
        <div id="benar" class="modalDialog">
          <div>
            <a href="#close" title="Close" class="close">X</a>
            <h2>Selamat!</h2>
            <p>Jawaban yang benar adalah c. Rp. 16.889.677.820 </p>
            <div class="col-md-6">
              <a class="pilihan" href="<?php echo base_url(); ?>home/evaluasi10">Soal selanjutnya</a>
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
            <p>Jawaban yang benar adalah c. Rp. 16.889.677.820 </p>
            <div class="col-md-6">
              <a class="pilihan" href="<?php echo base_url(); ?>home/evaluasi10">Soal selanjutnya</a>
            </div>
            <div class="col-md-6">
              <a class="pilihan" href="<?php echo base_url(); ?>">Kembali</a>
            </div>
          </div>
        </div>
    </body>

