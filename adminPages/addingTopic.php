<?php
	include("db.inc.php");
	connect_db($connection);
	
	$id = $_POST['id'];
	$nama_topik = $_POST['nama_topik'];
	
	$sqlstr = "INSERT INTO topik VALUES('$id','$nama_topik')";
	$hasil = mysqli_query($connection, $sqlstr);
	if($hasil)
	{
		echo "Topik berhasil disimpan<br>";
		print("<table width=50% border=0 cellpadding=0 cellspacing=0><tr><td>");
		print("<b>$id<br></b>");
		print("$nama_topik</i><br><br>");
		print("</td></tr></table><br>");
		header("location: adminEditIDs.php");
	}
	else
	{
		echo "Topik gagal disimpan <br>";
	}
	die(mysqli_error());
?>