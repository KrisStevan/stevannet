<?php
	function renderCenter() {
		if(!isset($_SESSION['login_user'])){
			header("location: home.php");
			exit;
		}

		global $connection;
		$nama = isset($_SESSION['login_user']) ? htmlspecialchars($_SESSION['login_user'], ENT_QUOTES, 'UTF-8') : '';

		echo "<h1 id=\"askmeJudul\">Ada Opini? Tulis Disini...</h1>";

		echo "<p>";
		echo "Aturan:
				<ol>
					<li>Opini akan menunggu persetujuan dari admin. 
						Jika opini anda diterima, akan dipost dalam waktu paling lama 2 minggu dari tanggal penyampaian</li>
					<li>Admin berhak membuat sensor dan analisa atas opini apapun yang dikirimkan</li>
					<li>Opini yang bisa diterima adalah jika:
						<ol>
							<li>Tidak melanggar larangan-larangan diatas</li>
							<li>Opini berupa artikel minimal 200 kata</li>
							<li>Memiliki isi yang logis dan mudah dipahami</li>
						</ol>
					</li>
				</ol>
				<hr>";
		
		echo <<<HTML
		<form class='opini' method='post' action='tambahOpini.php'>
			<table border='0' style='margin-left:30px; width: 60%'>
				<tr>
					<td>Nama</td>
					<td><input type='text' value='$nama' id='nama' name='nama' class='addopini' style='width: 300px; height: 25px; margin-left: 50px; border:0px;' readonly /></td>
				</tr>
				<tr>
					<td>Judul</td>
					<td><input type='text' id='judul' name='judul' class='addopini' style='width: 300px; height: 25px; margin-left: 50px;' /></td>
				</tr>
				<tr>
					<td colspan='2'>
						Isi<br><br>
						<textarea id='isi' name='isi' cols='95' rows='6' style='margin-left: 20px;'></textarea>
					</td>
				</tr>
			</table>
			<input type='submit' value='Post' class='searchbutton' style='width: 75px; height: 35px; margin-left:20px; margin-top:5px' />
		</form>
HTML;

		echo "</p>";
	}
	
include('master.php');