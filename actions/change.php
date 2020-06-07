<?php
require_once "../class.php";
session_start();

  if ($_SESSION['role']!='3'){
        header('HTTP/1.0 403 Forbidden');
        die();
    }
?>

<html>
<head>
    <title>Change</title>
    <meta charset=utf-8>
</head>
<body>
<form name = "ch" action = "dop/ch.php?id=<? echo $_GET['id'];?>" method = "post" style="border: solid 1px; width: 400px;position: fixed; left: 35%;">
    <label><p align="center">Login </label>
    <p align="center"><input type = "text" name = "login">
    <label><p align="center">Password </label>
    <p align="center"><input type = "password" name = "password">
    <label><p align="center">Name </label>
    <p align="center"><input type = "text" name = "name">
    <label><p align="center">Surname </label>
    <p align="center"><input type = "text" name = "surname">
    <label><p align="center">Language </label>
    <p align="center"><input type = "text" name = "lang">
    <label><p align="center">Role(3-admin, 2-manager, 1-client) </label>
    <p align="center"><input type = "text" name = "role">
    <p align="center"><button><?php echo lang::trans('Change'); ?></button>
</form>
</body>
</html>