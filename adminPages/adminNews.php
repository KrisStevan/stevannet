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
			<h2> Daftar Berita</h2>
			<table id="admin" border="1">
				<tr>
					<td>Judul</td>
					<td>Tgl. Muat</td>
					<td>Tgl. Kejadian</td>
					<td>Jenis</td>
					<td>Topik</td>
					<td>Gambar</td>
					<td>Sumber</td>
					<td>Aksi</td>
				</tr>
					<?php
						include_once("../db.inc.php");
						connect_db($connection);
						$jml_list=20;
						$halaman=isset($_GET['page'])?(int) $_GET['page']:1;
								
						if(!empty($awal)) $awal = 0;
						
						$offset=($halaman-1)*20;
						$sqlstr = "SELECT * FROM articles WHERE id_jenis = 1 limit $offset,20";
						$hasil = mysqli_query($connection, $sqlstr);
						$row = mysqli_fetch_row($hasil);
						if($row)
						{
							do{
								list($id,$judul,$tanggal_muat,$tanggal_terjadi,$id_jenis,$id_topik,$isi,$gambar,$sumber) = $row;
							$judul_short = strlen($judul) > 25 ? substr($judul, 0, 25) . '...' : $judul;
							$sumber_short = strlen($sumber) > 20 ? substr($sumber, 0, 20) . '...' : $sumber;
							echo "<tr>";
							echo "<td title='$judul'>$judul_short</td>";
							echo "<td>$tanggal_muat</td>";
							echo "<td>$tanggal_terjadi</td>";
							echo "<td>$id_jenis</td>";
							echo "<td>$id_topik</td>";
							echo "<td>$gambar</td>";
							echo "<td title='$sumber'>$sumber_short</td>";
							echo"<td class='admin-actions'><a href=\"editArticle.php?linkID=$id\">✎</a> <a href=\"deleteArticle.php?linkID=$id\">✕</a></td>";
								echo "</tr>";
							}while($row = mysqli_fetch_row($hasil));
						}
					?>
			</table>
			<?php
				//paginasi halaman
				$sqlstr = "SELECT * from articles WHERE id_jenis='1'";
				$hasil_2 = mysqli_query($connection, $sqlstr);
				$jumlah = mysqli_num_rows($hasil_2);
							
				$i=$jumlah/20;
				$i=ceil($i);
										
				echo "<br><br><center>Halaman ";
				for($j=1;$j<=$i;$j++)
				{
					$awal = (($j-1)*4+$j)-1;
					echo "[<a href='adminNews.php?awal=$awal&page=$j'>$j]";
				}
				echo "</center>";
			?>
		</div>
		<div class="footer">
		</div>
	</body>
</html>