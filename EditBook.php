<?php
declare(strict_types=1 );
include 'includes/class-autoloaded.php';
include 'Admin.php';
$test=new UserValidation();
$test->edit();
?>
<div>
	<h3>Edit Form</h3>
	<form action="editData.php" method="POST">
<label>ID</label>
<input type="text" name="ID" value="<?php echo $test->ID; ?>">
<br>
<label>First Name</label>
<input type="text" name="FirstName" value="<?php echo $test->getFirstName(); ?>">
<br>
<label>Last Name</label>
<input type="text" name="LastName" value="<?php echo $test->getLastName(); ?>">
<br>
<label>Date</label>
<input type="text" name="Date" value="<?php echo $test->getDate(); ?>">
<br>
<label>Time</label>
<input type="text" name="Time" value="<?php echo $test->getTime(); ?>">
<br>
<label>City</label>
<input type="text" name="City" value="<?php echo $test->getCity(); ?>">
<br>
<label>Package</label>
<input type="text" name="Package" value="<?php echo $test->getPackage(); ?>">
<br>
<label>Phone</label>
<input type="text" name="Phone" value="<?php echo $test->getPhone(); ?>">
<br>
<label>Comment</label>
<input type="text" name="Comment" value="<?php echo $test->getComment(); ?>">
<br>
<input type="submit" name="submit" value="submit">
</form>
</div>

