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
			<p>
					<?php
						include "db.inc.php";
						connect_db($connection);
						
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
							echo "<b><center>$judul</center><br></b>";
							echo "Penyanyi: $sumber<br><br>";
							echo "<div align='justify'>$isi<br></div>";
							echo "</td></tr></table><br>";
						}while($baris=mysqli_fetch_row($hasil));
						
						//bagian komentar
						$sqlcomm = "SELECT * FROM news_comments WHERE idBerita='$id'";
						$hasilcomm=mysqli_query($connection, $sqlcomm);
						$bariscomm=mysqli_fetch_row($hasilcomm);
						
						echo "<h2><b>Komentar</b></h2>";
						if(isset($_SESSION['login_user'])){
							?><!-- HTML untuk membuat inputan -->
							<form class="komentar" method="post" action="tambahKomentar.php">
								<table border = "0" style = "margin-left:50px">
								<tr>
									<td>Nama : </td>
									<td><input type="text" value = "<?php echo "$login_session";?>" id='nama' name='nama' class="addkomentar" style="width: 100px; height: 35px; border:0px; margin-left: -745px; margin-top:-3px" readonly/></td>
								</tr>
								<tr colspan="2">
									<td>Isi</td>
								</tr>
								<tr colspan="2">
									<td><textarea id='isi' name="isi" cols="115" rows="4"/>Tuliskan komentar anda</textarea><br></td>
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
							echo "<h3><p>Daftar Komentar</p></h3>";
							do{
								list($id,$idBerita,$nama,$tanggal,$isi) = $bariscomm;
								echo "<p>Oleh : $nama <br>";
								echo "$isi";
								echo "<h4 id=\"tanggalKanan\">Dipos tanggal $tanggal<br>";
								echo "--------------------------------------------------------------------------------------------------</h4><br><br></p>";
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