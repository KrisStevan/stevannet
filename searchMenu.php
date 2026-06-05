<?php
	if(isset($_SESSION['login_user']))
	{
		echo "
		<div class=\"header-content\">
			<div class=\"header-logo\">
				<img src=\"Images/logo.jpg\" alt=\"Stevannet Logo\" width=\"150px\" height=\"50px\" style=\"margin-left: 20px;\">
			</div>
			<div class=\"header-search\">
				<input type=\"text\" name='src' placeholder=\"Search...\" class=\"textinput\">
				<input type=\"submit\" value=\"Search\" class=\"searchbutton\">
			</div>
			<div class=\"header-user\">Hello $login_session!</div>
		</div>";
	}
	else
	{
		echo "
		<div class=\"header-content\">
			<div class=\"header-logo\">
				<img src=\"Images/logo.jpg\" alt=\"Stevannet Logo\" width=\"150px\" height=\"50px\" style=\"margin-left: 20px;\">
			</div>
			<div class=\"header-search\">
				<input type=\"text\" name='src' placeholder=\"Search...\" class=\"textinput\">
				<input type=\"submit\" value=\"Search\" class=\"searchbutton\">
			</div>
		</div>";
	}
?>