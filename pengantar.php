<?php
	include('logs/login.php'); // Includes Login Script
	include('logs/session.php');
	if(isset($_SESSION['login_user'])){
		if($login_session == 'admin1')
			header("location: adminPages/adminHome.php");
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
			<h1 id="pengantarJudul">
				Terima Kasih atas partisipasi anda sebagai pengguna website kami
			</h1>
			<p>
				Dengan masuknya anda sebagai user, anda mendapatkan hak-hak khusus untuk mengomentari isi berita dan mengirimkan opini yang akan ditampilkan dalam wesbite kami. Anda juga dapat memberikan masukan permintaan tambahan menyangkut apa yang dibahas website ini dengan menuliskan permintaan tersebut dalam sebuah halaman komentar.<br><br>
				Sebagai pendaftar baru, anda akan menerima 100 poin reputasi. Poin ini akan berkurang 10 poin bila anda melanggar aturan yang berlaku. Jika poin anda mencapai 0, maka anda akan secara otomatis kehilangan hak pengguna anda. Penghitungan dan pengaturan poin ini berada pada tanggung jawab admin.
				Adapun aturan-aturan tersebut adalah:
				<ol>
					<li>Jangan melakukan spam dalam pembuatan komentar, opini atau pertanyaan</li>
					<li>Sebisa mungkin hindari penggunaan kata kasar dalam mengirimkan komentar, opini atau pertanyaan</li>
					<li>Dilarang menghina orang lain</li>
					<li>Patuhilah aturan-aturan tambahan yang tercantum pada menu lain dari halaman ini</li>
				</ol>
			</p>
			<p>
				Klik pada menu diatas atau disamping kiri untuk melanjutkan.
			</p>
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