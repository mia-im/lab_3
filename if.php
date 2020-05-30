<?php
session_start();

if(empty($_SESSION['login'])){
	$_SESSION['login']='empty';
	header("Location: main.php");
}

elseif(empty($_SESSION['lang'])){
	header("Location: language.php");
}

else header("Location:".strtolower($_SESSION['role']).".php");
		
?>



