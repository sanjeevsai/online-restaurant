<html>

<center>
<?php 
session_start();
$link = mysqli_connect("localhost","root","","sanjeev"); 
		
	$item=$_POST["item"];

$delete=mysqli_query($link,"delete from orders where itemname='".$item."'");

echo"successfully deleted.go back and order your favourite food";

?>

</html>