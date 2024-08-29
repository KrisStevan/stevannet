<?php
	include("../db.inc.php");
	connect_db($connection);
    $news_id=isset($_GET['linkID'])?$_GET['linkID']:'';
	if(isset($_GET['linkID'])){
		$hapus_berita = mysqli_query($connection, "DELETE FROM galeri WHERE id='$news_id'");
		echo "<b>Galeri sudah dihapus!<br>silahkan tunggu....";
		echo "<meta http-equiv=Refresh content=4;url=adminGallery.php>";
	}
	else{
		echo "Maaf ada masalah...";
	}
?>	