<?php 
require_once "class.php"; 
session_start();

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
    <tr >
        <td > id</td >
        <td > Name</td >
        <td > Surname</td >
        <td > Login</td >
        <td > Language</td >
        <td > Role</td >
    </tr >

<?php
    $link = mysqli_connect('localhost', 'root' , '','lab');

$sql = mysqli_query($link, "SELECT `id`, `name`, `surname`,`login`,`lang`,`role` FROM `users` WHERE `id`={$_POST['id']}");
    while ($result = mysqli_fetch_array($sql)) {

        echo '<tr>' .
            "<td>{$result['id']}</td>" .
            "<td>{$result['name']}</td>" .
            "<td>{$result['surname']}</td>" .
            "<td>{$result['login']}</td>" .
            "<td>{$result['lang']}</td>" .
            "<td>{$result['role']}</td>" .
            '</tr>';
    
    }
?>

</table>

<p align="center"><input type="button" value="<?php echo lang::trans('Back'); ?>" onclick="location.href='list.php'">
</body>
</html>