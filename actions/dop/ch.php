<?php
$link = mysqli_connect('localhost', 'root' , '','lab');
 
$id=$_GET['id'];  
$sql = mysqli_query($link, "UPDATE `users` SET `name` = '{$_POST['name']}',`surname` = '{$_POST['surname']}',`login` = '{$_POST['login']}', `password` = '{$_POST['password']}',`lang` = '{$_POST['lang']}',`role` = '{$_POST['role']}' WHERE `id`='" . mysqli_real_escape_string($link, $id) . "';");

header("Location:../list.php");
?>
