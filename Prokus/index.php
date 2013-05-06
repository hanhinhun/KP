<?php

require_once"conn/koneksi.php";
session_start();

	

if(isset($_SESSION['username'],$_SESSION['password'],$_SESSION['status'])){//jika user sudah login
	if($_SESSION['status']==1){//pilih status jika status=1 maka user tersebut adalah manager
		$content = "../link/operator.php";//tampilkan link buat user manager
	}else if($_SESSION['status']==2){//pilih status jika status=1 maka user tersebut adalah fo
		$content = "link/manager.php";//tampilkan link buat user fo
	}else if($_SESSION['status']==3){//pilih status jika status=1 maka user tersebut adalah keuangan
		$content ="link/admin.php";//tampilkan link buat user keuangan
	}
}else{
	$content = "link/link.php";//tampilkan link ini jika user belum login
}



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="realitysoftware.ca" />
<title></title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" href="login/main.css" type="text/css" />

</head>

<body>

<div id="container">

<div id="header">
<a href="#">Sistem Rekam Medis Puskesmas</a>
</div>

			<div id="menu">
					<center>Selamat Datang </center>
			</div>

<!-- <div id="sidebar">
</div>-->
							<!-------- pengisian KONTEN utama ------>
			<div id="main">
			<p align="center">
			
				<?php
				require_once "$content";
			?>
			
				</p>
			</div>

<div id="footer">
&copy;2013 Sistem Rekam Medis Puskesmas &nbsp;<span class="separator">|</span>&nbsp; Design by <a href="http://www.realitysoftware.ca" title="Website Design">Hanhinhun</a>
</div>

</div>

</body>
</html>

                       