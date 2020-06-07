<?php
session_start();

$_SESSION['lang']=$_POST['lang'];
header("Location:../login/if.php");
?>



