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
			$id=isset($_GET['linkID'])?$_GET['linkID']:'';
			if(isset($_POST['id'])){
				$tanggal = $_POST['tanggal'];
				$bulan = $_POST['bulan'];
				$tahun = $_POST['tahun'];
				$judul = $_POST['judul'];
				
				$edit_history = mysqli_query($connection, "UPDATE sejarah SET 
												id = '$id',
												tanggal = '$tanggal',
												bulan = '$bulan',
												tahun = '$tahun',
												judul = '$judul' 
												WHERE id = '$id'");
				
				if(!$edit_history){
					echo "Ada Masalah Pengeditan<br>";
					die(mysqli_error());
				}
				else{
					echo "<b>Terima kasih! Cerita sudah di update!<br>silahkan tunggu.!";
					echo "<meta http-equiv=Refresh content=4;url=adminHistory.php>";
				}
			}
			else{
				$result = mysqli_query($connection, "SELECT * FROM sejarah WHERE id = '$id'");
				while($tampil = mysqli_fetch_array($result)){
					$tanggal = $tampil["tanggal"];
					$bulan = $tampil["bulan"];
					$tahun = $tampil["tahun"];
					$judul = $tampil["judul"];
		?>
		<div class="centeradmin">
			<h3>Perubahan Sejarah
				<br><br>
				<form method="post" action="#" class="search" align="left">
					<table border = "0" style="font-size: 15px;">
						<tr>
							<td>ID</td>
							<td><input type="text" value= "<?php echo "$id"; ?>" name='id' style="width: 100px; height: 20px; margin-left: 100px;" readonly/></td>
						</tr>
						<tr>
							<td>Tanggal (Dalam Angka)</td>
							<td><input type="text" name='tanggal' value="<?php echo "$tanggal"; ?>" class="adminaddhistory" style="width: 30px; height: 20px;  margin-left: 100px;"/></td>
						</tr>
						<tr>
							<td>Bulan</td>
							<td><select name="bulan" class="adminaddhistory" style="width: 30px; height: 20px;  margin-left: 100px;">
									<option selected><?php echo "$tanggal"; ?></option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Tahun (Dalam Angka)</td>
							<td><input type="text" name='tahun' value="<?php echo "$tahun"; ?>" class="adminaddhistory" style="width: 50px; height: 20px;  margin-left: 100px;"/></td>
						</tr>
						<tr>
							<td>Judul</td>
							<td><input type="text" name='judul' value="<?php echo "$judul"; ?>" class="adminaddhistory" style="width: 500px; height: 20px;  margin-left: 100px;"/></td>
						</tr>
					</table>		 	
					<input type="submit" value="Ubah Sejarah" class="adminaddhistory" style="width: 150px; height: 22px; margin-left:283px;"/>
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