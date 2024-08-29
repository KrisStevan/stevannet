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
			<h1 id="newsJudul">
				Profil Anda
			</h1>
			<p>
				<?php
					include "db.inc.php";
					connect_db($connection);

					if(isset($_SESSION['login_user'])){
						$sqlstr = "SELECT u.nama, u.email, u.username, u.password, u.hobi, u.topikFav, u.reputation, t.id, t.nama_topik from users u JOIN topik t ON u.topikFav = t.id WHERE u.username = '$login_session'";
						$hasil=mysqli_query($connection, $sqlstr);
						$row=mysqli_fetch_row($hasil);
						list($nama,$email,$username,$password,$hobi,$topikFav,$reputation,$tid,$nama_topik) = $row;
						
						echo "<table>";
							echo "<tr>";
								echo "<td>Nama </td>";
								echo "<td> :</td>";
								echo "<td>$nama</td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td>Alamat Email </td>";
								echo "<td> :</td>";
								echo "<td>$email</td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td>Hobi </td>";
								echo "<td> :</td>";
								echo "<td>$hobi</td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td>Topik Favorit </td>";
								echo "<td> :</td>";
								echo "<td>$nama_topik</td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td>Poin Reputasi </td>";
								echo "<td> :</td>";
								echo "<td>$reputation</td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td colspan=\"3\"><a href=\"editProfil.php?linkID=$login_session\">Edit Profil</a></td>";
							echo "</tr>";
						echo "</table>";
					?>
				</p>
				<h2><center>Daftar Komentar</center></h2>
				<p>
					<?php
						$sqlcomm = "SELECT nc.id, nc.idBerita, nc.nama, nc.tanggal, nc.isi, a.judul from news_comments nc JOIN articles a ON nc.idBerita = a.id WHERE nama = '$login_session'";
						$hasilcomm=mysqli_query($connection, $sqlcomm);
						@$rowcomm=mysqli_fetch_row($hasilcomm);
						if(!$rowcomm) echo "<p>Belum ada Komentar</p><br>";
						else{
							echo "<p><table>";
							do{
								list($id,$idBerita,$nama,$tanggal,$isi,$judul) = $rowcomm;
								
									echo "<tr>";
										echo "<td>Pada Tanggal </td>";
										echo "<td> :</td>";
										echo "<td>$tanggal</td>";
									echo "</tr>";
									echo "<tr>";
										echo "<td>Isi </td>";
										echo "<td> :</td>";
										echo "<td>$isi</td>";
									echo "</tr>";
									echo "<tr>";
										echo "<td>Pada Berita </td>";
										echo "<td> :</td>";
										echo "<td>$judul</td>";
									echo "</tr>";
									echo "<tr>";
										echo "<td colspan='3'><a href=\"deleteCommentUser.php?linkID=$id\">Hapus</a></td>";
									echo "</tr>";
									echo "<tr>";
										echo "<td colspan='3'>--------------------------------------------------------------------------------------------------</td>";
									echo "</tr>";
								
							}while($rowcomm=mysqli_fetch_row($hasilcomm));
							echo "</p></table>";
						}
					?>
				</p>
				<h2><center>Daftar Opini</center></h2>
				<p>
					<?php
						$sqlo = "SELECT * FROM opinions WHERE nama = '$login_session'";
						$hasilo=mysqli_query($connection, $sqlo);
						@$rowo=mysqli_fetch_row($hasilo);
						if(!$rowo) echo "<p>Belum ada Opini yang Ditulis</p><br>";
						else{
							echo "<p><table id=\"admin\" border=\"1\">";
							echo "<tr>";
								echo "<td>Pada Tanggal</td>";
								echo "<td>Judul</td>";
								echo "<td>Tindakan</td>";
							echo "</tr>";
							do{
								list($id,$judul,$tanggal_dimuat,$isi,$nama) = $rowo;
									echo "<tr>";
										echo "<td>$tanggal_dimuat</td>";
										echo "<td>$judul</td>";
										echo "<td><a href=\"editOpiniUser.php?id=$id\">Ubah</a><br>
										 <a href=\"deleteOpiniUser.php?linkID=$id\">Hapus</a></td>";
									echo "</tr>";
							}while($rowo=mysqli_fetch_row($hasilo));
							echo "</table>";
						}
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