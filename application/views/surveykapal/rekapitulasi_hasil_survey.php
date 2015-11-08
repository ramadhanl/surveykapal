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
	           <?php
	           	//Lambung
	          	$no=0;
	          	$query = $this->db->get_where('survey_lambung_kapal', array('depresiasi' => "iya"));
				foreach ($query->result() as $row){
					if(++$no%2==1)
						echo "<tr class='odd'>";
					else
						echo "<tr class='even'>";
					if($no==1){
						$this->db->like('depresiasi', 'iya');
						$this->db->from('survey_lambung_kapal');
						$banyak= $this->db->count_all_results();
						echo "<td style='border-bottom: 1px solid #E6E6E6;'' class='center' rowspan='".$banyak."'>1</td>";
						echo "<td style='border-bottom: 1px solid #E6E6E6;'' class='center' rowspan='".$banyak."'>Kondisi Lambung</td>";
						if(strcmp($row->depresiasi, "iya")==0)
							echo "<td>"."Ada kerusakan pada ".$row->pelat." di bagian ".$row->nama_bagian."</td>";
						$total1=15-$banyak;
						if($total1>11){
							$presentase = 75;
						}
						else if($total1>8){
							$presentase = 60;
						}
						else if($total1>4){
							$presentase = 50;
						}
						else if($total1>2){
							$presentase = 40;
						}
						else if($total1>0){
							$presentase = 30;
						}
						$total1 = $presentase*0.4;
						echo "<td style='border-bottom: 1px solid #E6E6E6;' class='center' rowspan='".$banyak."'>40%</td>";
						echo "<td style='border-bottom: 1px solid #E6E6E6;' class='center' rowspan='".$banyak."'>".round($presentase, 2, PHP_ROUND_HALF_DOWN)."%</td>";
						echo "<td style='border-bottom: 1px solid #E6E6E6;' class='center' rowspan='".$banyak."'>".round($total1, 2, PHP_ROUND_HALF_DOWN)."%</td>";
					}
					else{
						if(strcmp($row->depresiasi, "iya")==0)
							echo "<td>"."Ada kerusakan pada ".$row->pelat." di bagian ".$row->nama_bagian."</td>";
					}}

	          	//Permesinan
	          	$no=0;
	          	$query = $this->db->get_where('survey_permesinan_kapal', array('Depresiasi_Permesinan' => "perbaikan"));
	          	foreach ($query->result() as $row){
	          		$no++;
				if($no%2==1)
					echo "<tr class='even'>";
				else
					echo "<tr class='odd'>";
				if($no==1){
					$this->db->like('Depresiasi_Permesinan', 'Perbaikan');
					$this->db->from('survey_permesinan_kapal');
					$banyak = $this->db->count_all_results();
					echo "<td style='border-bottom: 1px solid #E6E6E6;'' class='center' rowspan='".$banyak."'>2</td>";
					echo "<td style='border-bottom: 1px solid #E6E6E6;'' class='center' rowspan='".$banyak."'>Kondisi Permesinan</td>";
					if(strcmp($row->Depresiasi_Permesinan, "perbaikan")==0)
						echo "<td>"."Ada kerusakan pada ".$row->Nama_Permesinan."</td>";
					$total2=13-$banyak;
					if($total2>11){
						$presentase = 75;
					}
					else if($total2>8){
						$presentase = 60;
					}
					else if($total2>4){
						$presentase = 50;
					}
					else if($total2>2){
						$presentase = 40;
					}
					else if($total2>0){
						$presentase = 30;
					}
					$total2 = $presentase*0.4;
					echo "<td style='border-bottom: 1px solid #E6E6E6;' class='center' rowspan='".$banyak."'>40%</td>";
					echo "<td style='border-bottom: 1px solid #E6E6E6;' class='center' rowspan='".$banyak."'>".round($presentase, 2, PHP_ROUND_HALF_DOWN)."%</td>";
					echo "<td style='border-bottom: 1px solid #E6E6E6;' class='center' rowspan='".$banyak."'>".round($total2, 2, PHP_ROUND_HALF_DOWN)."%</td>";
				}
				else{
					if(strcmp($row->Depresiasi_Permesinan, "perbaikan")==0)
						echo "<td>"."Ada kerusakan pada ".$row->Nama_Permesinan."</td></tr>";
				}}

				//Outfitting
	          	$no=0;
	          	$query = $this->db->get_where('survey_outfitting_kapal', array('Depresiasi_Outfitting' => "Penggantian"));
				foreach ($query->result() as $row){
				if(++$no%2==1)
					echo "<tr class='odd'>";
				else
					echo "<tr class='even'>";
				if($no==1){
					$this->db->like('Depresiasi_Outfitting', 'Penggantian');
					$this->db->from('survey_outfitting_kapal');
					$banyak= $this->db->count_all_results();
					echo "<td style='border-bottom: 1px solid #E6E6E6;'' class='center' rowspan='".$banyak."'>3</td>";
					echo "<td style='border-bottom: 1px solid #E6E6E6;'' class='center' rowspan='".$banyak."'>Kondisi Outfitting</td>";
					if(strcmp($row->Depresiasi_Outfitting, "Penggantian")==0)
						echo "<td>"."Ada kerusakan pada ".$row->Bagian_Outfitting."</td>";
					$total3=7-$banyak;
					// echo $total3;
					if($total3>5){
						$presentase = 75;
					}
					else if($total3>4){
						$presentase = 60;
					}
					else if($total3>3){
						$presentase = 50;
					}
					else if($total3>1){
						$presentase = 40;
					}
					else if($total3>0){
						$presentase = 30;
					}
					$total3 = $presentase*0.2;
					echo "<td style='border-bottom: 1px solid #E6E6E6;' class='center' rowspan='".$banyak."'>20%</td>";
					echo "<td style='border-bottom: 1px solid #E6E6E6;' class='center' rowspan='".$banyak."'>".round($presentase, 2, PHP_ROUND_HALF_DOWN)."%</td>";
					echo "<td style='border-bottom: 1px solid #E6E6E6;' class='center' rowspan='".$banyak."'>".round($total3, 2, PHP_ROUND_HALF_DOWN)."%</td></tr>";
				}
				else{
					if(strcmp($row->Depresiasi_Outfitting, "Penggantian")==0)
						echo "<td>"."Ada kerusakan pada ".$row->Bagian_Outfitting."</td></tr>";
				}}
				if($no==0){
					echo "<tr class='odd'>";
					echo "<td style='border-bottom: 1px solid #E6E6E6;'' class='center' '>3</td>";
					echo "<td style='border-bottom: 1px solid #E6E6E6;'' class='center' '>Kondisi Outfitting</td>";
					echo "<td>[Tidak Ada Kerusakan]</td>";
					$presentase=75;
					$total3=75*0.2;
					echo "<td style='border-bottom: 1px solid #E6E6E6;' class='center'>20%</td>";
					echo "<td style='border-bottom: 1px solid #E6E6E6;' class='center'>".round($presentase, 2, PHP_ROUND_HALF_DOWN)."%</td>";
					echo "<td style='border-bottom: 1px solid #E6E6E6;' class='center'>".round($total3, 2, PHP_ROUND_HALF_DOWN)."%</td></tr>";
				}
				?>
				<!--  -->
				<tr>
					<td colspan="6" style="background-color:#2F8ABB;font-size:20px;color:white;text-align:right;">Total = <?php echo round($total1+$total2+$total3, 2, PHP_ROUND_HALF_DOWN)?>%</td>
				</tr>
	          </tbody>
	         </table><!--/END First Table -->
			 <br>
			 <div style="border:3px;border-style:solid;border-color:#E6E6E6;margin-bottom:20px;">
			 <div class="col-sm-12" >
			 <h4 style="text-align:center;margin-bottom:30px;">Kesimpulan </h4>
				<div class="col-sm-12">
					 <p>Kapal mengalami penyusutan harga sekitar</p>
					 <?php 
					 	$query = $this->db->get_where('keterangan_kapal', array('id' => 1));
					 	foreach ($query->result() as $row){
							$harga = $row->harga;
						}
					 	$total = $total1+$total2+$total3;
					 	$penyusutan = round(((100 - $total)/100)*$harga, 0, PHP_ROUND_HALF_DOWN);
					 	echo "<p>Rp ".number_format($penyusutan,2,',','.')."</p>";
					 ?>
					 <br>
					 <p>Jadi perkiraan harga kapal bekas adalah</p>
					 <?php 
						$harga_bekas = round(($total/100)*$harga, 0, PHP_ROUND_HALF_DOWN);
						echo "<p>Rp ".number_format($harga_bekas,2,',','.')."</p>";
					 ?>
					 <br>
					 <p>Dengan kerusakan pada </p>
					 <p>Lambung    : </p>
					 <?php 
					 	$no=0;
					 	$query = $this->db->get_where('survey_lambung_kapal', array('depresiasi' => "iya"));
						foreach ($query->result() as $row){
							echo "<p>".++$no.". ".$row->pelat." di ".$row->nama_bagian."</p>";
						}
					 ?>
					 <br>
					 <p>Permesinan :</p>
					<?php 
					 	$no=0;
					 	$query = $this->db->get_where('survey_permesinan_kapal', array('Depresiasi_Permesinan' => "Perbaikan"));
						foreach ($query->result() as $row){
							echo "<p>".++$no.". ".$row->Nama_Permesinan."</p>";
						}
					 ?>
					 <br>
					 <p>Outfitting : </p>
					 <?php 
					 	$no=0;
					 	$query = $this->db->get_where('survey_outfitting_kapal', array('Depresiasi_Outfitting' => "Penggantian"));
						foreach ($query->result() as $row){
							echo "<p>".++$no.". ".$row->Bagian_Outfitting."</p>";
						}
					 ?>
				</div>
			</div>
			</div>
			<a href="<?php echo base_url(); ?>home/survey_kapal_home" class="btn btn-primary col-sm-12" style="margin-bottom:20px;" href="index.html">Lanjut</a>

</body>


</html>
