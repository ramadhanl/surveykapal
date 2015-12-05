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
				<p>Data</p>
			</div>
			<table class="display">
	          <thead>
	            <tr>
	              <th rowspan="2">No.</th>
	              <th rowspan="2">Flag</th>
	              <th rowspan="2">Tahun</th>
	              <th colspan="4">Kondisi</th>
	              <th rowspan="2">Harga($)</th>
	            </tr>
	            <tr>
	            	<th>L(m)</th>
	            	<th>B(m)</th>
	            	<th>T(m)</th>
	            	<th>HP</th>
	            </tr>
	          </thead>
	          <tbody>
	          <tr>
	          	<td>1</td>
	          	<td>Indonesia</td>
	          	<td>2008</td>
	          	<td>32.1</td>
	          	<td>9</td>
	          	<td>3.6</td>
	          	<td>3200</td>
	          	<td><?PHP echo number_format(2000000,0,',','.')?></td>
	          </tr>
	          <tr>
	          	<td>2</td>
	          	<td>Panama</td>
	          	<td>1972</td>
	          	<td>28</td>
	          	<td>8.2</td>
	          	<td>4.27</td>
	          	<td>2100</td>
	          	<td><?PHP echo number_format(1000000,0,',','.')?></td>
	          </tr>
	          <tr>
	          	<td>3</td>
	          	<td>Japan</td>
	          	<td>1974</td>
	          	<td>24.4</td>
	          	<td>7</td>
	          	<td>3</td>
	          	<td>1600</td>
	          	<td><?PHP echo number_format(4400000,0,',','.')?></td>
	          </tr>
	          <tr>
	          	<td>4</td>
	          	<td>Foreign</td>
	          	<td>1980</td>
	          	<td>25.93</td>
	          	<td>8.85</td>
	          	<td>3.36</td>
	          	<td>2250</td>
	          	<td><?PHP echo number_format(650000,0,',','.')?></td>
	          </tr>
	          <tr>
	          	<td>5</td>
	          	<td>China</td>
	          	<td>2009</td>
	          	<td>36.6</td>
	          	<td>10.98</td>
	          	<td>3.2</td>
	          	<td>3200</td>
	          	<td><?PHP echo number_format(2000000,0,',','.')?></td>
	          </tr>
	          <tr>
	          	<td>6</td>
	          	<td>Singapore</td>
	          	<td>2007</td>
	          	<td>28.98</td>
	          	<td>9.15</td>
	          	<td>3.66</td>
	          	<td>2060</td>
	          	<td><?PHP echo number_format(1400000,0,',','.')?></td>
	          </tr>
	          <tr>
	          	<td>7</td>
	          	<td>Panama</td>
	          	<td>1972</td>
	          	<td>30.5</td>
	          	<td>8.13</td>
	          	<td>3.05</td>
	          	<td>2300</td>
	          	<td><?PHP echo number_format(1300000,0,',','.')?></td>
	          </tr>
	          <tr>
	          	<td>8</td>
	          	<td>US</td>
	          	<td>1967</td>
	          	<td>25.01</td>
	          	<td>7.63</td>
	          	<td>1.83</td>
	          	<td>1800</td>
	          	<td><?PHP echo number_format(700000,0,',','.')?></td>
	          </tr>
	          <tr>
	          	<td>9</td>
	          	<td>Dutch</td>
	          	<td>2008</td>
	          	<td>30</td>
	          	<td>8.6</td>
	          	<td>3.5</td>
	          	<td>2400</td>
	          	<td><?PHP echo number_format(1800000,0,',','.')?></td>
	          </tr>
	          <tr>
	          	<td>10</td>
	          	<td>US</td>
	          	<td>1981</td>
	          	<td>27.56</td>
	          	<td>8.53</td>
	          	<td>2.95</td>
	          	<td>3000</td>
	          	<td><?PHP echo number_format(1400000,0,',','.')?></td>
	          </tr>
	          <tr>
	          	<td>11</td>
	          	<td>US</td>
	          	<td>1981</td>
	          	<td>27.56</td>
	          	<td>8.53</td>
	          	<td>2.95</td>
	          	<td>3000</td>
	          	<td><?PHP echo number_format(1400000,0,',','.')?></td>
	          </tr>
	          <tr>
	          	<td>12</td>
	          	<td>Japan</td>
	          	<td>1996</td>
	          	<td>26.7</td>
	          	<td>9</td>
	          	<td>3</td>
	          	<td>3200</td>
	          	<td><?PHP echo number_format(1600000,0,',','.')?></td>
	          </tr>
	          <tr>
	          	<td>13</td>
	          	<td>South Korea</td>
	          	<td>1977</td>
	          	<td>26.35</td>
	          	<td>8</td>
	          	<td></td>
	          	<td>2200</td>
	          	<td><?PHP echo number_format(680000,0,',','.')?></td>
	          </tr>
	          <tr>
	          	<td>14</td>
	          	<td>Belize</td>
	          	<td>2006</td>
	          	<td>28</td>
	          	<td>8.1</td>
	          	<td>4</td>
	          	<td>2500</td>
	          	<td><?PHP echo number_format(1250000,0,',','.')?></td>
	          </tr>
	          <tr>
	          	<td>15</td>
	          	<td>India</td>
	          	<td>1986</td>
	          	<td>29.53</td>
	          	<td>9.7</td>
	          	<td>2.83</td>
	          	<td>3000</td>
	          	<td><?PHP echo number_format(1500000,0,',','.')?></td>
	          </tr>
	          <tr>
	          	<td>16</td>
	          	<td>Netherland</td>
	          	<td>1982</td>
	          	<td>26</td>
	          	<td>8</td>
	          	<td>3.88</td>
	          	<td>1700</td>
	          	<td><?PHP echo number_format(870000,0,',','.')?></td>
	          </tr>
	          <tr>
	          	<td>17</td>
	          	<td>China</td>
	          	<td>2012</td>
	          	<td>29.1</td>
	          	<td>9</td>
	          	<td>4.25</td>
	          	<td>2400</td>
	          	<td><?PHP echo number_format(1700000,0,',','.')?></td>
	          </tr>
	          <tr>
	          	<td>18</td>
	          	<td>Hungary</td>
	          	<td>1979</td>
	          	<td>26</td>
	          	<td>11</td>
	          	<td>2</td>
	          	<td>2000</td>
	          	<td><?PHP echo number_format(780000,0,',','.')?></td>
	          </tr>
	          <tr>
	          	<td>19</td>
	          	<td>Singapore</td>
	          	<td>2004</td>
	          	<td>30</td>
	          	<td>9</td>
	          	<td>3.4</td>
	          	<td>3200</td>
	          	<td><?PHP echo number_format(1600000,0,',','.')?></td>
	          </tr>
	          <tr>
	          	<td>20</td>
	          	<td>South Korea</td>
	          	<td>1989</td>
	          	<td>28</td>
	          	<td>8.2</td>
	          	<td>3.47</td>
	          	<td>2000</td>
	          	<td><?PHP echo number_format(1020000,0,',','.')?></td>
	          </tr>
	          </tbody>
	         </table><!--/END First Table -->
	         <a href="<?php echo base_url(); ?>home/tambahkapal" class="btn btn-primary col-sm-12" style="margin-bottom:20px;">Kembali</a>

</body>


</html>
