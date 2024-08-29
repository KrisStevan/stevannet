<?php
	include('../logs/login.php'); // Includes Login Script
	include('../logs/session.php');
	if(!isset($_SESSION['login_user'])){
		header("location: ../admin.php");
	}
	else if(isset($_SESSION['login_user'])){
		if($login_session != 'admin1')
			header("location: ../home.php");
	}
?>
<html>
	<head>
		<link rel="stylesheet" href="../penampilan.css">
		<div id="header">
			
		</div>
		<?php
			require("leftDIVAdmin.php");
		?>
	</head>
	
	<body>
		<div class="centeradmin">
			<h3>Ada Sejarah Baru?
				<br><br>
				<form method="post" action="addingHistory.php?save=ok" class="adminaddhistory" align="left">
					<table border = "0" style="font-size: 15px;">
						<!--
						<tr>
							<td>ID</td>
							<td><input type="text" name='id' class="adminaddhistory" style="width: 30px; height: 20px;  margin-left: 100px;"/></td>
						</tr>
						-->
						<tr>
							<td>Tanggal (Dalam Angka)</td>
							<td><input type="text" name='tanggal' class="adminaddhistory" style="width: 30px; height: 20px;  margin-left: 100px;"/></td>
						</tr>
						<tr>
							<td>Bulan</td>
							<td><select name="bulan" class="adminaddhistory" style="width: 30px; height: 20px;  margin-left: 100px;">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Tahun (Dalam Angka)</td>
							<td><input type="text" name='tahun' class="adminaddhistory" style="width: 50px; height: 20px;  margin-left: 100px;"/></td>
						</tr>
						<tr>
							<td>Judul</td>
							<td><input type="text" name='judul' class="adminaddhistory" style="width: 500px; height: 20px;  margin-left: 100px;"/></td>
						</tr>
					</table>		 	
					<input type="submit" value="Tambah Sejarah" class="adminaddhistory" style="width: 150px; height: 22px; margin-left:283px;"/>
				</form>
			</h3>
		</div>
		<div class="footer">
		</div>
	</body>
</html>