<?php
include '../../conf/config.php';
error_reporting(E_ALL ^ E_NOTICE);
$module= $_GET[module];
$act = $_GET[act];



if ($module=='modem' AND $act=='hapus') {
	mysql_query(" DELETE FROM modem where kdmodem = '$_GET[kdmode]' ");
	header("location:../../media.php?module=". $module);
}
elseif ($module=='modem' AND $act=='input') {
	if (isset($_POST['submit'])) {
		$id=$_POST['kdmodem'];
		$nama=$_POST['nmmodem'];
		$operator=$_POST['operator'];
		$keterangan=$_POST['keterangan'];
		mysql_query("INSERT INTO modem(kdmodem,nmmodem,operator,keterangan) VALUES('$id','$nama','$operator','$keterangan')")or die(mysql_error());
		header("location:../../media.php?module=". $module);
	}
}
elseif ($module=='modem' AND $act='update') {
	if (isset($_POST['submit'])) {
		//$id1 = $_POST['idmain'];
		$nama1 = $_POST['nmmodem'];
		$operator1 = $_POST['operator'];
		$keterangan1 = $_POST['keterangan'];

		mysql_query("UPDATE modem SET nmmodem='$nama1',operator='$operator1',keterangan='$keterangan1' WHERE kdmodem='$_POST[kdmodem]' ")or die(mysql_error());
		header("location:../../media.php?module=". $module);
	}
}
?>