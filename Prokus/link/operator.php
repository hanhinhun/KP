<?php
	
	if(!isset($_GET['v'])){
		require_once"operator/operator.php";
	}else if($_GET['v']==input){
		require_once"pasien/input.php";
	}
	
?>