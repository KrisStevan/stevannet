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
		<link rel="stylesheet" href="penampilan.css">
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
			<?php
				//include "db.inc.php";
				//connect_db($connection);
				
				$topik_id = isset($_GET['topic']) ? (int) $_GET['topic'] : 0;
				$sqlstrtop = "SELECT * FROM topik WHERE id = $topik_id";
				$hasiltop = mysqli_query($connection, $sqlstrtop);
				if(!$hasiltop) {
					echo "Terjadi Kesalahan pada sistem anda";
				} else {
					$rowtop = mysqli_fetch_assoc($hasiltop);
					if(!$rowtop) {
						echo "Terjadi Kesalahan pada sistem anda";
					} else {
						$slogan = $rowtop['slogan'];
					}
				}
			?>
			
			<h2 style="display: inline; margin-left:40px; margin-top:-10px;">
				<?php echo isset($slogan) ? $slogan : ''; ?>
			</h2><br><br>
				
			<p>
				<?php
					$jml_list=8;
					$halaman=isset($_GET['page'])?(int) $_GET['page']:1;
							
					if(!empty($awal)) $awal = 0;

					$offset=($halaman-1)*8;
					$sqlstr = "SELECT * from articles WHERE id_topik= $topik_id order by id DESC limit $offset,8";
					$hasil=mysqli_query($connection, $sqlstr);
					$row=mysqli_fetch_row($hasil);

					if(!$row)
						echo "Terjadi Kesalahan pada sistem anda";
					do{
						list($id,$judul,$tanggal_muat,$tanggal_terjadi,$id_jenis,$id_topik,$isi,$gambar,$sumber) = $row;
						echo "<a href='berita_detail.php?id=$id'>$tanggal_muat - $judul</a><br>";
						$isian = substr($isi,0,150);
						echo "<br><br>";
					}while($row=mysqli_fetch_row($hasil));
				?>
			</p>
		</div>
	</body>
</html>