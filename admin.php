<?php
	if (session_status() !== PHP_SESSION_ACTIVE) {
		session_start();
	}

	if (isset($_SESSION['login_user'])) {
		$session_username = $_SESSION['login_user']; //session_username = pengganti login_session
		if ($session_username === 'admin1') {
			header("Location: adminPages/adminHome.php");
			exit;
		} else {
			header("Location: home.php");
			exit;
		}
	}

	function renderCenter() {
		global $connection, $error;

		echo "<h3>Tunggu dulu.. Kami ingin memastikan bahwa yang menuju halaman ini adalah pengguna<br>";
		echo "<h4>";
		echo "<form class=\"login\" action=\"\" method=\"POST\" align=\"center\">
					Username 	<input id=\"name\" type=\"text\" name='username' class=\"userloginput\" style=\"width: 300px; height: 25px;  margin-left: 5px;\"/><br>
					Password  	<input id=\"password\" type=\"password\" name='password' class=\"userloginput\" style=\"width: 300px; height: 25px;  margin-left: 10px;\"/><br>
					<button type=\"button\"  onclick=\"window.location='daftar.php'\" style=\"width: 100px; height: 35px; margin-left:175px; margin-top:10px;\">Daftar</button>
					<input type=\"submit\" name=\"submit\" value=\"Log In\" class=\"searchbutton\" style=\"width: 100px; height: 35px; margin-left:1px; margin-top:10px;\"/><br>
					<h5 style=\"font-color:red;\">" . (isset($error) ? $error : '') . "</h5>
				</form>";
		echo "</h4>";
		echo "</h3>";
	}

	include('master.php');
?>