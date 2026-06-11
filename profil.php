<?php
	function renderCenter() {
		if(!isset($_SESSION['login_user'])){
			header("location: home.php");
			exit;
		}

		global $connection;
		$username = isset($_SESSION['login_user']) ? $_SESSION['login_user'] : '';
		$nama = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');

		echo "<h1 id=\"newsJudul\">Profil Anda</h1>";

		echo "<p>";
		if(isset($_SESSION['login_user']))
		{
			$sqlstr = "SELECT u.nama, u.email, u.username, u.password, u.hobi, 
							u.topikFav, u.reputation, t.id, t.nama_topik 
						from users u 
							JOIN topik t ON u.topikFav = t.id 
						WHERE u.username = '" . mysqli_real_escape_string($connection, $username) . "'";
			$hasil=mysqli_query($connection, $sqlstr);
			$row=mysqli_fetch_row($hasil);
			list($nama,$email,$username,$password,$hobi,$topikFav,$reputation,
					$tid,$nama_topik) = $row;
			
			echo "<table>";
				echo "<tr>";
					echo "<td>Nama</td>";
					echo "<td> :</td>";
					echo "<td>$nama</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>Alamat Email </td>";
					echo "<td> :</td>";
					echo "<td>$email</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>Hobi </td>";
					echo "<td> :</td>";
					echo "<td>$hobi</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>Topik Favorit </td>";
					echo "<td> :</td>";
					echo "<td>$nama_topik</td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>Poin Reputasi </td>";
					echo "<td> :</td>";
					echo "<td>$reputation</td>";
				echo "</tr>";
				echo "<tr>";
						echo "<td colspan=\"3\"><a href=\"editProfil.php?linkID=$username\">Edit Profil</a></td>";
				echo "</tr>";
			echo "</table>";

			echo "<h2><center>Daftar Komentar</center></h2>";

			$sqlcomm = "SELECT nc.id, nc.idBerita, nc.nama, nc.tanggal, nc.isi, a.judul from news_comments nc JOIN articles a ON nc.idBerita = a.id WHERE nama = '" . mysqli_real_escape_string($connection, $username) . "'";
			$hasilcomm=mysqli_query($connection, $sqlcomm);
			@$rowcomm=mysqli_fetch_row($hasilcomm);
			
			if(!$rowcomm) echo "<p>Belum ada Komentar</p><br>";
			else{
				echo "<p><table>";
				do{
					list($id,$idBerita,$nama,$tanggal,$isi,$judul) = $rowcomm;
					
						echo "<tr>";
							echo "<td>Pada Tanggal </td>";
							echo "<td> :</td>";
							echo "<td>$tanggal</td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>Isi </td>";
							echo "<td> :</td>";
							echo "<td>$isi</td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>Pada Berita </td>";
							echo "<td> :</td>";
							echo "<td>$judul</td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td colspan='3'><a href=\"deleteCommentUser.php?linkID=$id\">Hapus</a></td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td colspan='3'>--------------------------------------------------------------------------------------------------</td>";
						echo "</tr>";
					
				}while($rowcomm=mysqli_fetch_row($hasilcomm));
				echo "</p></table>";
			}

			echo "<h2><center>Daftar Opini</center></h2>";

			$sqlo = "SELECT * FROM opinions WHERE nama = '" . mysqli_real_escape_string($connection, $username) . "'";
			$hasilo=mysqli_query($connection, $sqlo);
			@$rowo=mysqli_fetch_row($hasilo);
			if(!$rowo) echo "<p>Belum ada Opini yang Ditulis</p><br>";
			else{
				echo "<p><table id=\"admin\" border=\"1\">";
				echo "<tr>";
					echo "<td>Pada Tanggal</td>";
					echo "<td>Judul</td>";
					echo "<td>Tindakan</td>";
				echo "</tr>";
				do{
					list($id,$judul,$tanggal_dimuat,$isi,$nama) = $rowo;
						echo "<tr>";
							echo "<td>$tanggal_dimuat</td>";
							echo "<td>$judul</td>";
							echo "<td><a href=\"editOpiniUser.php?id=$id\">Ubah</a><br>
								<a href=\"deleteOpiniUser.php?linkID=$id\">Hapus</a></td>";
						echo "</tr>";
				}while($rowo=mysqli_fetch_row($hasilo));
				echo "</table>";
			}

			echo "</p>";
		}
	}

	include('master.php');
?>