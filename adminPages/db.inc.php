<?php
	// Informasi Database.
	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = '';
	$db_name = 'stevannet';
	$db_port = 3307;

	//menghubungkan ke MySQL Server.
	function connect_db(&$connection){
		global $db_host, $db_user, $db_pass, $db_name, $db_port;

		$connection = mysqli_connect(
			$db_host,
			$db_user,
			$db_pass,
			$db_name,
			$db_port
		);

		if (!$connection) {
			die("Database connection failed: " . mysqli_connect_error());
		}
		mysqli_select_db($connection, $db_name);
	}
?>