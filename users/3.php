<?php
require_once '../class.php';

if ($_SESSION['role']!='3'){
		header('HTTP/1.0 403 Forbidden');
		die();
	}

else {
		$user=auth();
		$user->printInf();
	}	
?>

<form>
	<br><a href="manager.php"><?php echo lang::trans('Manager information'); ?></a>
	<br><a href="client.php"><?php echo lang::trans('Client information'); ?></a>
</form>
<?php include '../actions/dop/users_buttons.php'; ?>

