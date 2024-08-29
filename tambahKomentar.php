<?php
	session_start();
	$idBerita = $_POST['id'];
	
	if(!isset($_SESSION['login_user'])){
		header("location:berita_detail.php?id=".$idBerita);
		exit;
	}
	
	include("db.inc.php");
	connect_db($connection);
	
	$nama = $_SESSION['login_user'];
	$isi = $_POST['isi'];
	$tanggal = date("d M Y");
	
	$sqlstr = "INSERT INTO news_comments VALUES('null','$idBerita','$nama','$tanggal','$isi')";
	$hasil = mysqli_query($connection, $sqlstr);
	
	if($hasil)
	{
		echo "Komentar berhasil disimpan";
		header("location: berita_detail.php?id=$idBerita");
	}
	else
	{
		echo "Komentar gagal disimpan";
		header("location: berita_detail.php?id=$idBerita");
	}
?>