<?php
function renderCenter() {
	$defaultHint = "Silahkan sorot gambar-gambar dibawah untuk melihat penjelasannya";
	
	global $connection;

	$id = $_GET["id"];
	$sqlStrUntukJudul = "SELECT namaGaleri,tanggal,deskripsi FROM galeri WHERE id='$id'";
	$pengantar=mysqli_query($connection, $sqlStrUntukJudul);
	$row=mysqli_fetch_row($pengantar);

	if(!$row){
		die("Terjadi Kesalahan Sistem");
		die(mysqli_error);
	}
		
	list($namaGaleri,$tanggal,$deskripsi) = $row;

	echo "<h3>" . $namaGaleri . "</h3>";

	echo "<div id=\"txtDesc\">" . $deskripsi . "</div>";
	echo "<div id=\"txtHint\" data-default='" . htmlspecialchars($defaultHint, ENT_QUOTES) . "'><b>" . $defaultHint . "</b></div>";
	echo "<script src=\"tampilGambar.js\"></script>";

	echo "<table class='tabelIsi' width=100% border=\"0\" cellpadding=\"0\" cellspacing=\"0\">";

	$jml_list=12;
	$halaman=isset($_GET['page'])?(int) $_GET['page']:1;
				
	if(!empty($awal)) $awal = 0;
		
	$offset=($halaman-1)*12;
	
	$sqlstr = "SELECT * from gambar WHERE galeri='$id' order by noUrutGambar limit $offset,12";
	$hasil_1=mysqli_query($connection, $sqlstr);
	$row=mysqli_fetch_row($hasil_1);
	$ctr = 0;
	$ctr2 = 0;
	
	if(!$row)
		echo "Terjadi Kesalahan pada sistem anda";
	do{
		list($noGambar,$galeri,$gambar,$nama,$noUrutGambar,$tanggalUnggah,$deskripsi) = $row;
		if($ctr%4==0){
			echo "<tr>";
		}
		//isi tabelnya
		echo "<td width='180' align='center'>
				<img class='image' onmouseover=\"tampilkanDetail(".$noGambar.")\" 
					onmouseout = \"sembunyikanDetail(".$noGambar.")\" 
					src='Galeri/".$gambar."' width='180' height='180' 
					id='".$noGambar."'>
			</td>";
		
		//pengaturan baris tabel
		if($ctr!=0 && $ctr%3==0){ 
			echo "</tr>";  
		}
		$ctr++;
		if($ctr==3){ 
			$ctr=0; 
		}
		$ctr2++;
	}while($row = mysqli_fetch_row($hasil_1));

	echo "</table>"; //tabelIsi
}

include('master.php');
?>