<?php
session_start();

$_SESSION['lang']=$_POST['lang'];
header("Location:if.php");
?>



