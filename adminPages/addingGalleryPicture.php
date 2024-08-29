<?php
	include("db.inc.php");
	$tanggalUnggah = date("d M Y");
	connect_db($connection);
	
	//periksa apakah gambar dimasukkan atau tidak
	if(!empty($gambar)){
		if(!move_uploaded_file($gambar,"img/$gambar")){
			print("Gagal Mengunggah $gambar");
			exit(1);
		}
	}
	$namaGaleri = $_POST['namaGaleri'];
	
	$resultID = mysqli_query($connection, "SELECT MAX(noGambar) AS 'idBerita' FROM gambar");
	$idOld = mysqli_fetch_array($resultID);
	$noGambar = $idOld["idBerita"] + 1;
	
	$galeri = $_POST['galleryID'];
	$nama = $_POST['nama'];
	$noUrutGambar = $_POST['noUrutGambar'];
	$deskripsi = $_POST['deskripsi'];
	
	$folder="../Galeri/";
	$folder=$folder.basename($_FILES['gambar']['name']);
	$gambar=$_FILES['gambar']['name'];
	if(move_uploaded_file($_FILES['gambar']['tmp_name'],$folder)){
		echo "Berhasil Upload Gambar<br>";
	}
	else{
		echo "Maaf, ada masalah dengan pengunggahan gambar";
	}
	
	$sqlstr = "INSERT INTO gambar VALUES('$noGambar','$galeri','$gambar','$nama','$noUrutGambar','$tanggalUnggah','$deskripsi')";
	$hasil = mysqli_query($connection, $sqlstr);
	
	if($hasil)
	{
		echo "Gambar Berhasil Disimpan";
		header("location: addGambarGaleri.php?linkID=$galeri&judul=$namaGaleri");
	}
	else
	{
		echo "Gambar gagal disimpan <br>Silahkan tekan tombol back untuk mencoba lagi";
		echo mysqli_error();
		//header("location: adminNews.php");
	}
?>