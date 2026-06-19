<?php
	function renderCenter() {
		global $connection;

		echo "<h2 id=\"askmeJudul\"><center>Daftar Jawaban</center></h2>";

		$jml_list=10;
		$halaman=isset($_GET['page'])?(int) $_GET['page']:1;

		if(!empty($awal)) $awal = 0;

		$offset=($halaman-1)*10;
		$sqlstr = "SELECT * from questions WHERE jawaban IS NOT NULL ORDER BY tanggal_dimuat DESC limit $offset,10";
		$hasil=mysqli_query($connection, $sqlstr);
		$row=mysqli_fetch_row($hasil);

		if(!$row)
			die("Terjadi Kesalahan pada sistem anda");
		do{
			list($id,$pertanyaan,$tanggal_muat,$jawaban) = $row;
			echo "Tanggal = $tanggal_muat<br><b>$pertanyaan</b><br><br>$jawaban<br>";
			echo "---------------------------------------------------------------------------------<br>";
		}while($row=mysqli_fetch_row($hasil));

		//paginasi halaman
		$sqlstr = "SELECT * from questions WHERE jawaban IS NOT NULL";
		$hasil_2 = mysqli_query($connection, $sqlstr);
		$jumlah = mysqli_num_rows($hasil_2);

		$i=$jumlah/10;
		$i=ceil($i);

		echo "<center>Halaman ";
		for($j=1;$j<=$i;$j++)
		{
			$awal = (($j-1)*4+$j)-1;
			echo "[<a href='questions.php?awal=$awal&page=$j'>$j</a>]";
		}
	}

	include('master.php');
?>