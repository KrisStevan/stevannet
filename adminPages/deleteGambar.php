<?php
	include("../db.inc.php");
	connect_db($connection);
    $noGambar=isset($_GET['id'])?$_GET['id']:'';
	if(isset($_GET['id'])){
		$hapus_gambar = mysqli_query($connection, "DELETE FROM gambar WHERE noGambar=$noGambar");
		echo "<b>Gambar sudah dihapus!<br>silahkan tunggu....";
		echo "<meta http-equiv=Refresh content=4;url=adminGallery.php>";
	}
	else{
		echo "Maaf ada masalah...";
	}
?>