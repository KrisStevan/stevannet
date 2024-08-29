<?php
	include("db.inc.php");
	connect_db($connection);
	
	//$id = $_POST['id'];
	$tanggal = $_POST['tanggal'];
	$bulan = $_POST['bulan'];
	$tahun = $_POST['tahun'];
	$judul = $_POST['judul'];
	
	$resultID = mysqli_query($connection, "SELECT MAX(id) AS 'idCerita' FROM sejarah");
	$idOld = mysqli_fetch_array($resultID);
	$id = $idOld["idCerita"] + 1;
	
	$sqlstr = "INSERT INTO sejarah VALUES('$id','$tanggal','$bulan','$tahun','$judul')";
	$hasil = mysqli_query($connection, $sqlstr);
	if($hasil)
	{
		echo "Sejarah berhasil disimpan<br>";
		print("<table width=50% border=0 cellpadding=0 cellspacing=0><tr><td>");
		print("<b>$id<br></b>");
		print("$tanggal</i>");
		print("$bulan</i>");
		print("$tahun</i><br>");
		print("$judul</i><br>");
		print("</td></tr></table><br>");
		header("location: adminHistory.php");
	}
	else
	{
		echo "Sejarah gagal disimpan <br>$sqlstr";
	}
?>