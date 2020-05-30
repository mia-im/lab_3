<?php
session_start();
    
$link = mysqli_connect('localhost', 'root' , '','lab');

$login = $_POST["login"];
$password = $_POST["password"];

$result = mysqli_query($link, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' ");
$user = mysqli_fetch_assoc($result);

$_SESSION = [
    "id" => $user['id'],
    "login" => $user['login'],
    "password" => $user['password'],
    "name" => $user['name'],
    "surname" => $user['surname'],
    "lang" => $user['lang'],
    "role" => $user['role']
];

header("Location: if.php");
?>																																																


