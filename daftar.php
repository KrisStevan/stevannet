<?php
	function renderCenter(){
		global $connection, $login_session;

		echo "<h4><center>Silahkan daftar. Semua Umur bisa mendaftar.</center>";
			echo "<form id=\"login\" class=\"login\" action=\"signup.php\" method=\"POST\" align=\"left\">";
				echo "<table style=\"font-size:15px\">";
				echo "<tr>
						<td>Nama Lengkap</td>
						<td><input id=\"nama\" type=\"text\" name=\"nama\" class=\"signup\" style=\"width: 300px; height: 20px; margin-right:30px;\"/></td>
					</tr>
					<tr>
						<td>Alamat Email</td>
						<td><input id=\"email\" type=\"text\" name=\"email\" class=\"signup\" style=\"width: 300px; height: 20px; margin-right:30px;\"/></td>
					</tr>
					<tr>
						<td>Username</td>
						<td><input id=\"username\" type=\"text\" name=\"username\" class=\"signup\" style=\"width: 300px; height: 20px; margin-right:30px;\"/></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input id=\"password\" type=\"password\" name=\"password\" class=\"signup\" style=\"width: 300px; height: 20px; margin-right:30px;\"/></td>
					</tr>
					<tr>
						<td>Hobi</td>
						<td><input id=\"hobi\" type=\"text\" name=\"hobi\" class=\"signup\" style=\"width: 300px; height: 20px; margin-right:30px;\"/></td>
					</tr>";
				echo "<tr>";
				echo "<td>Bidang favorit</td>
						<td>
							<select name=\"topikFav\" id=\"topikFav\" class=\"signup\" style=\"width: 300px; height: 35px; padding: 5px;\">";
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
				echo "		</select>
						</td>";
				echo "</tr>";
				echo "<tr>
						<td></td>
						<td><input type=\"submit\" name=\"submit\" value=\"Sign Up\" class=\"searchbutton\" style=\"width: 180px; height: 40px; margin-top:5px;\"/></td>
					</tr>";
				echo "</table>";
			echo "</form>"; //form login
		echo "</h4>"; //h4
	}

include('master.php');