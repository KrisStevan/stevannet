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
			include_once("../db.inc.php");
			connect_db($connection);
			$galleryID = isset($_GET['linkID'])?$_GET['linkID']:'';
			$judul = isset($_GET['judul'])?$_GET['judul']:'';
					
			$jml_list=12;
			$halaman=isset($_GET['page'])?(int) $_GET['page']:1;
			if(!empty($awal)) $awal = 0;
			$offset=($halaman-1)*12;
								
			$sqlstr = "SELECT * FROM gambar WHERE galeri='$galleryID' order by noUrutGambar limit $offset,12";
			$hasil = mysqli_query($connection, $sqlstr);
			@$row = mysqli_fetch_row($hasil);
					
			$ctr = 0;
			$ctr2 = 0;
		?>
		<div class="centeradmin">
			<h2> Edit atau Tambah Gambar - <?php echo "$judul";?>
				<br><br>
				<?php
					do{
						list($noGambar,$galeri,$gambar,$nama,$noUrutGambar,$tanggalUnggah,$deskripsi) = $row;
						if($ctr%5==0){
							echo "<tr>";
						}
						//isi tabelnya
						echo "<td width='180'><a href=\"editGambarGaleri.php?id=$noGambar\">$noUrutGambar</a><img class='image' src='../Galeri/$gambar' width='180' height='180' id='$noGambar'></td>";
						
						//pengaturan baris tabel
						if($ctr!=0 && $ctr%5==0){ 
							echo "</tr>";  
						}
						$ctr++;
						if($ctr==5){ 
							$ctr=0; 
						}
						$ctr2++;
					}while(@$row=mysqli_fetch_row($hasil));
				?>
				<br>
				<form method="post" action="addingGalleryPicture.php?save=ok&galeri=$galleryID" class="adminaddgallery" align="left" enctype="multipart/form-data">
					<table border = "0" style="font-size: 15px;">
						<tr>
							<input type="hidden" id='namaGaleri' name='namaGaleri' value="<?php echo $judul; ?>">
							<input type="hidden" id='galleryID' name='galleryID' value="<?php echo $galleryID; ?>">
						</tr>
						<tr>
							<td>Gambar</td>
							<td><input type="file" name='gambar' style="width: 300px; height: 20px; margin-left: 100px;"/></td>
						</tr>
						<tr>
							<td>Nama</td>
							<td><input type="text" id='nama' name='nama' class="adminaddgallery" style="width: 300px; height: 20px; margin-left:100px;"/></td>
						</tr>
						<tr>
							<td>Nomor Urut</td>
							<td><input type="text" id='noUrutGambar' name='noUrutGambar' class="adminaddgallery" style="width: 100px; height: 20px; margin-left:100px;"/></td>
						</tr>
						<tr>
							<td>Deskripsi</td>
							<td><textarea name="deskripsi" class="deskripsi" cols="90" rows="10" style="margin-left: 100px;"/></textarea></td>
						</tr>
					</table>		 	
					<input type="submit" value="Tambah Gambar" class="adminaddgallery" style="width: 120px; height: 22px; margin-left:220px; margin-top:10px;"/>
				</form>
			</h2>
		</div>
		<div class="footer">
		</div>
	</body>
</html>