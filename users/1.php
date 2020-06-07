<?php
session_start();
require_once '../class.php';

if (empty($_SESSION['role'])){
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
	<br><a href="manager.php"><?php echo lang::trans('Manager information'); ?></a>
</form>
<?php include '../lang/language.php';?>
<br><input type="button" value="<?php echo lang::trans('Users List'); ?>" onclick="location.href='../actions/list.php'"><br>
<br><input type="button" value="<?php echo lang::trans('Log out'); ?>" onclick="location.href='../login/main.php'">
