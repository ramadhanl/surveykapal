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

<body>
  	<div class="container">

      <!-- CONTENT -->
  
	<div class="row">
		<div class="col-sm-12 col-lg-12">
			<div class="judul-konten">
				<p>Keterangan Kapal </p>
			</div>
				<a style="color:#5bc0de ; font-size:24px">Spesifikasi</a>
			  <table class="display" style="background-color:white;border:5px;">
	          <tbody style="border:0px;">
	          <?php
				$row = $this->db->get_where('keterangan_kapal', array('id' => 1))->row();
				if($row->loa!=0){
					echo "<tr >";
				    echo "<td style='border:0px;'>Length over all (Loa)</td>";
				    echo "<td style='border:0px;'> : </td>";
      				echo "<td style='border:0px;'>".$row->loa." m</td>";
      				echo "</tr>";
      				echo "<tr>";
      				echo "<td style='border:0px;'>Length between berpendicular (Lpp)</td>";
      				echo "<td style='border:0px;'> : </td>";
      				echo "<td style='border:0px;'>".$row->lpp." m</td>";
      				echo "</tr>";
      				echo "<tr>";
      				echo "<td style='border:0px;'>Draught (D)</td>";
				    echo "<td style='border:0px;'> : </td>";
      				echo "<td style='border:0px;'>".$row->d_design." m</td>";
      				echo "</tr>";
      				echo "<tr>";
      				echo "<td style='border:0px;'>Depth (H)</td>";
				    echo "<td style='border:0px;'> : </td>";
      				echo "<td style='border:0px;'>".$row->h_mld." m</td>";
      				echo "</tr>";
      				echo "<tr>";
      				echo "<td style='border:0px;'>Breadth (B)</td>";
				    echo "<td style='border:0px;'> : </td>";
	 				echo "<td style='border:0px;'>".$row->b_mld." m</td>";
	 				echo "</tr>";
	 				echo "<tr>";
	 				echo "<td style='border:0px;'>Service speed (Vs)</td>";
				    echo "<td style='border:0px;'> : </td>";
	 				echo "<td style='border:0px;'>".$row->vs." knot</td>";
	 				echo "</tr>";
	 				echo "<tr>";
	 				echo "<td style='border:0px;'>Engine output</td>";
				    echo "<td style='border:0px;'> : </td>";
	 				echo "<td style='border:0px;'>".$row->engine_output." HP</td>";
	 				echo "</tr>";
	 				echo "<tr>";
	 				echo "<td style='border:0px;'>Bollard pull</td>";
				    echo "<td style='border:0px;'> : </td>";
	 				echo "<td style='border:0px;'>".$row->bollard_pull." Tons</td>";
	 				echo "</tr>";
	 				echo "<tr>";
	 				echo "<td style='border:0px;'>Harga pembangunan</td>";
				    echo "<td style='border:0px;'> : </td>";
	 				echo "<td style='border:0px;'>Rp ".number_format($row->harga,2,',','.')."</td>";
	 				echo "</tr>";
	 			}
	 			else{
	 				echo "<tr>";
      				echo "<td style='border:0px;'>Length between berpendicular (Lpp)</td>";
      				echo "<td style='border:0px;'> : </td>";
      				echo "<td style='border:0px;'>".$row->lpp." m</td>";
      				echo "</tr>";
      				echo "<tr>";
	 				echo "<td style='border:0px;'>Engine output</td>";
				    echo "<td style='border:0px;'> : </td>";
	 				echo "<td style='border:0px;'>".$row->engine_output." HP</td>";
	 				echo "</tr>";
	 				echo "<tr>";
	 				echo "<td style='border:0px;'>Tahun</td>";
				    echo "<td style='border:0px;'> : </td>";
	 				echo "<td style='border:0px;'>".$row->tahun."</td>";
	 				echo "</tr>";
	 				echo "<tr>";
	 				echo "<td style='border:0px;'>Harga pembangunan</td>";
				    echo "<td style='border:0px;'> : </td>";
	 				echo "<td style='border:0px;'>Rp ".number_format($row->harga,2,',','.')."</td>";
	 				echo "</tr>";
	 			}
				?>
	          </tbody>
	         </table><!--/END First Table -->
			 <br>
			 <a type="button" class="btn btn-info" href="<?php echo base_url(); ?>home/survey_kapal_home" style="width:100%;float:right;position:relative;background-color: #2F8ABB;">Lanjut</a>
			 
</body>


</html>
