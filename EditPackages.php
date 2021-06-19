<?php
declare(strict_types=1 );
include 'includes/class-autoloaded.php';
include 'Admin.php';
$test=new Packages();
$test->edit();
?>
<head>
	<link rel="stylesheet" type="text/css" href="AddAdmin.css">
	<link rel="stylesheet" type="text/css" href="Admin.css">
</head>
<body>
<h1>Edit Form</h1>
<div class="form">
	<form action="EditPackages_Data.php" method="POST" style="margin-left:300px ;">
		<label>ID</label>
		<input type="text" name="ID" value="<?php echo $test->ID; ?>">
		<br>
		<label>ID Type</label>
		<input type="text" name="ID_Type" value="<?php echo $test->Type(); ?>">
		<br>
		<label>Description</label>
		<input type="text" name="Description" value="<?php echo $test->getDescription(); ?>">
		<br>
		<label>City</label>
		<input type="text" name="City" value="<?php echo $test->getCity(); ?>">
		<br>
		<label>Price</label>
		<input type="text" name="Price" value="<?php echo $test->getPrice(); ?>">
		<br>
		<input type="submit" name="submit" value="submit">
	</form>
</div>
</body>
