<?php
	function renderCenter() {
		if(!isset($_SESSION['login_user'])){
			header("location: home.php");
			exit;
		}

		global $connection;
		$username = isset($_SESSION['login_user']) ? $_SESSION['login_user'] : '';
		$nama = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');

		echo "<h1 id=\"newsJudul\">Sunting Opini</h1>";

		echo "<p>";
			$id=isset($_GET['id'])?$_GET['id']:'';

			if(isset($_POST['id'])){
				//update opinion if posted from form
				$judul = $_POST['judul'];
				$isi = $_POST['isi'];
				$edit_opini = mysqli_query($connection, 
								"UPDATE opinions SET judul='$judul', isi='$isi'
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
				//example link = http://localhost/stevannet/editOpiniUser.php?id=10
				$result = mysqli_query($connection,"SELECT * FROM opinions WHERE nama = '" . mysqli_real_escape_string($connection, $username) . "'");
				while($tampil = mysqli_fetch_array($result)){
					$judul = $tampil["judul"];
					$isi = $tampil["isi"];

					echo "<form class=\"search\" method= \"POST\" action=\"#\" align=\"left\">";
					echo "<p>
							<table border = \"0\">
								<tr>
									<td>Judul</td>
									<td><input type=\"text\" value= \"$judul\" name='judul' style=\"width: 300px; height: 20px; margin-left: 50px;\"/></td>
								</tr>
								<tr>
									<td>Isi</td>
									<td>
										<textarea name=\"isi\" cols=\"70\" rows=\"10\" style=\"margin-left: 50px;\">$isi</textarea>
									</td>
								</tr>
								<tr>
									<td>
										<input type=\"hidden\" name=\"id\" value=\"$id\">
									</td>
							</table>
							<input type=\"submit\" value=\"Ubah Opini\" style=\"width: 160px; height: 40px; margin-left:140px; margin-top:10px;\"/>
						</p>
					</form>";
				}//end of while
			}//end of else

		echo "</p>";
	}

	include('master.php');
?>

					
