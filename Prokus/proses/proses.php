<?php
require_once"../conn/koneksi.php";
require_once"../admin/fungsiadmin.php";
$logged_in=false;

session_start();

$user=$_POST['username'];
$pass=$_POST['pass'];


if(isset ($_POST['oprator'])){
$logoperator=$_POST['oprator'];
	$xx = "SELECT nama, password FROM user WHERE nama='$user' password='$pass' ";
	$sql=mysql_query($xx);
	$cek=mysql_num_rows($sql);
	if($cek!=0){
	
		$data = mysql_fetch_array($sql);
		isset($_SESSION['user']);
		isset($_SESSION['pass']);
		isset($_SESSION['status']);
		$_SESSION['user'] = $user;
		$_SESSION['pass'] = $pass;
		$_SESSION['status'] = 1;
	
	header("location: ../index.php");
		
	}
}

if(isset($_GET['manager'])){
$logmanager=$_POST['manager'];
	$xx = "SELECT nama,password FROM user WHERE nama='$user' password='$pass' ";
	$sql=mysql_query();
	$cek=msql_num_rows($sql);
	if($cek!=0){
		
		$data=mysql_fetch_array($sql);
		isset($_SESSION['user']);
		isset($_SESSION['password']);
		isset($_SESSION['status']);
		$_SESSION['user']= $user;
		$_SESSION['password']=$pass;
		$_SESSION['status']= 2;
		
		header("location:../index.php");
	}
}

if(isset($_GET['admin'])){
$logadmin=$_POST['admin'];
$xx = "SELECT nama,password FROM user WHERE nama='$user' password='$pass' ";
	$sql=mysql_query();
	$cek=mysql_fetch_array($sql);
	
	if($cek!=0){
		
		$data=mysql_fetch_array($sql);
		isset($_SESSION['user']);
		isset($_SESSION['password']);
		isset($_SESSION['status']);
		$_SESSION['user']=$user;
		$_SESSION['password']=$pass;
		$_SESSION['status']=3;
		
		header("location:../index.php");
	
	}
}

?>