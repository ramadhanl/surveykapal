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

<body>
  	<div class="container">

      <!-- CONTENT -->
	<div class="row">
		<div class="col-sm-12 col-lg-12">
			<div class="judul-konten">
				<p>Survey Lambung Kapal</p>
			</div>
			  <table class="display" style="border:'1px'; border-style:'solid'">
	          <thead>
	            <tr>
	              <th>Bagian Pelat</th>
	              <th>Keterangan</th>
	              <th>Ceruk Buritan</th>
	              <th>Ruang Mesian</th>
	              <th>Ceruk Haluan</th>
	            </tr>
	          </thead>
	          <tbody>
	            <tr class="odd">
	            <?php
	            	$row = $this->db->get('survey_lambung_kapal')->row();
	            	
	            	
	            		echo "<tr>";
					    echo "<td>";
					    echo "$row->Nama_Bagian";
					    echo "</td>";
					    echo "<td>Tebal Pelat</td>";
					    echo "<td>".$row->Tebal_Ceruk_Buritan."</td>";
					    echo "<td>".$row->Tebal_Ruang_Mesin."</td>";
					    echo "<td>".$row->Tebal_Ceruk_Haluan."</td>";
					    echo "</tr>";

					    echo "<tr>";
					    echo "<td>";
						echo "</td>";
					    echo "<td>Depresiasi</td>";
					    echo "<td>".$row->Depresiasi_Ceruk_Buritan."</td>";
					    echo "<td>".$row->Depresiasi_Ruang_Mesin."</td>";
					    echo "<td>".$row->Depresiasi_Ceruk_Haluan."</td>";
						echo "</tr>";
	              
	              ?>
	            
	          </tbody>
	         </table><!--/END First Table -->
			 <br>
</body>


</html>
