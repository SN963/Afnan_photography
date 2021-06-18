<?php
	require_once('database_Connect.php');
	class refresher extends dbConnect
	{
		function refresh(){
		if(isset($_POST['delete'])) 
		{
			$GetValues=$_POST['checkbox'];
			foreach ( $GetValues as $id) 
			{ 
             	$dele="DELETE FROM `booking` where ID =".$id;
             	$r=$this->connect()->query($dele);
             	$message = "Data deleted successfully !";
             	echo $message;
			}
			header("Location:try.php");
		}
	}
}
?>
<?php
$test=new refresher();
$test->refresh();
?>