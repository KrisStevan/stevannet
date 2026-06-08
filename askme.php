<!DOCTYPE html>
<?php
	function renderCenter() {
		global $connection, $login_session;
		echo "<h2 id=\"askmeJudul\">
				<center>Selamat Datang di Ask Me Section!</center>
			</h2>";

		echo "<p>
				Ini adalah tempat dimana anda dapat bertanya kepada saya tentang apa yang ingin anda ketahui tentang
				situs ini dan pembuatnya. Namun sebelum bertanya, ada beberapa aturan yang harus dipatuhi berikut ini:
				<ol>
					<li>Pertanyaan sebaiknya berhubungan dengan isi dari web ini</li>
					<li>Dilarang menggunakan kata hinaan kasar dalam pertanyaan</li>
					<li>Dilarang menanyakan hal-hal yang menyangkut urusan pribadi pembuat web ini</li>
					<li>Jawaban yang diberikan pada halaman ini diusahakan untuk tidak menyinggung pihak lain, jadi usahakan jangan bawa nama pihak yang dimaksud</li>
					<li>Penjawab di halaman ini berhak melakukan penilaian kelayakan pertanyaan yang diajukan</li>
					<li>Pertanyaan yang melanggar ketentuan-ketentuan diatas tidak akan dijawab</li>
					<li>Terakhir = bersabarlah, tidak semua pertanyaan dapat dijawab langsung begitu saja</li>
				</ol>
			</p>";

		if(isset($_SESSION['login_user']))
		{
			echo "<h3>Silahkan Tanyakan Sesuatu</h3>";
			echo "<form class=\"ask\" method=\"post\" action=\"ask.php\">";
			echo "<input type=\"hidden\" id=\"username\" name=\"username\" value=\"" . htmlspecialchars($login_session, ENT_QUOTES, 'UTF-8') . "\">";
			echo "<textarea id=\"ask\" name=\"ask\" cols=\"95\" rows=\"2\" style=\"margin-left: 20px;\"></textarea><br>";
			echo "<input type=\"submit\" value=\"Post\" class=\"searchbutton\" style=\"width: 75px; height: 35px; margin-left:50px; margin-top:5px;\">";
			echo "</form>";
		}
		else{
			echo "<h3>Silahkan login untuk mengajukan pertanyaan</h3>";
		}

		echo "<h3><a href=\"questions.php\" style=\"color:black;\">Lihat Pertanyaan yang Telah Terjawab</a></h3>";
		echo "<div class=\"qa-list\" style=\"margin-left: 40px;\">";

		$jml_list=10;
		$halaman=isset($_GET['page'])?(int) $_GET['page']:1;
					
		if(!empty($awal)) $awal = 0;

		$offset=($halaman-1)*10;
		$sqlstr = "SELECT * from questions WHERE jawaban IS NOT NULL order by id DESC limit $offset,10";
		$hasil_1=mysqli_query($connection, $sqlstr);

		if(!$hasil_1 || mysqli_num_rows($hasil_1) === 0) {
			echo "Belum ada jawaban";
		} else {
			while($row = mysqli_fetch_assoc($hasil_1)) {
				$pertanyaan = htmlspecialchars($row['pertanyaan']);
				$jawaban = htmlspecialchars($row['jawaban']);
				$username = htmlspecialchars($row['username']);
				echo "<div class='qa-item' style='margin-bottom:24px;'>";
				echo "<div class='qa-question' style='margin-bottom:6px;'><strong>$pertanyaan</strong> - $username</div>";
				echo "<div class='qa-answer' style='margin-left:20px;'>$jawaban</div>";
				echo "</div>";
			}
		}

		//paginasi halaman
		$sqlstr = "SELECT * from questions WHERE jawaban IS NOT NULL";
		$hasil_2 = mysqli_query($connection, $sqlstr);
		$jumlah = mysqli_num_rows($hasil_2);

		$i=$jumlah/10;
		$i=ceil($i);

		echo "<center>Halaman ";
		for($j=1;$j<=$i;$j++)
		{
			$awal = (($j-1)*4+$j)-1;
			echo "[<a href='askme.php?awal=$awal&page=$j'>$j</a>]";
		}
		echo "</center>";

		echo "</div>"; //qa-list
	}

	include('master.php');
?>