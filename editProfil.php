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
				Profil Anda
			</h2>
			<p>
				<?php
					$username=isset($_GET['linkID'])?$_GET['linkID']:'';

					if(isset($_POST['username'])){
						$nama = $_POST['nama'];
						$email = $_POST['email'];
						$username = $_POST["username"];
						$password = $_POST['password'];
						$hobi = $_POST['hobi'];
						$topikFav = (int) $_POST['topikFav'];
						$edit_user = mysqli_query($connection, "UPDATE users SET 
													nama = '$nama', 
													email = '$email',
													password = '$password',
													hobi = '$hobi',
													topikFav = $topikFav 
													WHERE username = '$username'");
						if(!$edit_user){
							echo "Ada Masalah Pengeditan<br>";
							die(mysqli_error($connection));
						}
						else{
							echo "<b>Profil anda sudah di update!";
							echo "<meta http-equiv=Refresh content=2;url=profil.php>";
						}
					}
					else{
						$result=mysqli_query($connection, "SELECT u.nama, u.email, u.username, u.password, u.hobi, u.topikFav, u.reputation, t.id, t.nama_topik from users u JOIN topik t ON u.topikFav = t.id WHERE u.username = '$login_session'");
						while($tampil = mysqli_fetch_array($result)){
							$nama = $tampil["nama"];
							$email = $tampil["email"];
							$username = $tampil["username"];
							$password = $tampil["password"];
							$hobi = $tampil["hobi"];
							$topikFav = $tampil["topikFav"];
							$nama_topik = $tampil["nama_topik"];
							?>
							<form class="search" method= "POST" action="#" align="left">
								<p>
									<table>
										<tr>
											<td>Username </td>
											<td> :</td>
											<td><input type="text" name="username" id="username" value="<?php echo "$username"; ?>" style="width: 300px; height: 20px; margin-bottom:10px; margin-left: 20px;" readonly/></td>
										</tr>
										<tr>
											<td>Nama </td>
											<td> :</td>
											<td><input type="text" name="nama" id="nama" value="<?php echo "$nama"; ?>" style="width: 300px; height: 20px; margin-bottom:10px; margin-left: 20px;" /></td>
										</tr>
										<tr>
											<td>Alamat Email </td>
											<td> :</td>
											<td><input type="text" name="email" id="email" value="<?php echo "$email";?>" style="width: 300px; height: 20px; margin-bottom:10px; margin-left: 20px;" /></td>
										</tr>
										<tr>
											<td>Password</td>
											<td> :</td>
											<td>
												<input type="password" name="password" id="password" value="<?php echo "$password";?>" style="width: 300px; height: 20px; margin-bottom:10px; margin-left: 20px;" />
											</td>
										</tr>
										<tr>
											<td>Hobi</td>
											<td> :</td>
											<td><input type="text" name="hobi" id="hobi" value="<?php echo "$hobi";?>" style="width: 300px; height: 20px; margin-bottom:10px; margin-left: 20px;" /></td>
										</tr>
										<tr>
											<td>Topik Paling Disukai</td>
											<td> :</td>
											<td>
												<select name="topikFav" id="topikFav" class="signup" style="width: 300px; height: 35px; margin-left: 20px; padding: 5px;">
													<?php
														$sqlstr = "SELECT id, nama_topik FROM topik";
														$hasil = mysqli_query($connection, $sqlstr);
														
														if($hasil && mysqli_num_rows($hasil) > 0) {
															while($row = mysqli_fetch_assoc($hasil)) {
																$option_id = $row['id'];
																$option_name = htmlspecialchars($row['nama_topik']);
																$selected = ($option_id == $topikFav) ? 'selected' : '';
																echo "<option value=\"" . $option_id . "\" " . $selected . ">" . $option_name . "</option>";
															}
														} else {
															echo "<option value=\"\">-- Tidak ada topik --</option>";
														}
													?>
												</select>
											</td>
										</tr>
									</table>
									<input type="submit" value="Ubah Profil" style="width: 160px; height: 40px; margin-top:10px; margin-left:200px;"/>
									<button type="button" onclick="location.href='profil.php'" style="width: 160px; height: 40px; margin-top:10px; margin-left:10px;">Kembali</button>
								</p>
							</form>	
							<?php
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