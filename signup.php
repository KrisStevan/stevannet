<?php
	include("db.inc.php");
	connect_db($connection);
	
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$hobi = $_POST['hobi'];
	$id_topik1 = $_POST['id_topik1'];
	
	if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
		//Valid email!
		$sqlstr = "INSERT INTO users(nama,email,username,password,hobi,topikFav,reputation) VALUES('$nama','$email','$username','$password','$hobi','$id_topik1','100')";
		$hasil = mysqli_query($connection, $sqlstr);
		if($hasil)
		{
			echo "Mengarahkan anda ke halaman utama...";
			header("location: pengantar.php");
		}
		else
		{
			echo "Gagal Sign Up <br>";
		}
		die(mysqli_error());
	}
	else{
		echo "Email Tidak Berlaku";
		header("location: daftar.php");
	}
?>