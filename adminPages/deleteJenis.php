<?php
	include("../db.inc.php");
	connect_db($connection);
    $id=isset($_GET['linkID'])?$_GET['linkID']:'';
	if(isset($_GET['linkID'])){
		$hapus_berita = mysqli_query($connection, "DELETE FROM jenis WHERE id=$id");
		echo "<b>Jenis sudah dihapus!<br>silahkan tunggu....";
		echo "<meta http-equiv=Refresh content=4;url=adminEditIDs.php>";
	}
	else{
		echo "Maaf ada masalah...";
	}
?>	