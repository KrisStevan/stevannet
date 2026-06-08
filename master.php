<!DOCTYPE html>
<?php
	include('logs/login.php'); // Includes Login Script
	include('logs/session.php');
	if(isset($_SESSION['login_user'])){
		if($login_session == 'admin1')
			header("location: adminPages/adminHome.php");
	}
?>
<html>
    <head>
		<link rel="stylesheet" type="text/css" href="penampilan.css">
		<div id="header">
			<div id="searchform">
				<form class="search" action="searches.php">
					<?php
                        //search menu
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
				</form>
			</div>
		</div>
        <!--menu atas-->
        <table id="menu">
            <tr bgcolor="#C2CBCB">
				<td width="100%">
					<ul>
						<li>
							<a href="home.php">Home</a>
						</li>
						<li>
							<a href="news.php">News</a>
						</li>
						<li>
							<a href="events.php">Events</a>
						</li>
						<li>
							<a href="jokes.php">Jokes</a>
						</li>
						<li>
							<a href="opinions.php">Opinions</a>
						</li>
						<li>
							<a href="gallery.php">Galleries</a>
						</li>
						<li>
							<a href="askme.php">Ask Me</a>
						</li>
						<li>
                            <?php
								if(isset($_SESSION['login_user'])){
									echo "<a href=\"logs/logout.php\">Log Out</a>";
								}
                            ?>
						</li>
					</ul>
				</td>
			</tr>
        </table>
	</head>
    <body onload="startTime()">
        <div class="leftside">
            <script src="time.js"></script>
            <br>
            <div id="clock"><br></div>

            <ul>
                <?php
                    include "db.inc.php";
                    connect_db($connection);

                    $sqlstr = "SELECT * from topik";
                    $hasil=mysqli_query($connection, $sqlstr);
                    $row=mysqli_fetch_row($hasil);
                    
                    if(!$row)
                        echo "Terjadi Kesalahan pada sistem anda";
                    do{
                        list($id,$nama_topik,$kode_topik,$page_name) = $row;
                        
                        echo "<li>
                                <a href='bytopic.php?topic=$id'>$nama_topik</a>
                            </li>";
                        
                    }while($row=mysqli_fetch_row($hasil));
                ?>
                <li>
                    <a href="admin.php">User's Room</a>
                </li>
                <li>
                    <img src="Images/PictureOTM.jpg" style="width:99%; height:30px; border:1px solid;">
                </li>
                <li>
                    <img src="Images/GW.jpg" style="width:99%; height:240px; border:1px solid; margin-top:-6px;">
                </li>
            </ul>
        </div>

        <div class="center">
            <?php
                if(function_exists('renderCenter')) {
                    renderCenter();
                }
            ?>
        </div>

        <div class="right">
            <ul>
                <li>
                    <div class="otd-title">On This Day</div>
                    <h3 align="center">
                    <?php
                        $today = date("d M Y");
                        echo "$today";
                    ?>
                    </h3>
                    <p>
                        <?php
                            $tanggal = date("d");
                            $bulan = date("n");
                            
                            $sqlstr = "SELECT * from sejarah WHERE (tanggal=$tanggal) AND (bulan=$bulan) order by tahun DESC";
                            $hasil=mysqli_query($connection,$sqlstr);
                            @$row=mysqli_fetch_row($hasil);
                            if(!$row){
                                echo "Tidak ada kejadian yang terjadi pada tahun sebelumnya";
                            }
                            else{
                                do{
                                    list($id,$tanggal,$bulan,$tahun,$judul) = $row;
                                    echo "<b>$tahun</b> - $judul<br>";
                                    echo "----------------------<br>";
                                }while(@$row=mysqli_fetch_row($hasil));
                            }
                        ?>
                    </p>
                </li>
            </ul>
        </div>

        <div class="footer">
            <p>&copy; 2016 Stevannet. All rights reserved.</p>
		</div>
    </body>
</html>