<script src="time.js"></script>
<br>
<div id="clock"><br></div>

<ul>
	<?php
		include "db.inc.php";
		connect_db($connection);

		$sqlstr = "SELECT * from topik";
		$hasil=mysqli_query($connection, $sqlstr);
		$row=mysqli_fetch_row($hasil);
		
		if(!$row)
			echo "Terjadi Kesalahan pada sistem anda";
		do{
			list($id,$nama_topik,$kode_topik,$page_name) = $row;
			
			echo "<li>
					<a href='bytopic.php?topic=$id'>$nama_topik</a>
				</li>";
			
		}while($row=mysqli_fetch_row($hasil));
	?>
	<li>
		<a href="admin.php">User's Room</a>
	</li>
	<li>
		<img src="Images/PictureOTM.jpg" style="width:99%; height:30px; border:1px solid;">
	</li>
	<li>
		<img src="Images/GW.jpg" style="width:99%; height:240px; border:1px solid; margin-top:-6px;">
	</li>
</ul>