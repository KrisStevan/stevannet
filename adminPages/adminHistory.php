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
			<h2> Daftar Sejarah - Delete, Edit or <a href ="addHistory.php">Add</a> it</h2>
			<table id="admin" border="1">
				<tr>
					<td>ID</td>
					<td>Tanggal</td>
					<td>Bulan</td>
					<td>Tahun</td>
					<td>Judul</td>
					<td>Tindakan</td>
				</tr>
					<?php
						include_once("../db.inc.php");
						connect_db($connection);
						$jml_list=30;
						$halaman=isset($_GET['page'])?(int) $_GET['page']:1;
								
						if(!empty($awal)) $awal = 0;
						
						$offset=($halaman-1)*30;
						$sqlstr = "SELECT * FROM sejarah limit $offset,30";
						$hasil = mysqli_query($connection, $sqlstr);
						$row = mysqli_fetch_row($hasil);
						if($row)
						{
							do{
								list($id,$tanggal,$bulan,$tahun,$judul) = $row;
								echo "<tr>";
								echo "<td>$id</td>";
								echo "<td>$tanggal</td>";
								echo "<td>$bulan</td>";
								echo "<td>$tahun</td>";
								echo "<td>$judul</td>";
								echo"<td><a href=\"editHistory.php?linkID=$id\">Ubah</a><br>
										 <a href=\"deleteHistory.php?linkID=$id\">Hapus</a></td>";
								echo "</tr>";
							}while($row = mysqli_fetch_row($hasil));
						}
					?>
			</table>
			<?php
				//paginasi halaman
				$sqlstr = "SELECT * from sejarah";
				$hasil_2 = mysqli_query($connection, $sqlstr);
				$jumlah = mysqli_num_rows($hasil_2);
							
				$i=$jumlah/30;
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