<!DOCTYPE html>
<?php
	include('logs/login.php'); // Includes Login Script
	include('logs/session.php');
	if(isset($_SESSION['login_user'])){
		if($login_session == 'admin1')
			header("location: adminPages/adminHome.php");
	}
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="penampilan.css">
		<div id="header">
			<div id="searchform">
				<form class="search" action="searches.php">
					<?php
						include("searchMenu.php");
					?>
				</form>
			</div>
		</div>
		<?php
			include("menuAtas.php");
		?>
	</head>
	
	<body onload="startTime()">
		<div class="leftside">
			<?php 
				require("leftDIV.php");
			?>
		</div>
		<div class="center">
			<h2 id="newsJudul">
				<center>Berita Terbaru</center>
			</h2>
			<p>
				<?php
					include "db.inc.php";
					connect_db($connection);
					$jml_list=10;
					$halaman=isset($_GET['page'])?(int) $_GET['page']:1;
							
					if(!empty($awal)) $awal = 0;
					
					$offset=($halaman-1)*10;
					$sqlstr = "SELECT * from articles WHERE id_jenis='1' order by id DESC limit $offset,10";
					$hasil_1=mysqli_query($connection, $sqlstr);
					$row=mysqli_fetch_row($hasil_1);
					if(!$row)
						echo "Terjadi Kesalahan pada sistem anda";
					do{
						list($id,$judul,$tanggal_muat,$tanggal_terjadi,$id_jenis,$id_topik,$isi,$gambar,$sumber) = $row;
						if(!empty($gambar))
							echo "<img src='Images/$gambar' width=35px height=35px align=left>";
						echo "<a href='berita_detail.php?id=$id'>$tanggal_muat<br>$judul</a><br>";
						echo "<br>";
					}while($row=mysqli_fetch_row($hasil_1));
					
					//paginasi halaman
					$sqlstr = "SELECT * from articles WHERE id_jenis='1'";
					$hasil_2 = mysqli_query($connection, $sqlstr);
					$jumlah = mysqli_num_rows($hasil_2);
					
					$i=$jumlah/10;
					$i=ceil($i);
								
					echo "<center>Halaman ";
					for($j=1;$j<=$i;$j++)
					{
						$awal = (($j-1)*4+$j)-1;
						echo "[<a href='news.php?awal=$awal&page=$j'>$j</a>]";
					}
					echo "</center>";
				?>
			</p>
		</div>
		<div class="right">
			<?php
				require("rightDIV.php");
			?>
		</div>
		<div class="footer">
		</div>
	</body>
</html>