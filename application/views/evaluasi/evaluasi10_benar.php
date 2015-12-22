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
        <a style="color:#5bc0de ; font-size:22px">Soal 10</a>
        <br><br>
        <div class="col-md-6">
          <p>Kapal dengan spesifikasi:</p>
          <ul>
            <li>Lpp : 34m</li>
            <li>Engine output : 3200 HP</li>
            <li>Tahun bangun : 1990</li>
            <li>Biaya pembangunan : Rp. 25.102.264.378</li>
          </ul>
        </div>
        <div class="col-md-6">
          <p>Mempunyai kondisi : </p>
          <ul>
            <li>Pada dokumen : tidak ada sertifikat kelayakan kapal, lambung, surat ukur internasional, sertifikat radio komunikasi, bebas polusi dan bebas tikus</li>
            <li>Pada lambung ada kerusakan pada :
              <ul>
                  <li>Pelat sisi bawah ceruk haluan</li>
                  <li>Pelat bottom ceruk buritan</li>
                  <li>Pelat bottom ruang mesin</li>
                  <li>Pelat geladak ruang mesin</li>
                  <li>Pelat keel ceruk buritan</li>
              </ul>
            </li>
            <li>Permesinan ada kerusakan pada : 
              <ul>
                <li>Mesin bantu</li>
                <li>Pompa air ballast</li>
              </ul>
            </li>
            <li>Outfitting ada kerusakan pada : 
              <ul>
                <li>Deck machinery</li>
                <li>Alat komunikasi</li>
              </ul>
            </li>
          </ol>
        </div>
        <h4  style="color:#5bc0de;font-size:18px;margin-bottom:15px;">Berapa perkiraan harga dari kapal tersebut?</h4>
         <form  action="<?php echo base_url();?>home/cek_evaluasi6" method="POST">
            <div class="col-md-12" style="padding:0px !important;">
            <div class="col-md-1" style="padding:0px !important;">
              <font class="tulisan" >Rp</font>
            </div>
            <div class="col-md-3" style="padding:0px !important;">
              <input class="jawaban" type="text" name="jawaban" placeholder="[Masukan perkiraan harga]" value="<?php echo $jawaban;?>">
            </div>
            <div class="col-md-1" style="padding:0px !important;">
              <font class="tulisan">,00</font>
            </div></div>
            <div class="col-md-6" style="padding:0px !important;">
              <input class="jawaban_submit" type="submit" value="Jawab">
            </div>
            </div>
         </form>
         <div id="benar" class="modalDialog2">
          <div>
            <a href="<?php echo base_url();?>home/evaluasi10" title="Close" class="close2">X</a>
            <h2>Selamat, jawaban anda benar!</h2>
            <p>Jawaban yang benar adalah a. Rp. 22.592.037.940</p>
            <div class="col-md-6">
              <a class="pilihan" href="<?php echo base_url(); ?>home/evaluasi1">Soal selanjutnya</a>
            </div>
            <div class="col-md-6">
              <a class="pilihan" href="<?php echo base_url(); ?>">Kembali</a>
            </div>
          </div>
        </div>
    </body>