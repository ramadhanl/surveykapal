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
    <script type="text/javascript">
    $(window).load(function(){
        $('#benar').modal('show');
    });
</script>

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
        <a style="color:#5bc0de ; font-size:22px">Soal 6</a>
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
            <li>Pada dokumen : tidak ada sertifikat kelayakan kapal, lambung, surat ukur internasional, sertifikat radio komunikasi, bebas polusi dan bebas tikus</li>
            <li>Pada lambung ada kerusakan pada :
              <ul>
                  <li>Pelat bottom ceruk buritan</li>
                  <li>Pelat bottom ceruk haluan</li>
                  <li>Pelat geladak ruang mesin</li>
                  <li>Pelat geladak ceruk haluan</li>
            </li>
            <li>Permesinan ada kerusakan pada : 
              <ul>
                <li>Mesin bantu</li>
                <li>Poros dan baling-baling propeller</li>
                <li>Pompa iar ballast</li>
              </ul>
            </li>
            <li>Outfitting ada kerusakan pada : 
              <ul>
                <li>Deck machinery</li>
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
            <a href="<?php echo base_url();?>home/evaluasi6" title="Close" class="close2">X</a>
            <h2>Kurang tepat!</h2>
            <p>Maaf jawaban kurang mendekati</p>
            <div class="col-md-6">
              <a class="pilihan" href="<?php echo base_url(); ?>home/evaluasi7">Soal selanjutnya</a>
            </div>
            <div class="col-md-6">
              <a class="pilihan" href="<?php echo base_url(); ?>">Kembali</a>
            </div>
          </div>
        </div>
    </body>
