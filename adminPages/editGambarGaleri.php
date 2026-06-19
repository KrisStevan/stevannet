<?php
	include('../logs/login.php'); // Includes Login Script
	include('../logs/session.php');
	if(!isset($_SESSION['login_user'])){
		header("location: ../admin.php");
	}
	else if(isset($_SESSION['login_user'])){
		if($login_session != 'admin1')
			header("location: ../home.php");
	}
?>
<html>
	<head>
		<link rel="stylesheet" href="../penampilan.css">
		<div id="header">
			
		</div>
		<?php
			require("leftDIVAdmin.php");
		?>
	</head>
	
	<body>
		<?php
			include("../db.inc.php");
			connect_db($connection);
			$noGambar=isset($_GET['id'])?$_GET['id']:'';
			$linkHapus = "deleteGambar.php?id=$noGambar";
			
			if(isset($_POST['noGambar'])){
				$noGambar = (int)$_POST['noGambar'];
				$galeri = mysqli_real_escape_string($connection, $_POST['galeri']);
				$gambar = isset($_POST['gambarLama']) ? $_POST['gambarLama'] : '';
				$nama = mysqli_real_escape_string($connection, $_POST['nama']);
				$noUrutGambar = (int)$_POST['noUrutGambar'];
				$deskripsi = mysqli_real_escape_string($connection, $_POST['deskripsi']); //mysqli_real_escape_string = mencegah kutip yang mengganggu

				if(!$gambar)
					$edit_gambar = mysqli_query($connection,"UPDATE gambar SET 
													galeri='$galeri', 
													nama='$nama',
													noUrutGambar='$noUrutGambar', 
													deskripsi='$deskripsi'
												WHERE noGambar = $noGambar");
				else
					$edit_gambar = mysqli_query($connection,"UPDATE gambar SET 
													galeri='$galeri', 
													gambar='$gambar', 
													nama='$nama',
													noUrutGambar='$noUrutGambar', 
													deskripsi='$deskripsi'
												WHERE noGambar = $noGambar");
				if(!$edit_gambar){
					echo "Ada Masalah Pengeditan<br>";
					die(mysqli_error($connection));
				}
				else{
					echo "<b>Terima kasih! Gambar sudah di update!<br>silahkan tunggu.!";
					echo "<meta http-equiv=Refresh content=4;url=adminGallery.php>";
				}
			}
			
			else{
				$result = mysqli_query($connection,"SELECT * FROM gambar WHERE noGambar='$noGambar'");
				while($tampil = mysqli_fetch_array($result)){
					$noGambar = $tampil["noGambar"];
					$galeri = $tampil["galeri"];
					$gambar = $tampil["gambar"];
					$nama = $tampil["nama"];
					$noUrutGambar = $tampil["noUrutGambar"];
					$tanggalUnggah = $tampil['tanggalUnggah'];
					$deskripsi = $tampil['deskripsi'];
		?>
		<div class="centeradmin">
			<h3> Adakah Revisi Gambarnya? Atau Mau <a href=<?php echo"$linkHapus";?>>Hapus</a> Gambar Ini?
				<br><br>
				<form class="search" method="POST" action="#" align="left" enctype="multipart/form-data">
					<table border = "0" style="font-size: 15px;">
						<tr>
							<td width="200px;">Nomor Gambar</td>
							<td><input type="text" value= "<?php echo "$noGambar"; ?>" name='noGambar' style="width: 100px;" readonly/></td>
						</tr>
						<tr>
							<td>Nomor Galeri</td>
							<td><input type="text" value= "<?php echo "$galeri"; ?>" name='galeri' style="width: 100px; height: 20px;"/></td>
						</tr>
						<tr>
							<td>Gambar (Lama)</td>
							<td><img src="<?php echo "../Galeri/$gambar"; ?>" width="200px" height="200px"> - <?php echo "$gambar";?>
								<input type="hidden" name = "gambarLama" value="<?php echo "$gambar";?>"></td>
						</tr>
						<tr>
							<td>Gambar (Baru)</td>
							<td><input type="file" name="gambar" style="width: 300px;" value="<?php echo "$gambar"; ?>"></td>
						</tr>
						<tr>
							<td>Nama</td>
							<td><input type="text" value= "<?php echo "$nama"; ?>" name='nama' style="width: 300px;"/></td>
						</tr>
						<tr>
							<td>Nomor Urut Gambar</td>
							<td><input type="text" value= "<?php echo "$noUrutGambar"; ?>" name='noUrutGambar' style="width: 100px;"/></td>
						</tr>
						<tr>
							<td>Deskripsi</td>
							<td>
								<textarea name="deskripsi" cols="90" rows="5"/><?php echo "$deskripsi"; ?></textarea>
							</td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" value="Ubah Gambar" style="width: 150px;"/></td>
						</tr>
					</table>		 	
				</form>
			</h3>
			<?php
				}//end of while
			}//end of else
			?>
		</div>
		<div class="footer">
		</div>
	</body>
</html>