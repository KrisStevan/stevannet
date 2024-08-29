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
		<div class="centeradmin">
			<h2> Petunjuk Pengisian
				<br>
			</h2>
			<h3 style="margin-left:30px; margin-right:30px">
				<ol>
					<li>Isi berita harus sesuai dengan tema dan jenis artikel yang ditentukan</li>
					<li>Hindari penggunaan tanda kutip tunggal atau ganda, jika ingin menggunakan, pakailah tanda backslash (\) sebelum tanda kutipnya</li>
					<li>Jangan menyebarkan berita bohong</li>
					<li>Jika ingin mempercantik tulisan, dapat digunakan tanda tag HTML (<?php echo "<> diakhiri dengan <> (ada / di dalamnya)" ?>) dengan isi seperti:
						<ul>
							<li>b - untuk menebalkan tulisan</li>
							<li>br - untuk enter</li>
							<li>i - untuk memiringkan tulisan</li>
							<li>u - untuk menggarisbawahi tulisan</li>
						</ul>
					</li>
				</ol>
			</h3>
		</div>
		<div class="right">
			<?php
				require("rightDIVAdmin.php");
			?>
		</div>
		<div class="footer">
		</div>
	</body>
</html>