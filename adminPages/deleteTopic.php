<?php
	include("../db.inc.php");
	connect_db($connection);
    $id=isset($_GET['linkID'])?$_GET['linkID']:'';
	if(isset($_GET['linkID'])){
		$hapus_berita = mysqli_query($connection,"DELETE FROM topik WHERE id=$id");
		echo "<b>Topik sudah dihapus!<br>silahkan tunggu....";
		echo "<meta http-equiv=Refresh content=4;url=adminEditIDs.php>";
	}
	else{
		echo "Maaf ada masalah...";
	}
?>	