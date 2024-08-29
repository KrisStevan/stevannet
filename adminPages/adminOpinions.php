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
			<h2> Apa yang Anda Pikirkan?</h2>
			<table id="admin" border="1">
				<tr>
					<td>ID</td>
					<td>Judul</td>
					<td>Tanggal Muat</td>
					<td>Tanggal Kejadian</td>
					<td>ID Jenis</td>
					<td>ID Topik</td>
					<td>Gambar</td>
					<td>Sumber</td>
					<td>Tindakan</td>
				</tr>
					<?php
						include_once("../db.inc.php");
						connect_db($connection);
						$sqlstr = "SELECT * FROM articles WHERE id_jenis = 4";
						$hasil = mysqli_query($connection, $sqlstr);
						$row = mysqli_fetch_row($hasil);
						if($row)
						{
							do{
								list($id,$judul,$tanggal_muat,$tanggal_terjadi,$id_jenis,$id_topik,$isi,$gambar,$sumber) = $row;
								echo "<tr>";
								echo "<td>$id</td>";
								echo "<td>$judul</td>";
								echo "<td>$tanggal_muat</td>";
								echo "<td>$tanggal_terjadi</td>";
								echo "<td>$id_jenis</td>";
								echo "<td>$id_topik</td>";
								echo "<td>$gambar</td>";
								echo "<td>$sumber</td>";
								echo"<td><a href=\"editArticle.php?linkID=$id\">Ubah</a><br>
										 <a href=\"deleteArticle.php?linkID=$id\">Hapus</a></td>";
								echo "</tr>";
							}while($row = mysqli_fetch_row($hasil));
						}
					?>
				</tr>
			</table>
			<h2>Opini dari Pengguna</h2>
				<?php
					include_once("../db.inc.php");
					connect_db($connection);
					$sqlstr = "SELECT * FROM opinions";
					$hasil = mysqli_query($connection, $sqlstr);
					$row = mysqli_fetch_row($hasil);
					if($row)
					{
						echo "<table id=\"admin\" border=\"1\">";
						echo "<tr>
								<td>ID</td>
								<td>Judul</td>
								<td>Tanggal Muat</td>
								<td>Isi</td>
								<td>Pengirim</td>
								<td>Tindakan</td>
							</tr>";
						do{
							list($id,$judul,$tanggal_dimuat,$isi,$nama) = $row;
								
							echo "<tr>";
							echo "<td>$id</td>";
							echo "<td>$judul</td>";
							echo "<td>$tanggal_dimuat</td>";
							echo "<td>$isi</td>";
							echo "<td>$nama</td>";
							echo"<td><a href=\"deleteOpinion.php?opiniID=$id\">Hapus</a></td>";
							echo "</tr>";
						}while($row = mysqli_fetch_row($hasil));
						echo "</table>";
					}
					else{
						echo "<p>Belum ada opini</p>";
					}
				?>
				</tr>
			
		</div>
		<div class="footer">
		</div>
	</body>
</html>