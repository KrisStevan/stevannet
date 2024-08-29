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
			<?php
				include "db.inc.php";
				connect_db($connection);
				if(isset($_SESSION['login_user'])){
					$sqlstr = "SELECT reputation from users WHERE username = '$login_session'";
					$hasil=mysqli_query($connection, $sqlstr);
					$row=mysqli_fetch_row($hasil);
					list($reputation) = $row;
				
					echo "<h2 style=\"text-align:center\">Hello $login_session!</h2>";
					echo "<p>Poin Reputasi anda adalah $reputation .<br>";
					if($reputation < 50){
							echo "<br> Poin Reputasi anda sudah rendah. Dimohon untuk jaga sikap anda<br>";
					}
					echo "<br><a href=\"pengantar.php\">Lihat Pengantar</a><br>";
					echo "<br><a href=\"profil.php\">Profil</a><br>";
					
					echo "</p><h3 style=\"margin-left:50px\">Pengumuman Terbaru</h3><p>";
					
					//untuk mengurus pengumuman terbaru
					$sqlnotif = "SELECT * FROM notifications WHERE userPenerima = '$login_session' LIMIT 5";
					$hasilnotif=mysqli_query($connection, $sqlnotif);
					$rownotif=mysqli_fetch_row($hasilnotif);
					if(!$rownotif) echo "Belum ada Pemberitahuan<br>";
					else{
						list($id, $pesan, $userPenerima, $tanggal) = $rownotif;
						echo "$tanggal - $pesan<br>";
					}
					
					echo "--------------------------------------------------------------------------------------------------------<br>";
				}
				
				else{
					$sqlstr = "SELECT * from articles order by id DESC limit 9";
					$hasil_1=mysqli_query($connection, $sqlstr);
					$row=mysqli_fetch_row($hasil_1);
					if(!$row)
						echo "Terjadi Kesalahan pada sistem anda";
					echo "<img src=\"Images/Highlights.jpg\" style=\"margin-left:5px; width:750px; height:60px;\"><br><br>";				
					do{
						echo "<p>";
							list($id,$judul,$tanggal_muat,$tanggal_terjadi,$id_jenis,$id_topik,$isi,$gambar,$sumber) = $row;
							if(!empty($gambar))
								echo "<img src='Images/$gambar' width=35px height=35px align=left>";
							echo "$tanggal_muat<br><a href='berita_detail.php?id=$id'>$judul</a><br>";
						echo "</p>";
					}while($row=mysqli_fetch_row($hasil_1));
				}
			?>
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