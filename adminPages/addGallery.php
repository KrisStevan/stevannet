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
		<div class="centeradmin">
			<h3> Tambah Galeri Baru
				<br><br>
				<form method="post" action="addingGallery.php?save=ok" class="adminaddgallery" align="left" enctype="multipart/form-data">
					<table border = "0" style="font-size: 15px;">
						<!--<tr>
							<td>ID</td>
							<td><input type="text" name='id' class="adminaddgallery" style="width: 100px; height: 20px;  margin-left: 100px;"/></td>
						</tr>-->
						<tr>
							<td>Nama Galeri</td>
							<td><input type="text" name='namaGaleri' class="adminaddgallery" style="width: 300px; height: 20px;  margin-left: 100px;"/></td>
						</tr>
						<tr>
							<td>ID Topik</td>
							<td>
								<select name="id_topik" id ="id_topik" class="adminaddnews" style="width: 200px; height: 20px; margin-left: 100px;">
									<?php
										include_once("../db.inc.php");
										connect_db($connection);
										$sqlstr = "SELECT * FROM topik";
										$hasil = mysqli_query($connection, $sqlstr);
										$row = mysqli_fetch_row($hasil);
										
										if($row)
										{
											do{
												list($id,$nama_topik) = $row;
												?>
												<option value="<?php echo "$id"; ?>"><?php echo "$id - $nama_topik"; ?></option>
												<?php
											}while($row = mysqli_fetch_row($hasil));
										}
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Sampul</td>
							<td><input type="file" name='gambarSampul' class="adminaddgallery" style="width: 300px; height: 20px; margin-left:100px; margin-top:10px;"/></td>
						</tr>
						<tr>
							<td>Deskripsi</td>
							<td><textarea name="deskripsi" class="deskripsi" cols="90" rows="10" style="margin-left: 100px;"/></textarea></td>
						</tr>
					</table>		 	
					<input type="submit" value="Tambah Galeri" class="adminaddgallery" style="width: 150px; height: 22px; margin-left:200px; margin-top:10px;"/>
				</form>
			</h3>
		</div>
		<div class="footer">
		</div>
	</body>
</html>