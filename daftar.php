<html>
	<head>
		<link rel="stylesheet" href="penampilan.css">
		<div id="header">
			
		</div>
		<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.4.4.min.js"></script>
		<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
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
			<h4><center>Silahkan daftar. Semua Umur bisa mendaftar.</center><br><br>
				<form id="login" class="login" action="signup.php" method="POST" align="left">
					<table style="font-size:15px">
						<tr>
							<td>Nama Lengkap</td>
							<td><input id="nama" type="text" name="nama" class="signup" style="width: 300px; height: 20px; margin-right:30px;"/></td>
						</tr>
						<tr>
							<td>Alamat Email</td>
							<td><input id="email" type="text" name="email" class="signup" style="width: 300px; height: 20px; margin-right:30px;"/></td>
						</tr>
						<tr>
							<td>Username</td>
							<td><input id="username" type="text" name="username" class="signup" style="width: 300px; height: 20px; margin-right:30px;"/></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input id="password" type="password" name="password" class="signup" style="width: 300px; height: 20px; margin-right:30px;"/></td>
						</tr>
						<tr>
							<td>Hobi</td>
							<td><input id="hobi" type="text" name="hobi" class="signup" style="width: 300px; height: 20px; margin-right:30px;"/></td>
						</tr>
						<tr>
							<td>Bidang favorit</td>
							<td>
								<select name="topikFav" id="topikFav" class="signup" style="width: 300px; height: 35px; padding: 5px;">
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
						<tr>
							<td></td>
							<td><input type="submit" name="submit" value="Sign Up" class="searchbutton" style="width: 180px; height: 40px; margin-top:5px;"/></td>
						</tr>
					</table>
				</form>
			</h4>
			<script type="text/javascript">
				$(document).ready(function(){
					$("#login").validate({
						rules:{
							nama:{
								required: true,
								minlength: 5,
								messages:{
									required: "wajib diisi",
									minlength: "Minimal 5 karakter"
								}
							},
								
							email:{
								required: true,
								messages:{
									required: "wajib diisi"
								}
							},
								
							username:{
								required: true,
								messages:{
									required: "wajib diisi"
								}
							},
								
							password:{
								required: true,
								messages:{
									required: "wajib diisi"
								}
							},
								
							hobi:{
								required: true,
								messages:{
									required: "wajib diisi"
								}
							}
						}
					});
				});
			</script>
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