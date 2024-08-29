<?php
	include('logs/login.php'); // Includes Login Script
	include('logs/session.php');
	if(!isset($_SESSION['login_user'])){
		header("location: ../admin.php");
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
				Sunting Opini
			</h1>
			<p>
				<?php
					include "db.inc.php";
					connect_db($connection);
					$id=isset($_GET['id'])?$_GET['id']:'';

					if(isset($_POST['id'])){
						$judul = $_POST['judul'];
						$isi = $_POST['isi'];
						$edit_opini = mysqli_query($connection, "UPDATE opinions SET 
											judul='$judul', 
											isi='$isi'
											WHERE id = '$id'");
											
						if(!$edit_opini){
							echo "Ada Masalah Pengeditan<br>";
							die(mysqli_error($connection));
						}
						else{
							echo "<b>Opini sudah di update!<br>silahkan tunggu.!";
							echo "<meta http-equiv=Refresh content=2;url=profil.php>";
						}
					}
					else{
						$result = mysqli_query($connection,"SELECT * FROM opinions WHERE nama = '$login_session'");
						while($tampil = mysqli_fetch_array($result)){
							$judul = $tampil["judul"];
							$isi = $tampil["isi"];
							?>
								<form class="search" method= "POST" action="#" align="left">
									<p>
										<table border = "0">
											<tr>
												<td>Judul</td>
												<td><input type="text" value= "<?php echo "$judul"; ?>" name='judul' style="width: 300px; height: 20px; margin-left: 50px;"/></td>
											</tr>
											<tr>
												<td>Isi</td>
												<td>
													<textarea name="isi" cols="70" rows="10" style="margin-left: 50px;"/><?php echo "$isi"; ?></textarea>
												</td>
											</tr>
											<tr>
												<td>
													<input type="hidden" name="id" value="<?php echo "$id"; ?>">
												</td>
										</table>
										<input type="submit" value="Ubah Opini" style="width: 150px; height: 25px; margin-left:300px; margin-top:10px;"/>
									</p>
								</form>
							<?php
						}//end of while
					}//end of else
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