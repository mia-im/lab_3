<?php
session_start();
require_once '../class.php';

if ($_SESSION['role']!='3'&&$_SESSION['role']!='2'||empty($_SESSION['role'])){
		header('HTTP/1.0 403 Forbidden');
		die();
	}

else {
		$user=auth();
		$user->printInf();
	}
?>

<form>
	<br><a href="admin.php"><?php echo lang::trans('Admin information'); ?></a>
	<br><a href="client.php"><?php echo lang::trans('Client information'); ?></a>
</form>
<?php include 'language.php';?>
<br><input type="button" value="<?php echo lang::trans('Users List'); ?>" onclick="location.href='../actions/list.php'"><br>
<br><input type="button" value="<?php echo lang::trans('Log out'); ?>" onclick="location.href='../login/main.php'">
