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
			<h2> Daftar Galeri - Delete, Edit or <a href ="addGallery.php">Add</a> it</h2>
			<table id="admin" border="1">
				<tr>
					<td>ID</td>
					<td>Nama Galeri</td>
					<td>Topik</td>
					<td>Gambar Sampul</td>
					<td>Tanggal</td>
					<td>Deskripsi</td>
					<td>Tindakan</td>
				</tr>
				<?php
					include_once("../db.inc.php");
					connect_db($connection);
					$jml_list=20;
					$halaman=isset($_GET['page'])?(int) $_GET['page']:1;
								
					if(!empty($awal)) $awal = 0;
						
					$offset=($halaman-1)*20;
					$sqlstr = "SELECT * FROM galeri LIMIT $offset,20";
					$hasil = mysqli_query($connection, $sqlstr);
					$row = mysqli_fetch_row($hasil);
					if($row){
						do{
							list($id,$namaGaleri,$id_topik,$gambarSampul,$tanggal,$deskripsi) = $row;
							echo "<tr>";
							echo "<td>$id</td>";
							echo "<td>$namaGaleri</td>";
							echo "<td>$id_topik</td>";
							echo "<td>$gambarSampul</td>";
							echo "<td>$tanggal</td>";
							echo "<td>$deskripsi</td>";
							echo"<td><a href=\"addGambarGaleri.php?linkID=$id&judul=$namaGaleri\">Ubah</a><br>
								     <a href=\"deleteGallery.php?linkID=$id\">Hapus</a></td>";
							echo "</tr>";
						}while($row = mysqli_fetch_row($hasil));
					}
				?>
			</table>
		</div>
		<div class="footer">
		</div>
	</body>
</html>