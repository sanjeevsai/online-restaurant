<?php
session_start();

$link = mysqli_connect("localhost","root","","sanjeev");
 

if($link == false)
	{
		echo "connection error";
	}
	 
	
	 $user=$_SESSION["name"];
	$address = $_POST["add"];
	$mob= $_POST["mobile"];
	$tot=$_SESSION["total"];

$a="insert into address values ('$user', '$address', '$mob','$tot')";

	$b=mysqli_query($link,$a);
	
?>

<html>
<center>


BILL <?php  
$date=date("d/m/Y");
echo $date;?>
<hr>
<table border='1' width="400">
<tr>
<td>

name of customer:
</td>
<td>
<?php 
echo $user;

?></td>
</tr>
<tr>
<td>
mobile number:
</td>
<td>
<?php 
echo $mob;
?>
</td>


</tr>
<tr>
<td>
number of total items:
</td>
<td>
<?php
echo $_SESSION["numr"];
?>
</td>
</tr>

<tr>
<td>
 amount:
</td>
<td>
<?php
echo $tot

?>

</td>
</tr>
<tr>
<td>
delivery address:
</td>
<td>
<?php 
echo $address;
?>
</td>
</tr>


<tr>
<td>
tax:
</td>
<td>
RS.100/-
</td>
</tr>

<tr>
<td colspan="2" align="center"> total amount :
<?php
echo $_SESSION["total"]+100;

?>


</td>
	</tr>
	
	</table>

the deleivery boy will be outside your house within 30 minutes
<br>
<!you can give the money to him in cash or by paytm or any other easy way.	
<br><br>

thank you 
<br>
pls,
order again.
