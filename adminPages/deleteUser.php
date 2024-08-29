<?php
	include("../db.inc.php");
	connect_db($connection);
    $username=isset($_GET['userID'])?$_GET['userID']:'';
	if(isset($_GET['userID'])){
		$hapus_berita = mysqli_query($connection, "DELETE FROM users WHERE username='$username'");
		echo "<b>Pengguna sudah dihapus!<br>silahkan tunggu....";
		echo "<meta http-equiv=Refresh content=4;url=adminEditIDs.php>";
	}
	else{
		echo "Maaf ada masalah...";
	}
?>	