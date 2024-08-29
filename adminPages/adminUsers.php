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
			<p style="display:inline;">
			<h2> Daftar Pengguna</h2>
				<table id="admin" border="1" style="position:relative; display: inline-block;">
					<tr>
						<td>Username</td>
						<td>Alamat Email</td>
						<td>Nama</td>
						<td>Poin Reputasi</td>
						<td>Tindakan</td>
					</tr>
					<?php
						include_once("../db.inc.php");
						connect_db($connection);
						$sqlstr = "SELECT nama,email,username,reputation FROM users";
						$hasil = mysqli_query($connection, $sqlstr);
						$row = mysqli_fetch_row($hasil);
						if($row)
						{
							do{
								list($nama,$email,$username,$reputation) = $row;
								echo "<tr>";
								echo "<td>$username</td>";
								echo "<td>$email</td>";
								echo "<td>$nama</td>";
								echo "<td>$reputation</td>";
								echo"<td><a href=\"editUser.php?userID=$username\">Ubah</a><br>
										 <a href=\"deleteUser.php?userID=$username\">Hapus</a></td>";
								echo "</tr>";
							}while($row = mysqli_fetch_row($hasil));
						}
					?>
				</table>
			</p>
		</div>
		<div class="footer">
		</div>
	</body>
</html>