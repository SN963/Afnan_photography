<?php
declare(strict_types=1 );
include 'includes/class-autoloaded.php';
include 'Admin.php';
$test=new Admin();
$test->edit();
?>
<div>
	<h3>Edit Form</h3>
	<form action="EditAdmin_Data.php" method="POST" style="margin-left: 150px;">
		<label>ID</label>
		<input type="text" name="ID" value="<?php echo $test->ID; ?>">
		<br>
		<label>First Name</label>
		<input type="text" name="FirstName" value="<?php echo $test->getfirstName(); ?>">
		<br>
		<label>Last Name</label>
		<input type="text" name="LastName" value="<?php echo $test->getlastName(); ?>">
		<br>
		<label>Email</label>
		<input type="text" name="Email" value="<?php echo $test->getemail(); ?>">
		<br>
		<label>Phone</label>
		<input type="text" name="Phone" value="<?php echo $test->getphonenumber(); ?>">
		<br>
		<label>Image</label>
		<input type="text" name="Image" value="<?php echo $test->getimage(); ?>">
		<input type="submit" name="submit" value="submit">
	</form>
</div>

