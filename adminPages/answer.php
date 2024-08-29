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
			if(isset($_POST['jawaban'])){
				$jawaban = $_POST['jawaban'];
				$menjawab = mysqli_query($connection, "UPDATE questions SET 
												jawaban = '$jawaban'
												WHERE id = $id");
				echo "<b>Terima kasih! Pertanyaan sudah terjawab!<br>silahkan tunggu.!";
				echo "<meta http-equiv=Refresh content=4;url=adminAskme.php>";
			}
			else{
				$result = mysqli_query($connection, "SELECT * FROM questions WHERE id='$id'");
				while($tampil = mysqli_fetch_array($result)){
					$id = $tampil["id"];
					$pertanyaan = $tampil["pertanyaan"];
					$tanggal_dimuat = $tampil["tanggal_dimuat"];
					$jawaban = $tampil["jawaban"];
		?>
		<div class="centeradmin">
			<h3> Mau Jawab Sesuatu?
				<br><br>
				<form class="adminask" method= "POST" action="#" align="left">
					<table border = "0" style="font-size: 15px;">
						<tr>
							<td width = "200px">ID</td>
							<td style="margin-left: 100px;"><?php echo "$id"; ?></td>
						</tr>
						<tr>
							<td width = "200px">Pertanyaan</td>
							<td style="margin-left: 100px;"><?php echo "$pertanyaan"; ?></td>
						</tr>
						<tr>
							<td width = "200px">Tanggal Muat</td>
							<td style="margin-left: 100px;"><?php echo "$tanggal_dimuat"; ?></td>
						<tr>
							<td width = "200px">Jawaban</td>
							<td><input type="text" name='jawaban' class="adminask" style="width: 500px; height: 20px;"/></td>
						</tr>
					</table>		 	
					<input type="submit" value="Jawab" class="adminask" style="width: 120px; height: 22px; margin-left:207px; margin-top:10px;"/>
				</form>
				<?php
				}//end of else
			}//end of while
			?>
			</h3>
		</div>
		<div class="footer">
		</div>
	</body>
</html>