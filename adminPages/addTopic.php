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
			<h3> Tambah Topik Baru
				<br><br>
				<form method="post" action="addingTopic.php?save=ok" class="adminaddtopic" align="left">
					<table border = "0" style="font-size: 15px;">
						<tr>
							<td>ID</td>
							<td><input type="text" name='id' class="adminaddtopic" style="width: 100px; height: 20px;  margin-left: 100px;"/></td>
						</tr>
						<tr>
							<td>Nama Topik</td>
							<td><input type="text" name='nama_topik' class="adminaddtopic" style="width: 300px; height: 20px;  margin-left: 100px;"/></td>
						</tr>
					</table>		 	
					<input type="submit" value="Tambah Topik" class="adminaddtopic" style="width: 150px; height: 22px; margin-left:195px; margin-top:10px;"/>
				</form>
			</h3>
			<h3> Atau Tambah Jenis Baru
				<br><br>
				<form method="post" action="addingJenis.php?save=ok" class="adminaddjenis" align="left">
					<table border = "0" style="font-size: 15px;">
						<tr>
							<td>ID</td>
							<td><input type="text" name='id' class="adminaddjenis" style="width: 100px; height: 20px;  margin-left: 100px;"/></td>
						</tr>
						<tr>
							<td>Nama Jenis</td>
							<td><input type="text" name='nama_jenis' class="adminaddjenis" style="width: 300px; height: 20px;  margin-left: 100px;"/></td>
						</tr>
					</table>		 	
					<input type="submit" value="Tambah Jenis" class="adminaddjenis" style="width: 150px; height: 22px; margin-left:195px; margin-top:10px;"/>
				</form>
			</h3>
		</div>
		<div class="footer">
		</div>
	</body>
</html>