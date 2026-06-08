<?php
function renderCenter() {
	echo "<h2 id=\"eventsJudul\">
			<center>Agenda dan Kegiatan</center>
		</h2>";

	global $connection;

	$jml_list=8;
	$halaman=isset($_GET['page'])?(int) $_GET['page']:1;		
	if(!empty($awal)) $awal = 0;
	$offset=($halaman-1)*8;
	
	$sqlstr = "SELECT * from articles WHERE id_jenis='2' order by id DESC limit $offset,8";
	$hasil_1=mysqli_query($connection,$sqlstr);

	$row=mysqli_fetch_row($hasil_1);
	if(!$row)
		die("Terjadi Kesalahan pada sistem anda");
	do{
		list($id,$judul,$tanggal_muat,$tanggal_terjadi,$id_jenis,$id_topik,$isi,$gambar,$sumber) = $row;
		echo "<p><a href='berita_detail.php?id=$id'>$tanggal_muat - $judul</a></p>";
		$isian = substr($isi,0,150);
	}while($row=mysqli_fetch_row($hasil_1));

	//paginasi halaman
	$sqlstr = "SELECT * from articles WHERE id_jenis='2'";
	$hasil_2 = mysqli_query($connection,$sqlstr);
	$jumlah = mysqli_num_rows($hasil_2);
	
	$i=$jumlah/8;
	$i=ceil($i);

	echo "<center>Halaman ";
	for($j=1;$j<=$i;$j++)
	{
		$awal = (($j-1)*4+$j)-1;
		echo "[<a href='events.php?awal=$awal&page=$j'>$j</a>]";
	}
}

include('master.php');