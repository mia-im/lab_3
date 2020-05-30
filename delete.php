<?php
session_start();

  if ($_SESSION['role']!='3'){
        header('HTTP/1.0 403 Forbidden');
        die();
    }

$link = mysqli_connect('localhost', 'root' , '','lab');

$sql = mysqli_query($link, "DELETE FROM `users` WHERE `id` = {$_GET['id']}");
$_SESSION['id_']=$_GET['id'];
$_SESSION['delete']='yes';
header("Location:list.php");	
?>