<?php
include 'conf/config.php';
echo "<ul class=\"nav\">
		<li class=\"\"><a href=\"media.php?module=home\"><i class=\"icon-home icon-white\"></i> Home</a></li>";

		$sql= mysql_query("SELECT * from mainmenu where aktif='N' order by idmain");
		while ($r = mysql_fetch_array($sql)) {
			echo "<li class=\"dropdown\">";
			if (empty($r['link'])) {
				echo "<a class=\"dropdown-toggle\" href=\"###\"><strong class=\"caret\"></strong>&nbsp;&nbsp;". $r['namamenu']."</a>";
			}else{
				echo '<a href="'.$r['link'].'">'.$r['namamenu'].'</a></strong>';
			}

			$sub= mysql_query("SELECT * FROM submenu,mainmenu where submenu.idmain = mainmenu.idmain AND submenu.idmain = $r[idmain] AND submenu.aktif='N' ORDER BY idsub ASC")or die(mysql_error());
			$jml= mysql_num_rows($sub);

			if ($jml > 0) {
				echo "<ul class=\"dropdown-menu\">";
				while ($w= mysql_fetch_array($sub)) {
					echo "<li>";
					echo '<a href="'.$w['linksub'].'">'.$w['namasub'].'</a>';
					echo "</li>";
				}
				echo "</ul>";
			}else{
				echo "</li>";
			}
		}
		echo "</ul>";

?>