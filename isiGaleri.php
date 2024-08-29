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
		<script src="tampilGambar.js"></script>
	</head>
	
	<body onload="startTime()">
		<div class="leftside">
			<?php 
				require("leftDIV.php");
			?>
		</div>
		<div class="centerdetail">
			<p>
				<?php
					include "db.inc.php";
					connect_db($connection);
					$id = $_GET["id"];
					$sqlStrUntukJudul = "SELECT namaGaleri,tanggal,deskripsi FROM galeri WHERE id='$id'";
					$pengantar=mysqli_query($connection, $sqlStrUntukJudul);
					$row=mysqli_fetch_row($pengantar);

					if(!$row){
						die("Terjadi Kesalahan Sistem");
						die(mysqli_error);
					}
						
					list($namaGaleri,$tanggal,$deskripsi) = $row;
				?>
				<h3><?php echo "$namaGaleri"; ?></h3>
				
				<div id="txtDesc">
					<?php echo "$deskripsi"; ?><br>
				</div>

				<table class='tabelIsi' width=100% border="0" cellpadding="0" cellspacing="0">
					<?php
						$jml_list=12;
						$halaman=isset($_GET['page'])?(int) $_GET['page']:1;
									
						if(!empty($awal)) $awal = 0;
							
						$offset=($halaman-1)*12;
						
						$sqlstr = "SELECT * from gambar WHERE galeri='$id' order by noUrutGambar limit $offset,12";
						$hasil_1=mysqli_query($connection, $sqlstr);
						$row=mysqli_fetch_row($hasil_1);
						$ctr = 0;
						$ctr2 = 0;
						
						if(!$row)
							echo "Terjadi Kesalahan pada sistem anda";
						do{
							list($noGambar,$galeri,$gambar,$nama,$noUrutGambar,$tanggalUnggah,$deskripsi) = $row;
							if($ctr%4==0){
								echo "<tr>";
							}
							//isi tabelnya
							echo "<td width='180' align='center'><img class='image' onmouseover=\"tampilkanDetail($noGambar)\" onmouseout = \"sembunyikanDetail($noGambar)\" src='Galeri/$gambar' width='180' height='180' id='$noGambar'></td>";
							
							//pengaturan baris tabel
							if($ctr!=0 && $ctr%4==0){ 
								echo "</tr>";  
							}
							$ctr++;
							if($ctr==4){ 
								$ctr=0; 
							}
							$ctr2++;
						}while($row = mysqli_fetch_row($hasil_1));
					?>
					<div id="txtHint">
						<b>Silahkan sorot gambar-gambar dibawah untuk melihat penjelasannya</b>
					</div>
					<br>
				</table>
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