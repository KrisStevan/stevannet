<?php
	function renderCenter() {
		$src = $_GET["src"];
		global $connection;

		$jml_list=8;
		$halaman=isset($_GET['page'])?(int) $_GET['page']:1;
					
		if(!empty($awal)) $awal = 0;
			
		$offset=($halaman-1)*8;

		if(empty($src)) {
			echo "<div class='search-empty'><h1>Jangan Kosong Pencariannya</h1></div>";
		} else {
			echo "<h1 id=\"askmeJudul\">Hasil Pencarian kata \"" . htmlspecialchars($src, ENT_QUOTES, 'UTF-8') . "\"</h1>";

			echo "<div class='search-section'>";
			echo "<div class='search-section-header'>Berita</div>";

			$sqlArtikel = "SELECT * FROM articles WHERE (isi LIKE '%$src%') OR (judul LIKE '%$src%') limit $offset,8";
			$hasilArtikel=mysqli_query($connection, $sqlArtikel);
			$rowArtikel=mysqli_fetch_row($hasilArtikel);

			if(!$rowArtikel) {
				echo "<div class='search-empty'>Berita Tidak Ditemukan</div>";
			} else {
				do{
					list($id,$judul,$tanggal_muat,$tanggal_terjadi,$id_jenis,$id_topik,$isi,$gambar,$sumber) = $rowArtikel;
					$posIsian = strpos($isi,$src);
					$isian = $posIsian !== false ? substr($isi,$posIsian,100) : substr($isi,0,100);
					echo "<article class='search-card'>";
					echo "<div class='search-card-date'>" . htmlspecialchars($tanggal_muat, ENT_QUOTES, 'UTF-8') . "</div>";
					echo "<h2><a href='berita_detail.php?id=$id'>" . htmlspecialchars($judul, ENT_QUOTES, 'UTF-8') . "</a></h2>";
					echo "<p class='search-snippet'>..." . htmlspecialchars($isian, ENT_QUOTES, 'UTF-8') . " ...</p>";
					echo "</article>";
				} while($rowArtikel=mysqli_fetch_row($hasilArtikel));
			}

			echo "</div>";

			$sqlPertanyaan = "SELECT * FROM questions WHERE (pertanyaan LIKE '%$src%') OR (jawaban LIKE '%$src%') limit $offset,5";
			$hasilPertanyaan = mysqli_query($connection, $sqlPertanyaan);
			$rowPertanyaan = mysqli_fetch_row($hasilPertanyaan);
			
			echo "<div class='search-section'>";
			echo "<div class='search-section-header'>Pertanyaan</div>";
			if(!$rowPertanyaan) {
				echo "<div class='search-empty'>Pertanyaan Tidak Ditemukan</div>";
			} else {
				do{
					list($id,$pertanyaan,$tanggal_muat,$jawaban) = $rowPertanyaan;
					echo "<article class='search-card question-card'>";
					echo "<div class='search-card-date'>" . htmlspecialchars($tanggal_muat, ENT_QUOTES, 'UTF-8') . "</div>";
					echo "<h2>" . htmlspecialchars($pertanyaan, ENT_QUOTES, 'UTF-8') . "</h2>";
					echo "<p class='search-snippet'>" . htmlspecialchars($jawaban, ENT_QUOTES, 'UTF-8') . "</p>";
					echo "</article>";
				} while($rowPertanyaan=mysqli_fetch_row($hasilPertanyaan));
			}
			echo "</div>";

			//paginasi halaman
			$sqlstr = "SELECT * FROM articles WHERE (isi LIKE '%$src%') OR (judul LIKE '%$src%')";
			$hasil_2 = mysqli_query($connection, $sqlstr);
			$jumlah = mysqli_num_rows($hasil_2);
			
			$i=$jumlah/8;
			$i=ceil($i);

			echo "<div class='search-pagination'>";
			echo "<span>Halaman </span>";
			for($j=1;$j<=$i;$j++) {
				$awal = (($j-1)*4+$j)-1;
				echo "<a class='pagination-link' href='searches.php?src=" . urlencode($src) . "&awal=$awal&page=$j'>$j</a>";
			}
			echo "</div>";
		}
	}
	
include('master.php');