<?php
	include("db.inc.php");
	$tanggal_dimuat = date("d M Y");
	connect_db($connection);

	//set ID
	$resultID = mysqli_query($connection, "SELECT MAX(id) + 1 AS maxID FROM questions");
	$ids = mysqli_fetch_array($resultID);
	$id = $ids["maxID"];
	
	$pertanyaan = $_POST['ask'];
	$username = $_POST['username'];
	
	$sqlstr = "INSERT INTO questions(id,pertanyaan,tanggal_dimuat,username) VALUES('$id','$pertanyaan','$tanggal_dimuat','$username')";
	$hasil = mysqli_query($connection, $sqlstr);
	
	if($hasil)
	{
		echo "<script type='text/javascript'>alert('Pertanyaan berhasil disimpan')</script>";
		echo "<meta http-equiv=Refresh content=2;url=askme.php>";
	}
	else
	{
		echo "<script type='text/javascript'>alert('Pertanyaan gagal disimpan')</script>";
		die(mysqli_error($connection));
	}
?>