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

<body style="font-size:20px;">
  	<div class="container">

      <!-- CONTENT -->
	<div class="row">
		<div class="col-sm-12 col-lg-12">
			<div class="judul-konten">
				<p>Survey Dokumen Kapal</p>
			</div>
			<a href="<?php echo base_url(); ?>home/teori1" class="rekap">Teori</a>
			  <table class="display">
	          <thead>
	            <tr>
	              <th>Nama Dokumen</th>
	              <th>Kondisi</th>
	              <th>Depresiasi</th>
	              
	            </tr>
	          </thead>
	          <tbody>
	          <?php 
	          for ($id=1; $id<=9 ; $id++) { 
	          	$row = $this->db->get_where('survey_dokumen', array('id' => $id))->row();
	          	if ($id%2==0) {
	          		$class="even";
	          	}
	          	else{
	          		$class="odd";
	          	}
	          	echo "<tr class='".$class."'>"."<td>".$row->Nama_Dokumen."</td>";
	          	echo "<td>".$row->Kondisi_Dokumen."</td>";
	          	echo "<td>".$row->Depresiasi_Dokumen."</td></tr>";
				}
	          ?>
	          </tbody>
	         </table><!--/END First Table -->
			 <br>
			 <div style="border:3px;border-style:solid;border-color:#E6E6E6;margin-bottom:20px;">
			 <div class="col-sm-12" >
			 <h4 style="text-decoration:underline;text-align:center;margin-bottom:30px;font-size:40px;">Kesimpulan sementara </h4>
				<div class="col-sm-6" style="float:left;">
					 <p>Dari hasil pengecekan dokumen, dapat diketahui bahwa kapal ini dilengkapi dengan dokumen :</p>
					<?php
					$no=0;
					$query = $this->db->get_where('survey_dokumen', array('Depresiasi_Dokumen' => "tidak"));
					foreach ($query->result() as $row){
					   echo "<p>".++$no.". ".$row->Nama_Dokumen."</p>";
					}
					?>
				</div>
				<div class="col-sm-4" style="float:right;">
					<p>Dokumen yang tidak lengkap adalah :</p>
				 	<?php
					$no=0;
					$query = $this->db->get_where('survey_dokumen', array('Depresiasi_Dokumen' => "iya"));
					foreach ($query->result() as $row){
					   echo "<p>".++$no.". ".$row->Nama_Dokumen."</p>";
					}
					?>
				</div>
			</div>

			<div style="margin-top:450px;padding-left:25px;">
			<br>
			<p>Kesimpulan sementara :</p>
			<?php 
			$row = $this->db->get_where('survey_dokumen', array('id' => 1))->row();
			$result = strcmp($row->Depresiasi_Dokumen, "iya");
			if (!$result) {
				echo "<p>Lebih baik tidak menilai ini karena legalitas kapal tidak bisa dipastikan</p>";
			}
			else if ($no==0) {
				echo "<p>Tidak ada depresiasi/penyusutan</p>";
			}
			else{
				echo "<p>Akan ada penyusutan biaya dari dokumen kapal</p>";
			}
			?>
			</div>
		
			</div>
			 
			 <a href="<?php echo base_url(); ?>home/survey_kapal_home" class="btn btn-primary col-sm-12" style="margin-bottom:20px;" href="index.html">Lanjut</a>
</body>


</html>
