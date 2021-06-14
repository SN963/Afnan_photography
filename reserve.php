<?php
require_once('database_Connect.php');
include 'Admin.php';
class reservation extends dbConnect
{
  public function display()
  {
    $sql="SELECT * FROM `booking` ";
    $stmt=$this->connect()->query($sql);
    while($row=$stmt->fetch())
        {
       print "<tr>";
       print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'>".$row['ID']."</td>";
          print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'>".$row['FirstName']." ".$row['LastName']."</td>";
          print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'>".$row['Time']."</td>";
          print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'>".$row['City']."</td>";
          print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'>".$row['Comment']."</td>";
          print "<td style = 'text-align: center; font-size:20px; border:1px solid black;'><input type='checkbox' name='checkbox[]' value='".$row['ID']."'></td>";
          print "</tr>";
        }
  }

}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="reserve.css">
</head>
<body>
<center>
  <form method="post" action="test2.php">
      <div class='sub'>
      <a href="" title="delete" class="delete" onclick="return confirm('Are you sure you want to delete this Reservartion')" style="position: absolute;"><input type= 'submit' name='delete' id='delete' value='Delete Records'></a></div>
    <table style = "border-collapse: collapse; width:50%; border:1px solid black;">
      <tr> 
          <th style = 'text-align: center; font-size:20px; border:1px solid black;'> ID </th>
          <th style = 'text-align: center; font-size:20px; border:1px solid black;'> Name </th>
          <th style = 'text-align: center; font-size:20px; border:1px solid black;'> Time </th>
          <th style = 'text-align: center; font-size:20px; border:1px solid black;'> City </th>
          <th style='text-align: center; font-size:20px; border:1px solid black;'>Comment</th>
          <th style = 'text-align: center; font-size:20px; border:1px solid black;'> Select </th>
         </tr>
  </form>
   
</body>
<?php
$get=new reservation();
$get->display();
?>
</html>