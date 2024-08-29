<?php
	include("../db.inc.php");
	connect_db($connection);
    $opini_id=isset($_GET['opiniID'])?$_GET['opiniID']:'';
	if(isset($_GET['opiniID'])){
		$hapus_berita = mysqli_query($connection, "DELETE FROM opinions WHERE id=$opini_id");
		echo "<b>Opini sudah dihapus!<br>silahkan tunggu....";
		echo "<meta http-equiv=Refresh content=4;url=adminOpinions.php>";
	}
	else{
		echo "Maaf ada masalah...";
	}
?>	