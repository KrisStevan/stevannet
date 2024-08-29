<?php
	if(isset($_SESSION['login_user']))
	{
		echo "
			<h3 id= \"hellousername\" style=\"margin-left:1096px; color:white; text-align: right; width:180px;\">
				<center>Hello $login_session!</center>
			</h3>
			<table style = \"float:right; margin-left:480px; margin-top:-8px;\">
				<tr>
					<td><input type=\"text\" name='src' placeholder=\"Search...\" class=\"textinput\" style=\"width: 280px; height: 20px;\"/></td>
					<td><input type=\"submit\" value=\"Search\" class=\"searchbutton\" style=\"width: 70px; height: 25px;\"/></td>
				</tr>
			</table>";
		}
	else
	{
		echo "
			<table style = \"float:right; margin-top:33px;\">
				<tr>
					<td><input type=\"text\" name='src' placeholder=\"Search...\" class=\"textinput\" style=\"width: 280px; height: 20px;\"/></td>
					<td><input type=\"submit\" value=\"Search\" class=\"searchbutton\" style=\"width: 70px; height: 25px;\"/></td>
				</tr>
			</table>";
	}
?>