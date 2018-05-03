<?php

session_start();

$conn=mysqli_connect("localhost","root","","sanjeev");

if($conn==false)
	echo "connection refused";


 
		if(isset($_SESSION['name']))
			$user=$_SESSION['name'];

		else
		echo "login and try again";




$a=mysqli_query($conn,"SELECT *  FROM signup WHERE username = '".$user."'");
if(mysqli_num_rows($a)>0)
{	$b=mysqli_fetch_array($a);
		echo"<i><b><br><br><br><br><br><br>";
		echo"<center><br><br><br> your account  details are:<br>";
		echo"username:".$b[0]."<br>";
		echo"mobile:".$b[1]."<br>";
		echo"email:".$b[2]."<br>";
		echo" password:".$b[3]."<br>";
		
}
else
	echo"<br><center>sorry , no information is found<br>please check the values and try again";

?>
<html>
<form action="changedata.html">
<input type="submit" value="change">

</html>