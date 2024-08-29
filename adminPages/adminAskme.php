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
			<h2> Daftar Pertanyaan - Ada yang pantas kah?</h2>
			<table id="admin" border="1">
				<tr>
					<td>ID</td>
					<td>Judul</td>
					<td>Tanggal Muat</td>
					<td>Jawaban</td>
					<td>Tindakan</td>
				</tr>
					<?php
						include_once("../db.inc.php");
						connect_db($connection);
						$sqlstr = "SELECT * FROM questions";
						$hasil = mysqli_query($connection, $sqlstr);
						$row = mysqli_fetch_row($hasil);
						if($row)
						{
							do{
								list($id,$judul,$tanggal_muat,$jawaban) = $row;
								echo "<tr>";
								echo "<td>$id</td>";
								echo "<td>$judul</td>";
								echo "<td>$tanggal_muat</td>";
								echo "<td>$jawaban</td>";
								echo"<td><a href=\"deleteQuestion.php?linkID=$id\">Hapus</a><br>
										 <a href=\"answer.php?linkID=$id\">Jawab</a></td>";
								echo "</tr>";
							}while($row = mysqli_fetch_row($hasil));
						}
					?>
				</tr>
			</table>
		</div>
		<div class="footer">
		</div>
	</body>
</html>