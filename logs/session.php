<?php
	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	$connection = mysqli_connect("localhost", "root", "", "");
	
	// Selecting Database
	$db = mysqli_select_db($connection, "stevannet");
	
	//session_start();// Starting Session
	
	// Storing Session
	@$user_check=$_SESSION['login_user'];
	
	// SQL Query To Fetch Complete Information Of User
	$ses_sql=mysqli_query($connection,"select username from users where username='$user_check'");
	$row = mysqli_fetch_assoc($ses_sql);

	if(isset($_SESSION['login_user'])){
		$login_session =$row['username'];
	}
	else if(!isset($login_session)){
		mysqli_close($connection); // Closing Connection
	}
?>