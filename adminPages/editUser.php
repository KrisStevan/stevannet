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
			$username=isset($_GET['userID'])?$_GET['userID']:'';
			if(isset($_POST['username'])){
				$reputation = $_POST['reputation'];
				$edit_user = mysqli_query($connection, "UPDATE users SET 
												reputation='$reputation'
												WHERE username = '$username'");
				if(!$edit_user){
					echo "Ada Masalah Pengeditan<br>";
					die(mysqli_error());
				}
				else{
					echo "<b>Terima kasih! User sudah di update!<br>silahkan tunggu.!";
					echo "<meta http-equiv=Refresh content=4;url=adminUsers.php>";
				}
			}
			else{
				$result = mysqli_query($connection, "SELECT * FROM users WHERE username='$username' ");
				while($tampil = mysqli_fetch_array($result)){
					$username = $tampil["username"];
					$reputation = $tampil["reputation"];
		?>
		<div class="centeradmin">
			<h3> Ada Masalah dengan Usernya?
				<br><br>
				<form class="search" method= "POST" action="#" align="left">
					<table border = "0" style="font-size: 15px;">
						<tr>
							<td>Pengguna</td>
							<td><input type="text" value= "<?php echo "$username"; ?>" name='username' style="width: 100px; height: 20px;  margin-left: 100px;" readonly/></td>
						</tr>
						<tr>
							<td>Poin Reputasi</td>
							<td><input type="text" value= "<?php echo "$reputation"; ?>" name='reputation' style="width: 100px; height: 20px;  margin-left: 100px;"/></td>
						</tr>
					</table>		 	
					<input type="submit" value="Ubah User" style="width: 150px; height: 22px; margin-left:207px; margin-top:5px;"/>
				</form>
				<?php
					}//end of while
				}//end of while
				?>
			</h3>
		</div>
		<div class="footer">
		</div>
	</body>
</html>