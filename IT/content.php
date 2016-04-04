<?php
include 'conf/config.php';

	if ($_GET["module"]=='home') {
		include 'modul/home.php';	
 	}elseif ($_GET['module']=='menuutama') {
		include 'modul/menuutama/menuutama.php';
	}elseif ($_GET['module']=='modul') {
		include 'modul/modul/modul.php';
	}elseif ($_GET['module']=='submenu') {
		include 'modul/submenu/submenu.php';
	}elseif ($_GET['module']=='tvu') {
		include 'modul/tvu/tvu.php';
	}elseif ($_GET['module']=='modem') {
		include 'modul/modem/modem.php';
	}
?>