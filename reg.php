<?php
$link = mysqli_connect('localhost', 'root' , '','lab');

$login = $_POST['login'];
$password = $_POST['password'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$lang = $_POST['lang'];
$role = $_POST['role'];


if ($login === $_POST['login']) {
    mysqli_query($link, "INSERT INTO `users` (`id`, `login`, `password`, `name`, `surname`, `lang`, `role`) VALUES (NULL, '$login', '$password', '$name', '$surname', '$lang', '$role')");    
}

header("Location:list.php");
?>