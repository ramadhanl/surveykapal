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
			  <table class="display">
	          <thead>
	              
	              <th>Length Over All</th>
	              <th>Length Between Perpendicular</th>
	              <th>Draught Design</th>
	              <th>Depth Moulded</th>
	              <th>Breadth Moulded</th>
	              <th>Service Speed 85% MCR</th>
	              <th>Complement</th>
	              <th>Engine Output</th>
	              <th>Bollard Pull</th>
	              <th>Harga Pembangunan</th>
	            </tr>
	          </thead>
	          <tbody>
	          <?php
				$query = $this->db->get('keterangan_kapal');
				foreach ($query->result() as $row)
				{
				    echo "<tr>";
      				echo "<td>".$row->Loa."</td>";
      				echo "<td>".$row->Lpp."</td>";
      				echo "<td>".$row->D_Design."</td>";
      				echo "<td>".$row->H_Mld."</td>";
	 				echo "<td>".$row->B_Mld."</td>";
	 				echo "<td>".$row->Vs."</td>";
	 				echo "<td>".$row->Complement."</td>";
	 				echo "<td>".$row->Engine_Output."</td>";
	 				echo "<td>".$row->Bollard_Pull."</td>";
	 				echo "<td>".$row->Harga."</td>";
	 				echo "</tr>";
				}
				?>
	          </tbody>
	         </table><!--/END First Table -->
			 <br>
</body>


</html>
