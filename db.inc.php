<?php
	// Informasi Database.
	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = '';
	$db_name = 'stevannet';

	//menghubungkan ke MySQL Server.
	function connect_db(&$connection){
		global $db_host,$db_user,$db_pass,$db_name;
		$connection = mysqli_connect($db_host,$db_user,$db_pass);
		mysqli_select_db($connection, $db_name);
	}
?>