<?php
require_once 'class.php';
session_start();

$link = mysqli_connect('localhost', 'root' , '','lab');

if ($_SESSION['role']!='3'&&$_SESSION['role']!='2'||empty($_SESSION['role'])){
    header('HTTP/1.0 403 Forbidden');
    die();
    }
?>

<html>
<head>
    <title>Users List</title>
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
if ($_SESSION['delete']=='yes') {
    echo lang::trans('User').' '.$_SESSION['id_'].' '.lang::trans('successfully deleted').'<br/>';
    $_SESSION['delete']='';
}

    $sql = mysqli_query($link, 'SELECT `id`, `name`, `surname`,`login`,`lang`,`role` FROM `users`');
    while ($result = mysqli_fetch_array($sql)) {

        echo '<tr>' .
            "<td>{$result['id']}</td>" .
            "<td>{$result['name']}</td>" .
            "<td>{$result['surname']}</td>" .
            "<td>{$result['login']}</td>" .
            "<td>{$result['lang']}</td>" .
            "<td>{$result['role']}</td>" .
            "<td><a href='change.php?id=".$result['id']."'>Change</a></td>" .
            "<td><a href='delete.php?id=".$result['id']."'>Delete</a></td>" .
            '</tr>';
    
    }
?>

</table>
<p align="center"><input type="button" value="<?php echo lang::trans('Add new user'); ?>" onclick="location.href='registration.php'">
<form name="find" method="post" action="find.php"><p align="center">
    <button><?php echo lang::trans('Find'); ?></button>
    <input type = "text" name = "id" value="id" style="width: 50px"> 
</form>
<p align="center"><input type="button" value="<?php echo lang::trans('Back'); ?>" onclick="location.href='<?php echo strtolower($_SESSION['role']).".php"; ?>'">
</body>
</html>