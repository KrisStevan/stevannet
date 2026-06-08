<?php
function renderCenter() {
    global $connection;
	
    $topik_id = isset($_GET['topic']) ? (int) $_GET['topic'] : 0;
    $sqlstrtop = "SELECT * FROM topik WHERE id = $topik_id";
    $hasiltop = mysqli_query($connection, $sqlstrtop);

    if(!$hasiltop) {
        echo "Terjadi Kesalahan pada sistem anda";
        return;
    }

    $rowtop = mysqli_fetch_assoc($hasiltop);
    if(!$rowtop) {
        echo "Terjadi Kesalahan pada sistem anda";
        return;
    }

    $slogan = $rowtop['slogan'];
    echo "<h2 style=\"display: inline; margin-left:40px; margin-top:-10px;\">";
    echo htmlspecialchars($slogan, ENT_QUOTES, 'UTF-8');
    echo "</h2><br><br>";

    $jml_list = 8;
    $halaman = isset($_GET['page']) ? (int) $_GET['page'] : 1;
    if(!empty($awal)) {
        $awal = 0;
    }

    $offset = ($halaman - 1) * 8;
    $sqlstr = "SELECT * from articles WHERE id_topik= $topik_id order by id DESC limit $offset,8";
    $hasil = mysqli_query($connection, $sqlstr);
    $row = mysqli_fetch_row($hasil);

    if(!$row) {
        echo "Terjadi Kesalahan pada sistem anda";
        return;
    }

    do {
        list($id,$judul,$tanggal_muat,$tanggal_terjadi,$id_jenis,$id_topik,$isi,$gambar,$sumber) = $row;
        echo "<p><a href='berita_detail.php?id=$id'>" . htmlspecialchars($tanggal_muat, ENT_QUOTES, 'UTF-8') . " - " . htmlspecialchars($judul, ENT_QUOTES, 'UTF-8') . "</a><br></p>";
    } while($row = mysqli_fetch_row($hasil));
}

include('master.php');
