<?php
//buat koneksi dengan MySQL
$user_name = "root";
$password = "";
$database = "surveykapal";
$host_name = "localhost"; 
 
mysql_connect($host_name, $user_name, $password);
 
if (mysql_select_db($database)){
	echo "Ada database";
}
else echo "Gaada database";
?>