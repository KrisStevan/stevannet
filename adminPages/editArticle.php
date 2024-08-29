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
		<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
			bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
		</script>
		<?php
			include("../db.inc.php");
			connect_db($connection);
			$id=isset($_GET['linkID'])?$_GET['linkID']:'';
			if(isset($_POST['id'])){
				$judul = $_POST['judul'];
				$tanggal_muat = $_POST['tanggal_muat'];
				$tanggal_terjadi = $_POST['tanggal_terjadi'];
				$id_jenis = $_POST['id_jenis'];
				$id_topik = $_POST['id_topik'];
				$isi = $_POST['content'];
				$gambar = $_POST['gambar'];
				$sumber = $_POST['sumber'];
				if (!$gambar){
					$edit_berita = mysqli_query($connection,"UPDATE articles SET 
													judul='$judul', 
													tanggal_muat='$tanggal_muat', 
													tanggal_terjadi='$tanggal_terjadi',
													id_jenis='$id_jenis', 
													id_topik='$id_topik', 
													isi='$isi',
													sumber='$sumber'
													WHERE id = $id");
				}
				else{
					$edit_berita = mysqli_query($connection,"UPDATE articles SET 
												judul='$judul', 
												tanggal_muat='$tanggal_muat', 
												tanggal_terjadi='$tanggal_terjadi',
												id_jenis='$id_jenis', 
												id_topik='$id_topik', 
												isi='$isi',
												gambar='$gambar', 
												sumber='$sumber'
												WHERE id = $id");
				}							
				if(!$edit_berita){
					echo "Ada Masalah Pengeditan<br>";
					die(mysqli_error());
				}
				else{
					echo "<b>Terima kasih! Berita sudah di update!<br>silahkan tunggu.!";
					echo "<meta http-equiv=Refresh content=4;url=adminNews.php>";
				}
			}
			else{
				$result = mysqli_query($connection, "SELECT * FROM articles WHERE id='$id' ");
				while($tampil = mysqli_fetch_array($result)){
					$id = $tampil["id"];
					$judul = $tampil["judul"];
					$tanggal_muat = $tampil["tanggal_muat"];
					$tanggal_terjadi = $tampil["tanggal_terjadi"];
					$id_jenis = $tampil["id_jenis"];
					$id_topik = $tampil["id_topik"];
					$isi = $tampil["isi"];
					$gambar = $tampil["gambar"];
					$sumber = $tampil["sumber"];
		?>
		<div class="centeradmin">
			<h3> Adakah Revisi artikelnya?
				<br><br>
				<form class="search" method= "POST" action="#" align="left">
					<table border = "0" style="font-size: 15px;">
						<tr>
							<td>ID</td>
							<td><input type="text" value= "<?php echo "$id"; ?>" name='id' style="width: 100px; height: 20px;"/></td>
						</tr>
						<tr>
							<td>Judul</td>
							<td><input type="text" value= "<?php echo "$judul"; ?>" name='judul' style="width: 300px; height: 20px;"/></td>
						</tr>
						<tr>
							<td>Tanggal Muat</td>
							<td><input type="text" value= "<?php echo "$tanggal_muat"; ?>" name='tanggal_muat' style="width: 300px; height: 20px;"//></td>
						</tr>
						<tr>
							<td>Tanggal Kejadian</td>
							<td><input type="text" value= "<?php echo "$tanggal_terjadi"; ?>"name='tanggal_terjadi' style="width: 300px; height: 20px;"/></td>
						</tr>
						<tr>
							<td>ID Jenis</td>
							<td>
								<select name="id_jenis" style="width: 200px; height: 20px;">
									<option selected><?php echo"$id_jenis";?></option>
									<option value="1">1 - News</option>
									<option value="2">2 - Events</option>
									<option value="3">3 - Jokes</option>
									<option value="4">4 - Opinions</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>ID Topik</td>
							<td>
								<select name="id_topik" style="width: 200px; height: 20px;">
									<option selected><?php echo"$id_topik";?></option>
									<option value="1">1 - Eurovision</option>
									<option value="2">2 - Racing</option>
									<option value="3">3 - Eurogames</option>
									<option value="4">4 - Trending</option>
									<option value="5">5 - Budaya Langka</option>
									<option value="6">6 - Cover Bahasa Asing</option>
									<option value="7">7 - Aksi Tak Biasa</option>
									<option value="8">8 - Indonesians Abroad</option>
									<option value="9">9 - Legenda</option>
									<option value="10">10 - Koleksiku</option>
									<option value="11">11 - Kisah Sejarah Terbaik</option>
								</select>
							</td>
						</tr>
						<tr>
							<td width="200px;">Isi</td>
							<td>
								<textarea id="content" name="content" cols="90" rows="10"/><?php echo "$isi"; ?></textarea>
							</td>
						</tr>
						<tr>
							<td>Gambar</td>
							<td><input type="file" name="gambar" style="width: 300px; height: 20px; margin-top:10px;" value="<?php echo "$gambar"; ?>"></td>
						</tr>
						<tr>
							<td>Sumber</td>
							<td><input type="text" value= "<?php echo "$sumber"; ?>" name='sumber' style="width: 300px; height: 20px;"/></td>
						</tr>
					</table>		 	
					<input type="submit" value="Ubah Artikel" style="width: 120px; height: 22px; margin-left:207px; margin-top:10px;"/>
				</form>
				<?php
					}//end of while
				}//end of else
				?>
			</h3>
		</div>
		<div class="footer">
		</div>
	</body>
</html>