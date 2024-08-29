<?php
	include("db.inc.php");
	connect_db($connection);
    $id=isset($_GET['linkID'])?$_GET['linkID']:'';
	if(isset($_GET['linkID'])){
		$hapus_berita = mysqli_query($connection, "DELETE FROM news_comments WHERE id=$id");
		echo "<b>Komentar sudah dihapus!<br>silahkan tunggu....";
		echo "<meta http-equiv=Refresh content=2;url=profil.php>";
	}
	else{
		echo "Maaf ada masalah...";
	}
?>	