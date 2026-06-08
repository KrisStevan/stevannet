<?php
function renderCenter() {
    global $connection, $login_session;

	if(isset($_SESSION['login_user'])){
		$sqlstr = "SELECT reputation from users WHERE username = '$login_session'";
		$hasil=mysqli_query($connection, $sqlstr);
		$row=mysqli_fetch_row($hasil);
		list($reputation) = $row;
	
		echo "<h2 style=\"text-align:center\">Hello $login_session!</h2>";
		echo "<p>Poin Reputasi anda adalah $reputation .<br>";
		if($reputation < 50){
				echo "<br> Poin Reputasi anda sudah rendah. Dimohon untuk jaga sikap anda<br>";
		}
		echo "<br><a href=\"pengantar.php\">Lihat Pengantar</a><br>";
		echo "<br><a href=\"profil.php\">Profil</a><br>";
		
		echo "</p><h3 style=\"margin-left:50px\">Pengumuman Terbaru</h3><p>";
		
		//untuk mengurus pengumuman terbaru
		$sqlnotif = "SELECT * FROM notifications WHERE userPenerima = '$login_session' LIMIT 5";
		$hasilnotif=mysqli_query($connection, $sqlnotif);
		$rownotif=mysqli_fetch_row($hasilnotif);

		if(!$rownotif) echo "Belum ada Pemberitahuan<br>";
		else{
			list($id, $pesan, $userPenerima, $tanggal) = $rownotif;
			echo "$tanggal - $pesan<br>";
		}
		
		echo "--------------------------------------------------------------------------------------------------------<br>";
	}
	
	else{
		$sqlstr = "SELECT * from articles order by id DESC limit 9";
		$hasil_1=mysqli_query($connection, $sqlstr);
		$row=mysqli_fetch_row($hasil_1);

		if(!$row)
			echo "Terjadi Kesalahan pada sistem anda";
		echo "<img src=\"Images/Highlights.jpg\" style=\"margin-left:5px; width:750px; height:85px;\">";				
		do{
			echo "<p>";
				list($id,$judul,$tanggal_muat,$tanggal_terjadi,$id_jenis,$id_topik,$isi,$gambar,$sumber) = $row;
				//if(!empty($gambar))
				//	echo "<img src='Images/$gambar' width=35px height=\"100%\" align=left>";
				echo "$tanggal_muat<br><a href='berita_detail.php?id=$id'>$judul</a><br>";
			echo "</p>";
		}while($row=mysqli_fetch_row($hasil_1));
	}
}

include('master.php');
