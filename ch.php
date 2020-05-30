<?php
$link = mysqli_connect('localhost', 'root' , '','lab');
   
$sql = mysqli_query($link, "UPDATE `users` SET `name` = '{$_POST['name']}',`surname` = '{$_POST['surname']}',`login` = '{$_POST['login']}', `password` = '{$_POST['password']}',`lang` = '{$_POST['lang']}',`role` = '{$_POST['role']}' WHERE `id`={$_GET['id']}");

header("Location:list.php");
?>
