<?php
	include('../logs/login.php'); // Includes Login Script
	include('../logs/session.php');
	if(!isset($_SESSION['login_user'])){
		header("location: ../admin.php");
	}
	else if(isset($_SESSION['login_user'])){
		if($login_session != 'admin1')
			header("location: ../home.php");
	}
?>
<html>
	<head>
		<link rel="stylesheet" href="../penampilan.css">
		<div id="header">
			
		</div>
		<?php
			require("leftDIVAdmin.php");
		?>
	</head>
	
	<body>
		<!-- <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
			bkLib.onDomLoaded(function() { 
				nicEditors.allTextAreas() 
				new nicEditor().panelInstance('area1');
				new nicEditor({fullPanel : true}).panelInstance('area2');
				new nicEditor({iconsPath : '../nicEditorIcons.gif'}).panelInstance('area3');
				new nicEditor({buttonList : ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html','image']}).panelInstance('area4');
				new nicEditor({maxHeight : 100}).panelInstance('area5');
			});
		</script> -->

		<script type="text/javascript" src="//js.nicedit.com/nicEdit-latest.js"></script> 
		<script type="text/javascript">
			bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
		</script>
  
		<div class="centeradmin">
			<h3>Selamat Datang Admin, Ada Kejadian apa hari ini?
				<br><br>
				<form method="post" action="addArticle.php" class="adminaddnews" align="left" enctype="multipart/form-data">
					<table border = "0" style="font-size: 15px;">
						<!--<tr>
							<td>ID</td>
							<td><input type="text" name='id' class="adminaddnews" style="width: 100px; height: 20px;"/></td>
						</tr>-->
						<tr>
							<td>Judul</td>
							<td><input type="text" name='judul' class="adminaddnews" style="width: 300px; height: 20px;"/></td>
						</tr>
						<tr>
							<td>Tanggal Kejadian</td>
							<td><input type="text" name='tanggal_terjadi' class="adminaddnews" style="width: 300px; height: 20px;"/></td>
						</tr>
						<tr>
							<td>ID Jenis</td>
							<td>
								<select name="id_jenis" class="adminaddnews" style="width: 200px; height: 20px;">
									<?php
										include_once("../db.inc.php");
										connect_db($connection);
										$sqlstr = "SELECT * FROM jenis";
										$hasil = mysqli_query($connection, $sqlstr);
										$row = mysqli_fetch_row($hasil);
										
										if($row)
										{
											do{
												list($id,$nama_jenis) = $row;
												?>
												<option value="<?php echo "$id"; ?>"><?php echo "$id - $nama_jenis"; ?></option>
												<?php
											}while($row = mysqli_fetch_row($hasil));
										}
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td>ID Topik</td>
							<td>
								<select name="id_topik" id ="id_topik" class="adminaddnews" style="width: 200px; height: 20px;">
									<?php
										include_once("../db.inc.php");
										connect_db($connection);
										$sqlstr = "SELECT * FROM topik";
										$hasil = mysqli_query($connection, $sqlstr);
										$row = mysqli_fetch_row($hasil);
										
										if($row)
										{
											do{
												list($id,$nama_topik) = $row;
												?>
												<option value="<?php echo "$id"; ?>"><?php echo "$id - $nama_topik"; ?></option>
												<?php
											}while($row = mysqli_fetch_row($hasil));
										}
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td width="200px;">Isi</td>
							<td><textarea id="content" name="content" class="adminaddnews" cols="90" rows="10" /></textarea>
						</td>
						</tr>
						<tr>
							<td>Gambar</td>
							<td><input type="file" name="gambar" style="width: 300px; height: 20px; margin-top:10px;"></td>
						</tr>
						<tr>
							<td>Sumber</td>
							<td><input type="text" name='sumber' class="adminaddnews" style="width: 300px; height: 20px;"/></td>
						</tr>
					</table>		 	
					<input type="submit" value="Tambah Artikel" class="adminaddnews" style="width: 120px; height: 22px; margin-left:207px; margin-top:10px;"/>
					<br><br>
				</form>
			</h2>
		</div>
		<div class="footer">
		</div>
	</body>
</html>