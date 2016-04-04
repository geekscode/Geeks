<?php
include '../../conf/config.php';
	
$module= $_GET['module'];
$act = $_GET['act'];

if ($module=='submenu' AND $act=='hapus') {
	mysql_query(" DELETE FROM submenu where idsub = '$_GET[idsub]' ");
	header("location:../../media.php?module=". $module);
}

if ($module=='submenu' AND $act=='input') {
	if (isset($_POST['submit'])) {
		$id=$_POST['idsub'];
		$nama=$_POST['namamenu'];
		$link=$_POST['link'];
		$menu=$_POST['mainmenu'];
		$aktif=$_POST['aktif'];
		mysql_query("INSERT INTO submenu(idsub,namasub,linksub,idmain,aktif) VALUES('$id','$nama','$link','$menu','$aktif')")or die(mysql_error());
		header("location:../../media.php?module=". $module);
	}
}
?>