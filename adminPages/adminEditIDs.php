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
				<h2>Topik dan Jenis - Delete, Edit or <a href="addTopic.php">Add</a> it</h2>
				<table id="admin" border="1" style= "position:relative;">
					<tr>
						<td>ID</td>
						<td>Topik</td>
						<td>Tindakan</td>
					</tr>
						<?php
							include_once("../db.inc.php");
							connect_db($connection);
							$sqlstr = "SELECT * FROM topik";
							$hasil = mysqli_query($connection, $sqlstr);
							$row = mysqli_fetch_row($hasil);
							if($row)
							{
								do{
									list($id,$nama_topik) = $row;
									echo "<tr>";
									echo "<td>$id</td>";
									echo "<td>$nama_topik</td>";
									echo"<td><a href=\"editTopic.php?linkID=$id\">Ubah</a><br>
											 <a href=\"deleteTopic.php?linkID=$id\">Hapus</a></td>";
									echo "</tr>";
								}while($row = mysqli_fetch_row($hasil));
							}
						?>
					</tr>
				</table>
			<p>
				<table id="admin" border="1" style = "position:relative; top:-530px; left:500px; text-align:center;">
					<tr>
						<td>ID</td>
						<td>Jenis</td>
						<td>Tindakan</td>
					</tr>
					<?php
							include_once("../db.inc.php");
							connect_db($connection);
							$sqlstr = "SELECT * FROM jenis";
							$hasil = mysqli_query($connection, $sqlstr);
							$row = mysqli_fetch_row($hasil);
							if($row)
							{
								do{
									list($id,$nama_jenis) = $row;
									echo "<tr>";
									echo "<td>$id</td>";
									echo "<td>$nama_jenis</td>";
									echo"<td><a href=\"editJenis.php?linkID=$id\">Ubah</a><br>
											 <a href=\"deleteJenis.php?linkID=$id\">Hapus</a></td>";
									echo "</tr>";
								}while($row = mysqli_fetch_row($hasil));
							}
						?>
					</tr>
				</table>
			</p>
		</div>
		<div class="footer">
		</div>
	</body>
</html>