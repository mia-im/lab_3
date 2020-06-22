<?php 
require_once "../class.php"; 

$link = mysqli_connect('localhost', 'root' , '','lab');

if ($_SESSION['role']!='3'&&$_SESSION['role']!='2'||empty($_SESSION['role'])){
    header('HTTP/1.0 403 Forbidden');
    die();
    }
?>

<html>
<head>
    <title>Find user by id</title>
</head>
<body>
<p align="center"><table border = '1'>

<?php
include 'dop/table.html';

$stmt = mysqli_prepare($link, "SELECT `id`, `name`, `surname`,`login`,`lang`,`role` FROM `users` WHERE `id` = ?");
mysqli_stmt_bind_param($stmt, "i", $_POST['id']);

mysqli_stmt_execute($stmt);
$sql = mysqli_stmt_get_result($stmt);

include 'dop/table.php';
?>

</table>

<p align="center"><input type="button" value="<?php echo lang::trans('Back'); ?>" onclick="location.href='list.php'">
</body>
</html>
