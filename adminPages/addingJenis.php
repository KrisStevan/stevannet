<?php
	include("db.inc.php");
	connect_db($connection);
	
	$id = $_POST['id'];
	$nama_jenis = $_POST['nama_jenis'];
	
	$sqlstr = "INSERT INTO jenis VALUES('$id','$nama_jenis')";
	$hasil = mysqli_query($connection, $sqlstr);
	if($hasil)
	{
		echo "Topik berhasil disimpan<br>";
		print("<table width=50% border=0 cellpadding=0 cellspacing=0><tr><td>");
		print("<b>$id<br></b>");
		print("$nama_jenis</i><br><br>");
		print("</td></tr></table><br>");
		header("location: adminEditIDs.php");
	}
	else
	{
		echo "Topik gagal disimpan <br>";
	}
	die(mysqli_error());
?>