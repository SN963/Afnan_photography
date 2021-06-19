<?php
declare(strict_types=1 );
include 'includes/class-autoloaded.php';
include 'Admin.php';
$test=new album("a","a");
$test->edit();
?>
<div>
	<h3>Edit Form</h3>
	<form action="EditAlbum_Data.php" method="POST">
		<label>ID</label>
		<input type="text" name="ID" value="<?php echo $test->ID; ?>">
		<br>
		<label>Album Name</label>
		<input type="text" name="AlbumName" value="<?php echo $test->getAlbumName(); ?>">
		<label>Image</label>
		<input type="text" name="Image" value="<?php echo $test->getImage(); ?>">
		<input type="submit" name="submit" value="submit">
	</form>
</div>

