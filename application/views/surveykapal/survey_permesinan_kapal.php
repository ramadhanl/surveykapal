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
	              <th><a href="<?php echo base_url(); ?>home/survey_lambung_kapal">Lambung</a></th>
	              <th style="background-color: #FFFFFF;"><a style="color: #2F8ABB;" href="<?php echo base_url(); ?>home/survey_permesinan_kapal">Permesinan</a></th>
	              <th><a href="<?php echo base_url(); ?>home/survey_outfitting_kapal">Outfitting</a></th>
	            </tr>
	        	</thead>
	        </table>
			<table class="display" style="margin-bottom:0px;">
	          <thead>
	            <tr>
	              <th style="background-color:white;color:black;">Survey Permesinan Kapal</th>
	            </tr>
	          </thead>
	        </table>
	        <table class="display">
	          <thead>
	            <tr>
	            	<th></th>
	              <th>Bagian</th>
	              <th>Nama</th>
	              <th>Kondisi</th>
	              <th>Depresiasi</th>
	           	</tr>
	          </thead>
	          <tbody>
	          <?php
	          	//Permesinan
	          	$no=0;
	          	$query = $row = $this->db->get_where('survey_permesinan_kapal', array('Bagian_Permesinan' => "Permesinan"));
				foreach ($query->result() as $row){
				if(++$no%2==1)
					echo "<tr class='odd'>";
				else
					echo "<tr class='even'>";
				if($no==1)
				echo "<td style='border-bottom: 1px solid #E6E6E6;' class='center' rowspan='4'>Permesinan</td>";
				echo "<td>Tebal pelat</td>";
				echo "<td>".$row->Nama_Permesinan."</td>";
				echo "<td>".$row->Kondisi_Permesinan."</td>";
				echo "<td>".$row->Depresiasi_Permesinan."</td></tr>";
				}

				//Perpipaan
				$no=0;
				$query = $row = $this->db->get_where('survey_permesinan_kapal', array('Bagian_Permesinan' => "Perpipaan"));
				foreach ($query->result() as $row){
				if(++$no%2==1)
					echo "<tr class='odd'>";
				else
					echo "<tr class='even'>";
				if($no==1)
					echo "<td style='border-bottom: 1px solid #E6E6E6;' class='center' rowspan='2'>Perpipaan</td>";
				echo "<td>Tebal pelat</td>";
				echo "<td>".$row->Nama_Permesinan."</td>";
				echo "<td>".$row->Kondisi_Permesinan."</td>";
				echo "<td>".$row->Depresiasi_Permesinan."</td></tr>";
				}

				//Pompa
				$no=0;
				$query = $row = $this->db->get_where('survey_permesinan_kapal', array('Bagian_Permesinan' => "Pompa"));
				foreach ($query->result() as $row){
				if(++$no%2==1)
					echo "<tr class='odd'>";
				else
					echo "<tr class='even'>";
				if($no==1)
					echo "<td style='border-bottom: 1px solid #E6E6E6;' class='center' rowspan='7'>Perpipaan</td>";
				echo "<td>Tebal pelat</td>";
				echo "<td>".$row->Nama_Permesinan."</td>";
				echo "<td>".$row->Kondisi_Permesinan."</td>";
				echo "<td>".$row->Depresiasi_Permesinan."</td></tr>";
				}
	          ?>
</body>


</html>
