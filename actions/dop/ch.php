<?php
$link = mysqli_connect('localhost', 'root' , '','lab');
 
$stmt = mysqli_prepare($link, "UPDATE `users` SET `name` = ?,`surname` = ?,`login` = ?, `password` = ?,`lang` = ?,`role` = ? WHERE `id` = ?");
mysqli_stmt_bind_param($stmt, "sssssii", $_POST['name'], $_POST['surname'], $_POST['login'], $_POST['password'], $_POST['lang'], $_POST['role'], $_GET['id']);

mysqli_stmt_execute($stmt);

header("Location:../list.php");
?>
