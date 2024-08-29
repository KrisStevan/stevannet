<?php
	include("db.inc.php");
	connect_db($connection);
    $opini_id=isset($_GET['linkID'])?$_GET['linkID']:'';
	if(isset($_GET['linkID'])){
		$hapus_berita = mysqli_query($connection, "DELETE FROM opinions WHERE id='$opini_id'");
		echo "<b>Opini sudah dihapus!<br>silahkan tunggu....";
		echo "<meta http-equiv=Refresh content=2;url=profil.php>";
	}
	else{
		echo "Maaf ada masalah...";
	}
?>