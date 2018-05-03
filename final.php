<html>

<?php
session_start();
$tot=$_SESSION["total"];
$user= $_SESSION["name"];

?>
<center>
	<form action="bill.php" method="post">
	<table border="1" style="border-style:solid;border-color:grey;border-collapse:collapse;">
	<tr>
	<td><i>number of items:</i></td><td><?php echo $_SESSION["numr"];?>
	</td><br><br>
</tr>
	<tr><td><i>enter your address:</i></td>
	<td><input type="text" name="add" style="border:none; width:300; height:50;" placeholder="your order will be delivered to this address" required ></td>
<br></tr>
	<tr><td><i>enter your mobile number:</i></td><td>
	<input type="text" style="border:none; " name="mobile"value="<?php

	$conn=mysqli_connect("localhost","root","","sanjeev");

	$m=mysqli_query($conn,"SELECT mobile  FROM signup WHERE username = '".$user."'"); 
	$b=mysqli_fetch_array($m);
	echo $b[0];
	
	?>">
	
	</td>
	</tr>
	<tr>
	<td>
		charges for selected items
	
		</td>
		<td>
		RS.
		<?php 
		echo $tot;
		?>
		/-
		</td>
		</tr>
	<caption><i>your order details</i></caption>
	</table><br>
	you will receive your food within 30minutes!
	<br>
	enter  your mobile number and address correctly

	<br>
	<input type="submit" value="done">
</form>
</center>
</html>