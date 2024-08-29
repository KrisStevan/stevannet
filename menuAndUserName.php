<?php
	if(isset($_SESSION['login_user']))
	{
		echo "
			<table style = \"float:left; margin-left:480px; margin-top:-45px;\">
				<tr>
					<td><input type=\"text\" name='src' placeholder=\"Search...\" class=\"textinput\" style=\"width: 500px; height: 35px;\"/></td>
					<td><input type=\"submit\" value=\"Search\" class=\"searchbutton\" style=\"width: 70px; height: 35px;\"/></td>
				</tr>
			</table>";
		}
	else
	{
		echo "
			<table style = \"float:left; margin-left:480px; margin-top:15px;\">
				<tr>
					<td><input type=\"text\" name='src' placeholder=\"Search...\" class=\"textinput\" style=\"width: 500px; height: 35px;\"/></td>
					<td><input type=\"submit\" value=\"Search\" class=\"searchbutton\" style=\"width: 70px; height: 35px;\"/></td>
				</tr>
			</table>";
	}
?>