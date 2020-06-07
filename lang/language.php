<?php
require_once '../class.php';
?>

<form method="POST" action="lang.php">
	<select name="lang" >
		<option value="ru">Русский</option>
		<option value="uk">Українська</option>
		<option value="en">English</option>
	</select>
<input type="submit" value="<?php echo lang::trans('Choose'); ?>"/>
</form>






