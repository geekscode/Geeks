<?php
$server = "localhost";
$username = "root";
$pass = "";
$db = "it";

	mysql_connect($server,$username,$pass) or die("Gagal");
	mysql_select_db($db) or die("Database tidak ditemukan");
	
?>