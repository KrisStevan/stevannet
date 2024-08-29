<!DOCTYPE html>
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
			<h2 id="askmeJudul">
				<center>Selamat Datang di Ask Me Section!</center>
			</h2>
			<p>
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
			</p>

			<?php
			if(isset($_SESSION['login_user']))
			{
			?>
				<h3>
					Silahkan Tanyakan Sesuatu
				</h3>
				<form class="ask" method="post" action="ask.php">
					<input type="hidden" id="username" name="username" value = "<?php echo "$login_session";?>">
					<textarea id="ask" name="ask" cols="95" rows="2" style="margin-left: 20px;"/></textarea><br>
					<input type="submit" value="Post" class="searchbutton" style="width: 75px; height: 35px; margin-left:50px; margin-top:5px"/>
				</form>
			<?php
			}
			else
			{
				?>
				<h3>
					Silahkan login untuk mengajukan pertanyaan
				</h3>
			<?php
			}
			?>
			
			<h3><a href="questions.php" style="color:black;">Lihat Pertanyaan yang Telah Terjawab</a></h3>
			<p>
				<?php
					include "db.inc.php";
					connect_db($connection);

					$jml_list=10;
					$halaman=isset($_GET['page'])?(int) $_GET['page']:1;
								
					if(!empty($awal)) $awal = 0;

					$offset=($halaman-1)*10;
					$sqlstr = "SELECT * from questions WHERE jawaban IS NOT NULL order by id DESC limit $offset,10";
					$hasil_1=mysqli_query($connection, $sqlstr);
					$row=mysqli_fetch_row($hasil_1);

					if(!$row)
						echo "Belum ada jawaban";
					do{
						list($id,$pertanyaan,$tanggal_dimuat,$jawaban,$username) = $row;
						echo "<b>$pertanyaan</b> - $username<br>$jawaban<br>";
						$isian = substr($jawaban,0,150);
						echo "<br>";
					}while($row=mysqli_fetch_row($hasil_1));

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
				?>
			</p>
		</div>
		<div class="right">
			<?php
				require_once("rightDIV.php");
			?>
		</div>
		<div class="footer">
		</div>
	</body>
</html>