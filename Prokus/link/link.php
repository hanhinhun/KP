<?php
		if(!isset($_GET['v'])){
			require_once"dasbord/dasbord.php";
		}elseif($_GET['v']=="loginoperator"){
			require_once"login/loginoperator.php";
		}elseif($_GET['v']=='loginmanager'){
			require_once"login/loginmanager.php";
		}elseif($_GET['v']=='loginadmin'){
			require_once "login/loginadmin.php";
		}else{
			include "dasbord/dasbord.php";
		}

?>