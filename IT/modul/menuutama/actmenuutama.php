<?php
include '../../conf/config.php';
error_reporting(E_ALL ^ E_NOTICE);
$module= $_GET[module];
$act = $_GET[act];



if ($module=='menuutama' AND $act=='hapus') {
	mysql_query(" DELETE FROM mainmenu where idmain = '$_GET[idmain]' ");
	header("location:../../media.php?module=". $module);
}
elseif ($module=='menuutama' AND $act=='input') {
	if (isset($_POST['submit'])) {
		$id=$_POST['idmain'];
		$nama=$_POST['namamenu'];
		$link=$_POST['link'];
		$aktif=$_POST['aktif'];
		mysql_query("INSERT INTO mainmenu(idmain,namamenu,link,aktif) VALUES('$id','$nama','$link','$aktif')")or die(mysql_error());
		header("location:../../media.php?module=". $module);
	}
}
elseif ($module=='menuutama' AND $act='update') {
	if (isset($_POST['submit'])) {
		//$id1 = $_POST['idmain'];
		$nama1 = $_POST['namamenu'];
		$link1 = $_POST['link'];
		$aktif1 = $_POST['aktif'];

		mysql_query("UPDATE mainmenu SET namamenu='$nama1',link='$link1',aktif='$aktif1' WHERE idmain='$_POST[idmain]' ")or die(mysql_error());
		header("location:../../media.php?module=". $module);
	}
}
?>