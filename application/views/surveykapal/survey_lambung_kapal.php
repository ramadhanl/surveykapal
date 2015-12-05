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
				<p>Survey Kapal</p>
			</div>
			<a href="<?php echo base_url(); ?>home/rekapitulasi_hasil_survey" class="rekap col-md-6">Rekapitulasi</a>
			<a class="rekap col-md-6" style="float:right;" href="<?php echo base_url(); ?>home/teori_kondisi_kapal">Teori</a>
			<table class="display">
	          	<thead>
	            <tr>
	              <th style="background-color: #FFFFFF;"><a style="color: #2F8ABB;" href="<?php echo base_url(); ?>home/survey_lambung_kapal">Lambung</a></th>
	              <th><a href="<?php echo base_url(); ?>home/survey_permesinan_kapal">Permesinan</a></th>
	              <th><a href="<?php echo base_url(); ?>home/survey_outfitting_kapal">Outfitting</a></th>
	            </tr>
	        	</thead>
	        </table>
	        <table class="display" style="margin-bottom:-20px;">
	          <thead>
	            <tr>
	              <th style="background-color:white;color:black;">Survey Lambung Kapal</th>
	            </tr>
	          </thead>
	        </table>
	        <table class="display">
	          <thead>
	            <tr>
	              <th></th>
	              <th>Keterangan</th>
	              <th>Ceruk Buritan</th>
	              <th>Ruang Mesin</th>
	              <th>Ceruk Haluan</th>
	           	</tr>
	          </thead>
	          <tbody>
	          <?php
	          	$no=0;
	          	$query = $this->db->get('survey_lambung_kapal');
				for ($id=1; $id<=5 ; $id++) {
				$row = $this->db->get_where('survey_lambung_kapal', array('id' => $id*3))->row();
				echo "<tr class='odd'>";
				echo "<td rowspan='2'>".$row->pelat."</td>";
				echo "<td>Tebal pelat</td>";
				$row = $this->db->get_where('survey_lambung_kapal', array('id' => (3*$id)-2))->row();
				echo "<td>".$row->tebal."</td>";
				$row = $this->db->get_where('survey_lambung_kapal', array('id' => (3*$id)-1))->row();
				echo "<td>".$row->tebal."</td>";
				$row = $this->db->get_where('survey_lambung_kapal', array('id' => (3*$id)-0))->row();
				echo "<td>".$row->tebal."</td></tr>";
				echo "<tr class='even'>";
				echo "<td>Depresiasi</td>";
				$row = $this->db->get_where('survey_lambung_kapal', array('id' => (3*$id)-2))->row();
				echo "<td>".$row->depresiasi."</td>";
				$row = $this->db->get_where('survey_lambung_kapal', array('id' => (3*$id)-1))->row();
				echo "<td>".$row->depresiasi."</td>";
				$row = $this->db->get_where('survey_lambung_kapal', array('id' => (3*$id)-0))->row();
				echo "<td>".$row->depresiasi."</td></tr>";
				}
	          ?>
			 <br>
</body>


</html>
