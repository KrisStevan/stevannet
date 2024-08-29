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
							<td>Bidang yang paling suka diamati </td>
							<td><select name="id_topik1" id ="id_topik1" class="signup" style="width: 300px; height: 20px; margin-right: 105px;">
									<option value="1">Eurovision</option>
									<option value="2">Racing (Formula and Endurance)</option>
									<option value="3">Olympics</option>
									<option value="4">Trending</option>
									<option value="5">Budaya Langka</option>
									<option value="6">Cover Bahasa Asing</option>
									<option value="7">Aksi Tak Biasa</option>
									<option value="8">Indonesians Abroad</option>
									<option value="9">Legenda</option>
									<option value="10">Koleksiku</option>
									<option value="11">Kisah Sejarah Terbaik</option>
								</select></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="submit" value="Sign Up" class="searchbutton" style="width: 75px; height: 25px; margin-top:5px;"/></td>
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
				include "db.inc.php";
				connect_db($connection);
				require("rightDIV.php");
			?>
		</div>
		<div class="footer">
		</div>
	</body>
</html>