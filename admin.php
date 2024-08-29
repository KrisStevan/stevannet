<?php
	include('logs/login.php'); // Includes Login Script
	include('logs/session.php');
	if(isset($_SESSION['login_user'])){
		if($login_session == 'admin1')
			header("location: adminPages/adminHome.php");
		else
			header("location: home.php");
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
			<h3>Tunggu dulu.. Kami ingin memastikan bahwa yang menuju halaman ini adalah pengguna<br><br><br>
				<h4>
					<form class="login" action="" method="POST" align="center">
						Username 	<input id="name" type="text" name='username' class="userloginput" style="width: 300px; height: 25px;  margin-left: 5px;"/><br>
						Password  	<input id="password" type="password" name='password' class="userloginput" style="width: 300px; height: 25px;  margin-left: 10px;"/><br>		
						
						<button type="button"  onclick="window.location='daftar.php'" style="width: 75px; height: 25px; margin-left:245px; margin-top:10px;">Daftar</button>
						<input type="submit" name="submit" value="Log In" class="searchbutton" style="width: 75px; height: 25px; margin-left:1px; margin-top:10px;"/><br>
						<h5 style="font-color:red;"><?php echo $error; ?></h5>
					</form>
				</h4>
			</h3>
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