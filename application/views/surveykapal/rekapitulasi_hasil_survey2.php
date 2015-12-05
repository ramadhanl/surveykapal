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

<body style="font-size:20px;">
  	<div class="container">

      <!-- CONTENT -->
	<div class="row">
		<div class="col-sm-12 col-lg-12">
			<div class="judul-konten">
				<p>Kesimpulan akhir </p>
			</div>
			  <?php
	           	//Lambung
	          	$no=0;
	          	$query = $this->db->get_where('survey_lambung_kapal', array('depresiasi' => "iya"));
				foreach ($query->result() as $row){
					$no++;
					if($no==1){
						$this->db->like('depresiasi', 'iya');
						$this->db->from('survey_lambung_kapal');
						$banyak= $this->db->count_all_results();
						$total1=15-$banyak;
						if($total1>11){
							$presentase = 95;
						}
						else if($total1>8){
							$presentase = 90;
						}
						else if($total1>4){
							$presentase = 85;
						}
						else if($total1>2){
							$presentase = 80;
						}
						else if($total1>0){
							$presentase = 75;
						}
						$total1 = $presentase*0.4;
					}
					else{
					}}
					if($no==0){
					$presentase=95;
					$total1=$presentase*0.4;
				}

	          	//Permesinan
	          	$no=0;
	          	$query = $this->db->get_where('survey_permesinan_kapal', array('Depresiasi_Permesinan' => "perbaikan"));
	          	foreach ($query->result() as $row){
	          		$no++;
				if($no==1){
					$this->db->like('Depresiasi_Permesinan', 'Perbaikan');
					$this->db->from('survey_permesinan_kapal');
					$banyak = $this->db->count_all_results();
					$total2=13-$banyak;
					if($total2>11){
						$presentase = 95;
					}
					else if($total2>8){
						$presentase = 90;
					}
					else if($total2>4){
						$presentase = 85;
					}
					else if($total2>2){
						$presentase = 80;
					}
					else if($total2>0){
						$presentase = 75;
					}
					$total2 = $presentase*0.4;
				}
				else{
				}}
				if($no==0){
					$presentase=95;
					$total2=$presentase*0.4;
				}

				//Outfitting
	          	$no=0;
	          	$query = $this->db->get_where('survey_outfitting_kapal', array('Depresiasi_Outfitting' => "Penggantian"));
				foreach ($query->result() as $row){
				$no++;
				if($no==1){
					$this->db->like('Depresiasi_Outfitting', 'Penggantian');
					$this->db->from('survey_outfitting_kapal');
					$banyak= $this->db->count_all_results();
					$total3=7-$banyak;
					// echo $total3;
					if($total3>5){
						$presentase = 95;
					}
					else if($total3>4){
						$presentase = 90;
					}
					else if($total3>3){
						$presentase = 85;
					}
					else if($total3>1){
						$presentase = 80;
					}
					else if($total3>=0){
						$presentase = 75;
					}
					$total3 = $presentase*0.2;
				}
				else{
				}}
				if($no==0){
					$presentase=95;
					$total3=$presentase*0.2;
				}
				?>
				<!--  -->
			 <div style="border:3px;border-style:solid;border-color:#E6E6E6;margin-bottom:20px;margin-top:0px;">
			 <div class="col-sm-12" >
				<div class="col-sm-12" style="margin-top:30px;margin-bottom:30px;">
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
					 <?php 
						echo " <p>Jadi perkiraan harga kapal bekas untuk harga awal Rp ".number_format($harga,2,',','.')." dan persentase total ".$total."% adalah</p>";
					 	$harga_bekas = round(($total/100)*$harga, 0, PHP_ROUND_HALF_DOWN);
						echo "<p>Rp ".number_format($harga_bekas,2,',','.')."</p>";
					 ?>
					 <br>
					 <p>Dengan kerusakan pada </p>
					 <table width="100%">
					 	<th style="text-align:center;">Lambung</th>
					 	<th style="text-align:center;">Permesinan</th>
					 	<th style="text-align:center;">Outfitting</th>
					 	<tr>
					 		<td>
					 		<?php 
							 	$no=0;
							 	$query = $this->db->get_where('survey_lambung_kapal', array('depresiasi' => "iya"));
								foreach ($query->result() as $row){
									echo "<p>".++$no.". ".$row->pelat." di ".$row->nama_bagian."</p>";
								}
								if($no==0){
									echo "<p style='text-align:center'>[Tidak ada kerusakan]</p>";
								}
							 ?>
					 		</td>
					 		<td>
					 		<?php 
							 	$no=0;
							 	$query = $this->db->get_where('survey_permesinan_kapal', array('Depresiasi_Permesinan' => "Perbaikan"));
								foreach ($query->result() as $row){
									echo "<p>".++$no.". ".$row->Nama_Permesinan."</p>";
								}
								if($no==0){
									echo "<p style='text-align:center'>[Tidak ada kerusakan]</p>";
								}
							 ?>
					 		</td>
					 		<td>
					 			<?php 
								 	$no=0;
								 	$query = $this->db->get_where('survey_outfitting_kapal', array('Depresiasi_Outfitting' => "Penggantian"));
									foreach ($query->result() as $row){
										echo "<p>".++$no.". ".$row->Bagian_Outfitting."</p>";
									}
									if($no==0){
									echo "<p style='text-align:center'>[Tidak ada kerusakan]</p>";
								}
								 ?>
					 		</td>
					 	</tr>
					 </table>
					 
			</div>
			</div>
			</div>
			<a href="<?php echo base_url(); ?>home/survey_kapal_home" class="btn btn-primary col-sm-12" style="margin-bottom:20px;" href="index.html">Kembali</a>

</body>


</html>
