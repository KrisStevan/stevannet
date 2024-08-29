<?php
	include("db.inc.php");
	
	$tanggal_dimuat = date("d M Y");
	connect_db($connection);
	
	//set ID
	$resultID = mysqli_query($connection, "SELECT MAX(id) + 1 AS maxID FROM opinions");
	$ids = mysqli_fetch_array($resultID);
	$id = $ids["maxID"];

	$judul = $_POST['judul'];
	$isi = $_POST['isi'];
	$nama = $_POST['nama'];
	
	$sqlstr = "INSERT INTO opinions VALUES('$id', '$judul','$tanggal_dimuat','$isi','$nama')";
	$hasil = mysqli_query($connection, $sqlstr);
	
	if($hasil)
	{
		echo "<script type='text/javascript'>alert('Opini berhasil disimpan')</script>";
		echo "<meta http-equiv=Refresh content=2;url=tulisOpini.php>";
	}
	else
	{
		echo "<script type='text/javascript'>alert('Opini gagal disimpan')</script>";
		die(mysqli_error($connection));
	}
?>