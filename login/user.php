<?php
session_start();
    
$link = mysqli_connect('localhost', 'root' , '','lab');

$stmt = mysqli_prepare($link, "SELECT * FROM `users` WHERE `login` = ? AND `password` = ?");
mysqli_stmt_bind_param($stmt, "ss", $_POST["login"], $_POST["password"]);
mysqli_stmt_execute($stmt);
$sql = mysqli_stmt_get_result($stmt);

$user = mysqli_fetch_assoc($sql);

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


