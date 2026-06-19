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
							<td><input type="text" name='id' class="adminaddhistory" style="width: 30px; height: 20px; "/></td>
						</tr>
						-->
						<tr>
							<td width="200px;">Tanggal (Dalam Angka)</td>
							<td><input type="text" name='tanggal' class="adminaddhistory" maxlength = "2" style="width: 50px;"/></td>
						</tr>
						<tr>
							<td>Bulan</td>
							<td><select name="bulan" class="adminaddhistory" style="width: 100px;">
									<option value="1" selected>Januari</option>
									<option value="2">Febuari</option>
									<option value="3">Maret</option>
									<option value="4">April</option>
									<option value="5">Mei</option>
									<option value="6">Juni</option>
									<option value="7">Juli</option>
									<option value="8">Agustus</option>
									<option value="9">September</option>
									<option value="10">Oktober</option>
									<option value="11">November</option>
									<option value="12">Desember</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Tahun (Dalam Angka)</td>
							<td><input type="text" name='tahun' class="adminaddhistory" style="width: 100px;"/></td>
						</tr>
						<tr>
							<td>Judul</td>
							<td><input type="text" name='judul' class="adminaddhistory" style="width: 500px;"/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" value="Tambah Sejarah" class="adminaddhistory" style="width: 150px; text-align:center"/></td>
						</tr>
					</table>
				</form>
			</h3>
		</div>
		<div class="footer">
		</div>
	</body>
</html>