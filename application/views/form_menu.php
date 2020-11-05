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

<div id="container"  align="center">
	<form action="Manage_menu/reg_train" method="post">
	<br><br>
	<div class="container">
	<div id="body"  align="center">
		<table style="width:50%" border="0">
	<tr>
		<th></th>
		<th></th>
	</tr>
	<h2 class="display-4">Insert, station!</h2>
	<h2 class="display-5">Huayrach, station!</h2><br>
	<tr>
		<td>หมายเลขขบวนรถไฟ</td>
		<td>
			<input type="text" class="form-control" name="Train_id">
		</td>
	</tr>
	<tr>
		<td>ชื่อสถานีต้นทาง</td>
		<td>
			<input type="text" class="form-control" name="Station">
		</td>
	</tr>
	<tr>
		<td>เวลาออกจากสถานีต้นทาง</td>
		<td>
			<input type="text" class="form-control" name="Time_out">
		</td>
	</tr>
	<tr>
		<td>ถึงสถานีห้วยราช</td>
		<td>
			<input type="text" class="form-control" name="To_HR">
		</td>
	</tr>
	<tr>
		<td>ออกจากสถานีห้วยราช</td>
		<td>
			<input type="text" class="form-control" name="Out_HR">
		</td>
	</tr>
	<tr>
		<td>ชื่อสถานีปลายทาง</td>
		<td>
			<input type="text" class="form-control" name="Station_destination">
		</td>
	</tr>
	<tr>
		<td>ถึงสถานีปลายทาง</td>
		<td>
			<input type="text" class="form-control" name="to_time">
		</td>
	</tr>
	<tr>
		<td>ประเภทรถไฟ</td>
		<td>
			<input type="text" class="form-control" name="note">
		</td>
	</tr>
	
	<tr>
		<td> 
		</td>
		<td>
		  <input type="submit" class="btn btn-primary" value="ตกลง">
		</td>
	</tr>	
	</table>
	</form>

	<a href="http://localhost/menuproject/index.php/manage_menu/showall">แสดงตารางเที่ยวรถไฟ</a>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>
</div>
</body>
</html>