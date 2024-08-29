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
				$nama_topik = $_POST['nama_topik'];
				$edit_berita = mysqli_query($connection, "UPDATE topik SET 
												nama_topik='$nama_topik'
												WHERE id = $id");
				if(!$edit_berita){
					echo "Ada Masalah Pengeditan<br>";
					die(mysqli_error());
				}
				else{
					echo "<b>Terima kasih! Topik sudah di update!<br>silahkan tunggu.!";
					echo "<meta http-equiv=Refresh content=4;url=adminEditIDs.php>";
				}
			}
			else{
				$result = mysqli_query($connection, "SELECT * FROM topik WHERE id='$id' ");
				while($tampil = mysqli_fetch_array($result)){
					$id = $tampil["id"];
					$nama_topik = $tampil["nama_topik"];
		?>
		<div class="centeradmin">
			<h3> Adakah Revisi topiknya?
				<br><br>
				<form class="search" method= "POST" action="#" align="left">
					<table border = "0" style="font-size: 15px;">
						<tr>
							<td>ID</td>
							<td><input type="text" value= "<?php echo "$id"; ?>" name='id' style="width: 100px; height: 20px;  margin-left: 100px;"/></td>
						</tr>
						<tr>
							<td>Nama Topik</td>
							<td><input type="text" value= "<?php echo "$nama_topik"; ?>" name='nama_topik' style="width: 300px; height: 20px;  margin-left: 100px;"/></td>
						</tr>
					</table>		 	
					<input type="submit" value="Ubah Topik" style="width: 150px; height: 22px; margin-left:195px; margin-top:5px;"/>
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