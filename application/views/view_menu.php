<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Train Thailand</title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	<!-- End Bootstrap -->
</head>
<body>
<div class="container">
<br><br>
<center><h2 class="display-3">Train, Thailand</h2><center>
<center><h3 class="display-4">Travel, Let'go</h3><center>
<br>
<table  border="1"> 
<table  border="1"> 
	<table align="center" border="1" width="80%">
  <tr>
	<td rowspan="2"><center>ขบวน</center></td>
   <td colspan="2"><center> ต้นทาง</center></td>
   <td colspan="2"><center> ห้วยราช</center></td>
   <td colspan="2"><center> ปลายทาง</center></td>
   <td rowspan="2"><center>หมายเหตุ</center></td>
  </tr> 
  <tr align="center">
  	<td>สถานี</td>
  	<td>เวลาออก</td>
  	<td>ถึง</td>
  	<td>ออก</td>
  	<td>สถานี</td>
  	<td>ถึงเวลา</td>
  </tr>
  
  
  
<?php
	foreach($menus->result_array() as $menu){

		echo "<tr align=\"center\">";
			echo"<td>".$menu['Train_id'];
			echo"<td>".$menu['Station']."</td>";
			echo"<td>".$menu['Out_Station']."</td>";
			echo"<td>".$menu['To_HR']."</td>";
			echo"<td>".$menu['Out_HR']."</td>";
			echo"<td>".$menu['Station_destination']."</td>";
			echo"<td>".$menu['To_PT']."</td>";
			echo"<td>".$menu['Decaption']."</td>";
			}
?>

		</table>
		<a href="http://localhost/menuproject/index.php/manage_menu">เพิ่มเที่ยวรถไฟ</a>
	</div>

	
</div>
</div>
</body>
</html>