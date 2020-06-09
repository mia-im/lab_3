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

$id=$_POST['id'];
$sql = mysqli_query($link, "SELECT `id`, `name`, `surname`,`login`,`lang`,`role` FROM `users` WHERE `id`='" . mysqli_real_escape_string($link, $id) . "';");
      include 'dop/table.php';
?>

</table>

<p align="center"><input type="button" value="<?php echo lang::trans('Back'); ?>" onclick="location.href='list.php'">
</body>
</html>
