<?php
	function renderCenter() {
		if(!isset($_SESSION['login_user'])){
			header("location: home.php");
			exit;
		}

		global $connection;

		echo "<h2 id=\"newsJudul\">Profil Anda</h2>";

		echo "<p>";

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
			$sessionUsername = isset($_SESSION['login_user']) ? $_SESSION['login_user'] : ''; //session_username = pengganti login_session
			if ($sessionUsername === '') {
				echo "<b>Anda belum login.</b>";
				return;
			}

			$result=mysqli_query($connection,
						"SELECT u.nama, u.email, u.username, u.password, u.hobi, u.topikFav, 
							u.reputation, t.id, t.nama_topik 
						from users u JOIN topik t ON u.topikFav = t.id 
						WHERE u.username = '" . mysqli_real_escape_string($connection, $sessionUsername) . "'");
			if (!$result) {
				echo "Ada masalah saat mengambil data profil.<br>";
				die(mysqli_error($connection));
			}
		
			while($tampil = mysqli_fetch_array($result)){
				$nama = $tampil["nama"];
				$email = $tampil["email"];
				$username = $tampil["username"];
				$password = $tampil["password"];
				$hobi = $tampil["hobi"];
				$topikFav = $tampil["topikFav"];
				$nama_topik = $tampil["nama_topik"];

				echo "<form class=\"search\" method= \"POST\" action=\"#\" align=\"left\">";
					echo "<p>";
						echo "<table>";
							echo "<tr>
									<td>Username </td>
									<td> :</td>
									<td><input type=\"text\" name=\"username\" id=\"username\" value=\"$username\" style=\"width: 300px; height: 20px; margin-bottom:10px; margin-left: 20px;\" readonly/></td>
								</tr>
								<tr>
									<td>Nama </td>
									<td> :</td>
									<td><input type=\"text\" name=\"nama\" id=\"nama\" value=\"$nama\" style=\"width: 300px; height: 20px; margin-bottom:10px; margin-left: 20px;\" /></td>
								</tr>
								<tr>
									<td>Alamat Email </td>
									<td> :</td>
									<td><input type=\"text\" name=\"email\" id=\"email\" value=\"$email\" style=\"width: 300px; height: 20px; margin-bottom:10px; margin-left: 20px;\" /></td>
								</tr>
								<tr>
									<td>Password</td>
									<td> :</td>
									<td>
										<input type=\"password\" name=\"password\" id=\"password\" value=\"$password\" style=\"width: 300px; height: 20px; margin-bottom:10px; margin-left: 20px;\" />
									</td>
								</tr>
								<tr>
									<td>Hobi</td>
									<td> :</td>
									<td><input type=\"text\" name=\"hobi\" id=\"hobi\" value=\"$hobi\" style=\"width: 300px; height: 20px; margin-bottom:10px; margin-left: 20px;\" /></td>
								</tr>
								<tr>
								<td>Topik Paling Disukai</td>
								<td> :</td>
								<td>
									<select name=\"topikFav\" id=\"topikFav\" class=\"signup\" style=\"width: 300px; height: 35px; margin-left: 20px; padding: 5px;\">";
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
								echo "</select>
									</td>
								</tr>
							</table>
							<input type=\"submit\" value=\"Ubah Profil\" style=\"width: 160px; height: 40px; margin-top:10px; margin-left:200px;\"/>
							<button type=\"button\" onclick=\"location.href='profil.php'\" style=\"width: 160px; height: 40px; margin-top:10px; margin-left:10px;\">Kembali</button>";
						echo "</table>";
					echo "</p>";
				echo "</form>";
			}
		}
		echo "</p>";
	}
	
	include('master.php');
?>