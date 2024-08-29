<?php
	echo "<table id=\"menu\">
			<tr bgcolor=\"#C2CBCB\">
				<td width=\"100%\">
					<ul>
						<li>
							<a href=\"home.php\">Home</a>
						</li>
						<li>
							<a href=\"news.php\">News</a>
						</li>
						<li>
							<a href=\"events.php\">Events</a>
						</li>
						<li>
							<a href=\"jokes.php\">Jokes</a>
						</li>
						<li>
							<a href=\"opinions.php\">Opinions</a>
						</li>
						<li>
							<a href=\"gallery.php\">Galleries</a>
						</li>
						<li>
							<a href=\"askme.php\">Ask Me</a>
						</li>
						<li>";
								if(isset($_SESSION['login_user'])){
									echo "<a href=\"logs/logout.php\">Log Out</a>";
								}
						echo "		
						</li>
					</ul>
				</td>
			</tr>
		</table>";
?>