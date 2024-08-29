<?php
	include("db.inc.php");
	$tanggal = date("d M Y");
	connect_db($connection);
	
	//periksa apakah gambar dimasukkan atau tidak
	if(!empty($gambarSampul)){
		if(!move_uploaded_file($gambarSampul,"img/$gambarSampul")){
			print("Gagal Mengunggah $gambarSampul");
			exit(1);
		}
	}
	
	$resultID = mysqli_query($connection, "SELECT MAX(id) + 1 AS idGal FROM galeri");
	$ids = mysqli_fetch_array($resultID);
	$id = $ids["idGal"] + 1;
	
	$namaGaleri = $_POST['namaGaleri'];
	$id_topik = $_POST['id_topik'];
	$deskripsi = $_POST['deskripsi'];
	
	$folder="../Galeri/";
	$folder=$folder.basename($_FILES['gambarSampul']['name']);
	$gambarSampul=$_FILES['gambarSampul']['name'];
	if(move_uploaded_file($_FILES['gambarSampul']['tmp_name'],$folder)){
		echo "Berhasil Upload Gambar Sampul<br>";
	}
	else{
		echo "Maaf, ada masalah dengan pengunggahan gambar sampul";
	}
	
	$sqlstr = "INSERT INTO galeri VALUES('$id','$namaGaleri','$id_topik','$gambarSampul','$tanggal','$deskripsi')";
	$hasil = mysqli_query($connection, $sqlstr);
	
	if($hasil)
	{
		echo "Galeri Berhasil Disimpan";
		header("location: addGambarGaleri.php?galeriID=$id");
	}
	else
	{
		echo "Galeri gagal disimpan <br>Silahkan tekan tombol back untuk mencoba lagi";
		echo mysqli_error();
		//header("location: adminNews.php");
	}
?>