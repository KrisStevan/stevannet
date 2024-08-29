<?php
	include "db.inc.php";
	connect_db($connection);

	$id = $_REQUEST["id"];
	$hint = "";
	
	if ($id != "") {
		$sqlstr = "SELECT * from gambar WHERE noGambar='$id'";
		$hasil_1=mysqli_query($connection, $sqlstr);
		$row=mysqli_fetch_row($hasil_1);
		if(!$row)
			echo "Tidak ada detail";
		do{
			list($noGambar,$galeri,$gambar,$nama,$noUrutGambar,$tanggalUnggah,$deskripsi) = $row;
			echo "<b>$nama</b><br>$deskripsi";
		}while($row=mysqli_fetch_row($hasil_1));
	}
	mysqli_close($connection);
?>