<?php
declare(strict_types=1 );
include 'includes/class-autoloaded.php';
$test=new Package_Type();
$test->edit();
?>
<div>
	<h3>Edit Form</h3>
	<form action="EditPackage_Types_Data.php" method="POST">
		<label>ID</label>
		<input type="text" name="ID" value="<?php echo $test->ID; ?>">
		<br>
		<label>Package Name</label>
		<input type="text" name="PackageName" value="<?php echo $test->getPackageName(); ?>">
		<br>
		<input type="submit" name="submit" value="submit">
	</form>
</div>
