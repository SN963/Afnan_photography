<?php
declare(strict_types=1 );
include 'includes/class-autoloaded.php';
include 'Admin.php';
$test=new images("a","a","a");
$test->edit();
?>
<div>
	<h3>Edit Form</h3>
	<form action="EditImages_Data.php" method="POST" style="margin-left: 150px;">
		<label>ID</label>
		<input type="text" name="ID" value="<?php echo $test->ID; ?>">
		<br>
		<label>Image Name</label>
		<input type="text" name="ImageName" value="<?php echo $test->getImageName(); ?>">
		<br>
		<label>Image Description</label>
		<input type="text" name="ImageDescription" value="<?php echo $test->getImageDescription(); ?>">
		<br>
		<label>Image Type</label>
		<input type="text" name="ImageType" value="<?php echo $test->getImageType(); ?>">
		<br>
		<input type="submit" name="submit" value="submit">
	</form>
</div>
