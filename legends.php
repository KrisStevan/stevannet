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
			<img src="Images/aqua.jpg" style="width:100px; height:40px; margin-left:5px; margin-top:5px;">
			<h2 style="display: inline; margin-left:-2px; vertical-align:text-bottom;">
				Masih Ingatkah dengan Mereka?
			</h2><br><br>
			<p>
				<?php
					include "db.inc.php";
					connect_db($connection);
					$jml_list=8;
					$halaman=isset($_GET['page'])?(int) $_GET['page']:1;
					
					if(!empty($awal)) $awal = 0;
					
					$offset=($halaman-1)*8;
					$sqlstr = "SELECT id, judul, tanggal_muat, gambar from articles WHERE id_topik='9' order by id DESC limit $offset,8";
					$sqlstr2 = "SELECT id, namaGaleri, tanggal, gambarSampul from galeri WHERE id_topik='9' order by id DESC limit $offset,4";
					$hasil_1=mysqli_query($connection, $sqlstr);
					$hasil_2=mysqli_query($connection, $sqlstr2);
					$row=mysqli_fetch_row($hasil_1);
					$row2=mysqli_fetch_row($hasil_2);

					//bagian artikel
					if(!$row && !$row2)
						echo "Terjadi Kesalahan pada sistem anda";
					else{
						do{
							list($id, $judul, $tanggal_muat, $gambar) = $row;
							if(!empty($gambar))
								echo "<img src='Images/$gambar' width=40px height=40px align=left>";
							echo "<a href='berita_detail.php?id=$id'>$tanggal_muat<br>$judul</a><br>";
						}while($row=mysqli_fetch_row($hasil_1));
					}

					//bagian galeri
					if($row2)
					{
						do{
							list($id, $namaGaleri, $tanggal, $gambarSampul) = $row2;
							echo "<img src='Galeri/$gambarSampul' width=40px height=40px align=left>$tanggal<br>";
							echo "<a href=\"isiGaleri.php?id=$id\">$namaGaleri</a><br>";
						}while($row2=mysqli_fetch_row($hasil_2));
					}

					//paginasi halaman
					$sqlstrhitung = "SELECT * from articles WHERE id_topik='9'";
					$sqlstrhitung2 = "SELECT * from galeri WHERE id_topik='9'";
					
					$hitung_2 = mysqli_query($connection, $sqlstrhitung);
					$hitung_3 = mysqli_query($connection, $sqlstrhitung2);
					$jumlah = mysqli_num_rows($hitung_2) + mysqli_num_rows($hitung_3);
					
					$i=$jumlah/8;
					$i=ceil($i);
								
					echo "<center>Halaman ";
					for($j=1;$j<=$i;$j++)
					{
						$awal = (($j-1)*4+$j)-1;
						echo "[<a href='legends.php?awal=$awal&page=$j'>$j</a>]";
					}
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