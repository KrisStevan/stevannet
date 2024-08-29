<?php
	include("db.inc.php");
	$tanggal_muat = date("d M Y");
	connect_db($connection);
	
	//periksa apakah gambar dimasukkan atau tidak
	if(!empty($gambar)){
		if(!move_uploaded_file($gambar,"img/$gambar")){
			print("Gagal Mengunggah $gambar");
			exit(1);
		}
	}
	
	//$id = $_POST['id'];
	$judul = $_POST['judul'];
	$tanggal_terjadi = $_POST['tanggal_terjadi'];
	$id_jenis = $_POST['id_jenis'];
	$id_topik = $_POST['id_topik'];
	$isi = $_POST['content'];
	
	$resultID = mysqli_query($connection,"SELECT MAX(id) AS 'idBerita' FROM articles");
	$idOld = mysqli_fetch_array($resultID);
	$id = $idOld["idBerita"] + 1;
	
	$folder="../Images/";
	$folder=$folder.basename($_FILES['gambar']['name']);
	$gambar=$_FILES['gambar']['name'];
	if(move_uploaded_file($_FILES['gambar']['tmp_name'],$folder)){
		echo "Berhasil Upload Gambar<br>";
	}
	else{
		echo "Maaf, ada masalah dengan pengunggahan gambar";
	}
	
	$sumber = $_POST['sumber'];
	
	$sqlstr = "INSERT INTO articles VALUES('$id','$judul','$tanggal_muat','$tanggal_terjadi','$id_jenis','$id_topik','$isi','$gambar','$sumber')";
	$sqlstrtanpagambar = "INSERT INTO articles (id,judul,tanggal_muat,tanggal_terjadi,id_jenis,id_topik,isi,sumber) VALUES('$id','$judul','$tanggal_muat','$tanggal_terjadi','$id_jenis','$id_topik','$isi','$sumber')";
	
	if (!$gambar) $hasil = mysqli_query($connection, $sqlstrtanpagambar);
	else $hasil = mysqli_query($connection, $sqlstr);
	
	if($hasil)
	{
		header("location:adminNews.php");
		echo "Artikel berhasil disimpan<br>";
		print("<br><br>Artikel anda :<br><br>");
		
		if(!empty($gambar)){
			if(($_FILES['gambar']['type'] == "image/gif") || ($_FILES['gambar']['type'] == "image/jpg")||($_FILES['gambar']['type'] == "image/jpeg")||($_FILES['gambar']['type'] == "image/png")){
				print("<img src='C:\\xampp\\htdocs\\stevannet\\Images\\$gambar' width=200px height=200px align=left>");
			}
			else print("gambar tidak Sesuai Format");
		}
		print("$gambar");
		print("<table width=50% border=0 cellpadding=0 cellspacing=0><tr><td>");
		print("<b>$tanggal_muat<br></b>");
		print("<b>$judul<br></b>");
		print("oleh $sumber<br><br>");
		print("<i>$id_jenis / $id_topik</i><br><br>");
		print("$isi\n<br>");
		print("</td></tr></table><br>");
		header("location:adminNews.php");
	}
	else
	{
		echo "Artikel gagal disimpan <br>Silahkan tekan tombol back untuk melanjutkan";
		echo mysqli_error($connection);
	}
?>