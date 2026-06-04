<ul>
	<li>
		<div class="otd-title">On This Day</div>
		<h3 align="center">
		<?php
			$today = date("d M Y");
			echo "$today";
		?>
		</h3>
		<p>
			<?php
				$tanggal = date("d");
				$bulan = date("n");
				
				$sqlstr = "SELECT * from sejarah WHERE (tanggal=$tanggal) AND (bulan=$bulan) order by tahun DESC";
				$hasil=mysqli_query($connection,$sqlstr);
				@$row=mysqli_fetch_row($hasil);
				if(!$row){
					echo "Tidak ada kejadian yang terjadi pada tahun sebelumnya";
				}
				else{
					do{
						list($id,$tanggal,$bulan,$tahun,$judul) = $row;
						echo "<b>$tahun</b> - $judul<br>";
						echo "----------------------<br>";
					}while(@$row=mysqli_fetch_row($hasil));
				}
			?>
		</p>
	</li>
</ul>