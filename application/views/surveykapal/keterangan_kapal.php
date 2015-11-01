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
				<p>Halaman keterangan Kapal </p>
			</div>
			  <table class="display" style="background-color:white; border-right-width:'0px';border-right-style:solid;">
	          

	          <tbody>
	          
	          <?php
				$row = $this->db->get_where('keterangan_kapal', array('ID_Ket' => 1))->row();
				    echo "<tr>";
				    echo "<td>Length Over All</td>";
				    echo "<td> : </td>";
      				echo "<td>".$row->Loa."</td>";
      				echo "</tr>";
      				echo "<tr>";
      				echo "<td>Length Between Perpendicular</td>";
      				echo "<td> : </td>";
      				echo "<td>".$row->Lpp."</td>";
      				echo "</tr>";
      				echo "<tr>";
      				echo "<td>Draught Design</td>";
				    echo "<td> : </td>";
      				echo "<td>".$row->D_Design."</td>";
      				echo "</tr>";
      				echo "<tr>";
      				echo "<td>Depth Moulded</td>";
				    echo "<td> : </td>";
      				echo "<td>".$row->H_Mld."</td>";
      				echo "</tr>";
      				echo "<tr>";
      				echo "<td>Breadth Moulded</td>";
				    echo "<td> : </td>";
	 				echo "<td>".$row->B_Mld."</td>";
	 				echo "</tr>";
	 				echo "<tr>";
	 				echo "<td>Service Speed 85% MCR</td>";
				    echo "<td> : </td>";
	 				echo "<td>".$row->Vs."</td>";
	 				echo "</tr>";
	 				echo "<tr>";
	 				echo "<td>Complement</td>";
				    echo "<td> : </td>";
	 				echo "<td>".$row->Complement."</td>";
	 				echo "</tr>";
	 				echo "<tr>";
	 				echo "<td>Engine Output</td>";
				    echo "<td> : </td>";
	 				echo "<td>".$row->Engine_Output."</td>";
	 				echo "</tr>";
	 				echo "<tr>";
	 				echo "<td>Bollard Pull</td>";
				    echo "<td> : </td>";
	 				echo "<td>".$row->Bollard_Pull."</td>";
	 				echo "</tr>";
	 				echo "<tr>";
	 				echo "<td>Harga Pembangunan</td>";
				    echo "<td> : </td>";
	 				echo "<td>".$row->Harga."</td>";
	 				echo "</tr>"
	 				
				?>
	          </tbody>
	         </table><!--/END First Table -->
			 <br>
			 <div class="col-md-6">
				<div class="brand">
								<h1><a class="hvr-float-shadow" href="<?php echo base_url(); ?>home/survey_kapal_home">Lanjut</a></h1>
								<div class="line-spacer"></div>
								
				</div>
			 </div>
			 
</body>


</html>
