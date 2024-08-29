<?php
	include('logs/login.php'); // Includes Login Script
	include('logs/session.php');
	if(isset($_SESSION['login_user'])){
		if($login_session == 'admin1')
			header("location: adminPages/adminHome.php");
	}
	else if(!isset($_SESSION['login_user'])){
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
			<h1 id="askmeJudul">
				Ada Opini? Tulis Disini...
			</h1>
			<p>
				Aturan:
				<ol>
					<li>Opini akan menunggu persetujuan dari admin. Jika opini anda diterima, akan dipost dalam waktu paling lama 2 minggu dari tanggal penyampaian</li>
					<li>Admin berhak membuat sensor dan analisa atas opini apapun yang dikirimkan</li>
					<li>Opini yang bisa diterima adalah jika:
						<ol>
							<li>Tidak melanggar larangan-larangan diatas</li>
							<li>Opini berupa artikel minimal 200 kata</li>
							<li>Memiliki isi yang logis dan mudah dipahami</li>
						</ol>
					</li>
				</ol>
				<p>-------------------------------------------------------------------------------------------------------</p>

				<form class="opini" method="post" action="tambahOpini.php">
					<table border = "0" style = "margin-left:50px">
						<tr>
							<td>Nama</td>
							<td><input type="text" value = "<?php echo "$login_session";?>" id='nama' name='nama' class="addopini" style="width: 300px; height: 25px;  margin-left: 50px; border:0px;" readonly/></td>
						</tr>
						<tr>
							<td>Judul</td>
							<td><input type="text" id='judul' name='judul' class="addopini" style="width: 300px; height: 25px;  margin-left: 50px;"/></td>
						</tr>
					</table>
					<p>Isi</p>
					<textarea id='isi' name="isi" cols="95" rows="6" style="margin-left: 20px;"/></textarea><br>
					<input type="submit" value="Post" class="searchbutton" style="width: 75px; height: 35px; margin-left:20px; margin-top:5px"/>
				</form>
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