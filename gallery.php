<?php
function renderCenter() {
	echo "<h2 id=\"newsJudul\">
			<center>Galeri</center>
		</h2>";

	global $connection;

	echo "<div id=\"galleryContent\">";

	$jml_list=10;
	$halaman=isset($_GET['page'])?(int) $_GET['page']:1;
	$offset=($halaman-1)*10;

	if(!empty($awal)) $awal = 0;

	echo "<div id=\"galleryList\">";
	$sqlstr = "SELECT * from galeri order by id DESC limit $offset,10";
	$hasil_1=mysqli_query($connection, $sqlstr);
	$row=mysqli_fetch_row($hasil_1);
	if(!$row) {
		echo "Terjadi Kesalahan pada sistem anda";
	} else {
		do{
			list($id,$namaGaleri,$id_topik,$gambarSampul,$tanggal,$deskripsi) = $row;
			echo "<div class=\"gallery-item\">";
				echo "<img src='Galeri/$gambarSampul' alt='Gallery cover'>";
				echo "<div class=\"gallery-item-meta\">";
					echo "<div class=\"gallery-item-date\">$tanggal</div>";
					echo "<a href=\"isiGaleri.php?id=$id\">$namaGaleri</a>";
				echo "</div>"; // gallery-item-meta
			echo "</div>"; // gallery-item
		}while($row=mysqli_fetch_row($hasil_1));
	}
	echo "</div>"; //galleryList

	//paginasi halaman
	$sqlstr = "SELECT * from galeri";
	$hasil_2 = mysqli_query($connection, $sqlstr);
	$jumlah = mysqli_num_rows($hasil_2);
	
	$i=$jumlah/10;
	$i=ceil($i);
					
	echo "<center>Halaman ";
	for($j=1;$j<=$i;$j++)
	{
		$awal = (($j-1)*4+$j)-1;
		echo "[<a href='news.php?awal=$awal&page=$j'>$j</a>]";
	}
	echo "</center>";

	echo "</div>"; //galleryContent
}

include('master.php');