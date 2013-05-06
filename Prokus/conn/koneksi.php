<?php
	$host		="localhost";
	$username	="root";
	$pass		="";
	$db			="puskesmas";
	
		 mysql_connect($host,$username,$pass)or die ("koneksi gagal");
		 mysql_select_db($db) or die ("database tidak ditemukan");
	
	
?>
