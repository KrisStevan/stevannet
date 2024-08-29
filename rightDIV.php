<ul>
	<li>
		<center>
			<img src="Images/OTD.jpg" width="100%" height="92px" style="margin-top:2px; margin-left:0px;">
		</center>
	</li>
	<li>
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
					echo "<center>Tidak ada kejadian yang terjadi pada tahun sebelumnya</center>";
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