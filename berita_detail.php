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
		<div class="leftsidedetail">
			<?php 
				require("leftDIV.php");
			?>
		</div>
		<div class="centerdetail">
			<p>
				<?php
					include "db.inc.php";
					connect_db($connection);
					
					$halaman=isset($_GET['page'])?(int) $_GET['page']:1;
					if(!empty($awal)) $awal = 0;
				
					$offset=($halaman-1)*2000;
					
					$id = $_GET["id"];
					$sqlstr = "SELECT * FROM articles WHERE id='$id'";
					$hasil=mysqli_query($connection, $sqlstr);
					$baris=mysqli_fetch_row($hasil);
					
					if(!$baris){
						die("Terjadi Kesalahan Sistem");
						die(mysqli_error);
					}
					do{
						list($id,$judul,$tanggal_muat,$tanggal_terjadi,$id_jenis,$id_topik,$isi,$gambar,$sumber) = $baris;
						echo "<table width=100% border=0 cellpadding=0 cellspacing=0><tr><td>";
						echo "<h3><center>$judul</center></h3>";
						if(!empty($gambar))
							echo "<img src=\"Images/$gambar\" width=200px height=200px align=left>";
						echo "<i>$tanggal_terjadi</i><br><br>";
						$isian = substr($isi,$offset,2000);
						echo "<div align='justify'>$isian<br></div>";
						echo "</td></tr></table>";
					}while($baris=mysqli_fetch_row($hasil));
					
					//paginasi halaman
					$jumlahKalimat = strlen($isi);
					$i = $jumlahKalimat/2000;
					$i=ceil($i);
					
					echo "<p>Sumber: $sumber</p>";
					
					echo "<p>Halaman ";
					for($j=1;$j<=$i;$j++)
					{
						$awal = (($j-1)*4+$j)-1;
						echo "[<a href='berita_detail.php?id=$id&awal=$awal&page=$j'>$j</a>]";
					}
					echo "</p>";
					
					//bagian komentar
					$sqlcomm = "SELECT * FROM news_comments WHERE idBerita='$id'";
					$hasilcomm=mysqli_query($connection, $sqlcomm);
					$bariscomm=mysqli_fetch_row($hasilcomm);
					
					echo "<h3><b>Komentar</b></h3>";
					if(isset($_SESSION['login_user'])){
						?><!-- HTML untuk membuat inputan -->
						<form class="komentar" method="post" action="tambahKomentar.php">
							<table border = "0" style = "margin-left:20px">
							<tr>
								<td>Nama : <input type="text" value = "<?php echo "$login_session";?>" id='nama' name='nama' class="addkomentar" style="border:0px; margin-top:-3px" readonly/></td>
							</tr>
							<tr colspan="2">
								<td>Isi</td>
							</tr>
							<tr colspan="2">
								<td><textarea id='isi' name="isi" cols="115" rows="4"/></textarea><br></td>
							</tr>
							<tr colspan="2">
								<input type="hidden" name="id" value="<?php echo $id; ?>">
								<td><input type="submit" value="Post" class="commentbutton" style="width: 75px; height: 35px; margin-top:5px"/><td>
							</tr>
							</table>
						</form>
						<?php
					}
					if(!$bariscomm){
						echo "<b><p>Tidak ada Komentar</p></b>";
					}
					else{
						echo "<h3>Daftar Komentar</h3>";
						do{
							list($id,$idBerita,$nama,$tanggal,$isi) = $bariscomm;
							echo "<p>Oleh : $nama <br>";
							echo "$isi";
							echo "<h4 id=\"tanggalKanan\">Dipos tanggal $tanggal<br>";
							echo "</h4><br><p>----------------------------------------------------------------------------------------</p><br></p>";
						}while($bariscomm=mysqli_fetch_row($hasilcomm));
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