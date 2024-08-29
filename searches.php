<?php
	include('logs/login.php'); // Includes Login Script
	include('logs/session.php');
	if(isset($_SESSION['login_user'])){
		if($login_session == 'admin1')
			header("location: adminPages/adminHome.php");
	}
	include "db.inc.php";
	connect_db($connection);
	$src = $_GET["src"];
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
				$jml_list=8;
				$halaman=isset($_GET['page'])?(int) $_GET['page']:1;
							
				if(!empty($awal)) $awal = 0;
					
				$offset=($halaman-1)*8;
				
				if(empty($src)) echo "<h1>Jangan Kosong Pencariannya</h1>";
				else{
					echo "<h1 id=\"askmeJudul\">Hasil Pencarian kata \"$src\"</h1>";
					
					$sqlArtikel = "SELECT * FROM articles WHERE (isi LIKE '%$src%') OR (judul LIKE '%$src%') limit $offset,8";
					$hasilArtikel=mysqli_query($connection, $sqlArtikel);
					$rowArtikel=mysqli_fetch_row($hasilArtikel);
					
					echo "<p>";
					echo "<b>Berita<br><br></b>";
					if(!$rowArtikel) 
						echo "Berita Tidak Ditemukan";
					else{
						do{
							list($id,$judul,$tanggal_muat,$tanggal_terjadi,$id_jenis,$id_topik,$isi,$gambar,$sumber) = $rowArtikel;
							echo "$tanggal_muat - <a href='berita_detail.php?id=$id'>$judul</a><br>";
							$posIsian = strpos($isi,$src);
							$isian = substr($isi,$posIsian,100);
							echo "...$isian ...<br><br>";
						}while($rowArtikel=mysqli_fetch_row($hasilArtikel));
					}
					echo "</p>";
					
					$sqlPertanyaan = "SELECT * FROM questions WHERE (pertanyaan LIKE '%$src%') OR (jawaban LIKE '%$src%') limit $offset,5";
					$hasilPertanyaan = mysqli_query($connection, $sqlPertanyaan);
					$rowPertanyaan = mysqli_fetch_row($hasilPertanyaan);
					
					echo "<p>";
					echo "<b>Pertanyaan<br><br></b>";
					if(!$rowPertanyaan) 
						echo "Pertanyaan Tidak Ditemukan";
					else{
						do{
							list($id,$pertanyaan,$tanggal_muat,$jawaban) = $rowPertanyaan;
							echo "$tanggal_muat<br>$pertanyaan<br>$jawaban<br>";
							echo "---------------------------------------------------------------------------------<br>";
						}while($rowPertanyaan=mysqli_fetch_row($hasilArtikel));
					}
					echo "</p>";
				}
				
				//paginasi halaman
					$sqlstr = "SELECT * FROM articles WHERE (isi LIKE '%$src%') OR (judul LIKE '%$src%')";
					$hasil_2 = mysqli_query($connection, $sqlstr);
					$jumlah = mysqli_num_rows($hasil_2);
					
					$i=$jumlah/8;
					$i=ceil($i);
								
					echo "<center>Halaman ";
					for($j=1;$j<=$i;$j++)
					{
						$awal = (($j-1)*4+$j)-1;
						echo "[<a href='searches.php?src=$src&awal=$awal&page=$j'>$j</a>]";
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