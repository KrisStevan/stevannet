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
			<h2 id="newsJudul">
				<center>Galeri</center>
			</h2>
			<p>
				<?php
					include "db.inc.php";
					connect_db($connection);
					$jml_list=10;
					$halaman=isset($_GET['page'])?(int) $_GET['page']:1;
											
					if(!empty($awal)) $awal = 0;
									
					$offset=($halaman-1)*10;
					$sqlstr = "SELECT * from galeri order by id DESC limit $offset,10";
					$hasil_1=mysqli_query($connection, $sqlstr);
					$row=mysqli_fetch_row($hasil_1);
					if(!$row)
						echo "Terjadi Kesalahan pada sistem anda";
					else{
						do{
							list($id,$namaGaleri,$id_topik,$gambarSampul,$tanggal,$deskripsi) = $row;
							echo "<img src='Galeri/$gambarSampul' width=40px height=40px align=left>$tanggal<br>";
							echo "<a href=\"isiGaleri.php?id=$id\">$namaGaleri</a><br><br><br>";
						}while($row=mysqli_fetch_row($hasil_1));
					}
					echo "<br>";
					//paginasi halaman
					$sqlstr = "SELECT * from galeri";
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