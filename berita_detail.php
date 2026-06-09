<?php
	function renderCenter() {
		global $connection, $login_session;

		$halaman = isset($_GET['page']) ? (int) $_GET['page'] : 1;
		$offset = ($halaman - 1) * 2000;
		$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

		$sqlstr = "SELECT * FROM articles WHERE id='$id'";
		$hasil = mysqli_query($connection, $sqlstr);
		$baris = mysqli_fetch_assoc($hasil);

		if(!$baris){
			die("Berita tidak tersedia");
			die(mysqli_error);
		}

		$judul = htmlspecialchars($baris['judul'], ENT_QUOTES, 'UTF-8');
		$tanggal_terjadi = htmlspecialchars($baris['tanggal_terjadi'], ENT_QUOTES, 'UTF-8');
		$isi = strip_tags($baris['isi']);
		$gambar = $baris['gambar'];
		$sumber = htmlspecialchars($baris['sumber'], ENT_QUOTES, 'UTF-8');
		$isian = nl2br(
					htmlspecialchars(
						substr($isi, $offset, 2000),
						ENT_QUOTES,
						'UTF-8'
					)
				);
		
		$pages = max(1, ceil(strlen($isi) / 2000));

		echo "<div class='centerdetail'>";
			echo "<article class='article-card'>";
				echo "<header class='article-card-header'>";
					if (!empty($gambar)) {
						$imageAlt = htmlspecialchars($judul, ENT_QUOTES, 'UTF-8');
						echo "<img src='Images/$gambar' alt='$imageAlt' class='article-image'>";
					}
					echo "<div class='article-card-title'>
							<h3>$judul</h3>
							<p class='article-date'>$tanggal_terjadi</p>
						</div>";
				echo "</header>";
				echo "<div class='article-body'>$isian</div>";
			echo "</article>";

				echo "<div class='article-footer'>";
					echo "<p class='article-source'>Sumber: <a href='" . ($sumber ?: '#') . "' target='_blank' rel='noreferrer'>$sumber</a></p>";
					echo "<nav class='article-pagination'><span>Halaman:</span>";
					for ($j = 1; $j <= $pages; $j++) {
						$activeClass = $j === $halaman ? ' page-link active' : ' page-link';
						echo "<a class='$activeClass' href='berita_detail.php?id=$id&page=$j'>$j</a>";
					}
					echo "</nav>";
				echo "</div>";

			$sqlcomm = "SELECT * FROM news_comments WHERE idBerita='$id' ORDER BY tanggal DESC";
			$hasilcomm = mysqli_query($connection, $sqlcomm);

			echo "<section class='comment-section'>";
				echo "<h3>Komentar</h3>";

				if (isset($_SESSION['login_user'])) {
					$username = htmlspecialchars($login_session, ENT_QUOTES, 'UTF-8');
					echo "<form class='komentar comment-form' method='post' action='tambahKomentar.php'>";
						echo "<div class='form-group'><label for='nama'>Nama</label><input type='text' id='nama' name='nama' value='$username' readonly></div>";
						echo "<div class='form-group'><label for='isi'>Isi</label><textarea id='isi' name='isi' placeholder='Tulis komentar Anda di sini...'></textarea></div>";
						echo "<div class='form-actions'><button type='submit' class='commentbutton'>Post</button></div>";
						echo "<input type='hidden' name='id' value='$id'>";
						echo "</form>";
				}

				if (mysqli_num_rows($hasilcomm) === 0) {
					echo "<p class='no-comments'>Tidak ada komentar</p>";
				} else {
					echo "<div class='comment-list'>";
					while ($comment = mysqli_fetch_assoc($hasilcomm)) {
						$commentName = htmlspecialchars($comment['nama'], ENT_QUOTES, 'UTF-8');
						$commentText = nl2br(htmlspecialchars($comment['isi'], ENT_QUOTES, 'UTF-8'));
						$commentDate = htmlspecialchars($comment['tanggal'], ENT_QUOTES, 'UTF-8');
						echo "<article class='comment-item'>";
							echo "<div class='comment-author'>Oleh: $commentName</div>";
							echo "<div class='comment-text'>$commentText</div>";
							echo "<div class='comment-meta'>Dipos tanggal $commentDate</div>";
						echo "</article>";
					}
					echo "</div>";
				}

				echo "</section>";
		 echo "</div>";
	}

	include('master.php');
?>