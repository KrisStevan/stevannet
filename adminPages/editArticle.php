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
							<td><input type="text" value= "<?php echo "$id"; ?>" name='id' style="width: 100px;"/></td>
						</tr>
						<tr>
							<td width="200px;">Judul</td>
							<td><input type="text" value= "<?php echo "$judul"; ?>" name='judul' style="width: 800px;"/></td>
						</tr>
						<tr>
							<td>Tanggal Muat</td>
							<td><input type="text" value="<?php echo "$tanggal_muat"; ?>" name='tanggal_muat' style="width: 300px;" /></td>
						</tr>
						<tr>
							<td>Tanggal Kejadian</td>
							<td><input type="text" value="<?php echo "$tanggal_terjadi"; ?>" name='tanggal_terjadi' style="width: 300px;"/></td>
						</tr>
						<tr>
							<td>ID Jenis</td>
							<td>
								<select name="id_jenis" class="signup" style="width: 300px; padding: 5px;">
								<option value="">-- Pilih Jenis --</option>
									<?php
										$sqlstr = "SELECT id, nama_jenis FROM jenis";
										$hasil = mysqli_query($connection, $sqlstr);
										if($hasil && mysqli_num_rows($hasil) > 0) {
											while($row = mysqli_fetch_assoc($hasil)) {
												$option_id = $row['id'];
												$option_name = htmlspecialchars($row['nama_jenis']);
												$selected = ((int)$option_id === (int)$id_jenis) ? ' selected="selected"' : '';
												echo "<option value=\"" . $option_id . "\"" . $selected . ">" . $option_name . "</option>";
											}
										} else {
											echo "<option value=\"\">-- Tidak ada jenis --</option>";
										}
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td>ID Topik</td>
							<td>
								<select name="id_topik" class="signup" style="width: 300px; height: 35px; padding: 5px;">
									<option value="">-- Pilih Topik --</option>
									<?php
										$sqlstr = "SELECT id, nama_topik FROM topik";
										$hasil = mysqli_query($connection, $sqlstr);
										if($hasil && mysqli_num_rows($hasil) > 0) {
											while($row = mysqli_fetch_assoc($hasil)) {
												$option_id = $row['id'];
												$option_name = htmlspecialchars($row['nama_topik']);
												$selected = ((int)$option_id === (int)$id_topik) ? ' selected="selected"' : '';
												echo "<option value=\"" . $option_id . "\"" . $selected . ">" . $option_name . "</option>";
											}
										} else {
											echo "<option value=\"\">-- Tidak ada topik --</option>";
										}
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Isi</td>
							<td>
								<textarea id="content" name="content" cols="90" rows="10"><?php echo htmlspecialchars($isi, ENT_QUOTES, 'UTF-8'); ?></textarea>
							</td>
						</tr>
						<tr>
							<td>Gambar</td>
							<td><input type="file" name="gambar" style="width: 300px; " value="<?php echo "$gambar"; ?>"></td>
						</tr>
						<tr>
							<td>Sumber</td>
							<td><input type="text" value= "<?php echo "$sumber"; ?>" name='sumber' style="width: 800px;"/></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" value="Ubah Artikel" style="width: 150px;"/></td>
						</tr>
					</table>
				</form>
				<?php
					}//end of while
				}//end of else
				?>
			</h3>
		</div>
		<div class="footer">
			<p>&copy; 2016 Stevannet. All rights reserved.</p>
		</div>
	</body>
</html>