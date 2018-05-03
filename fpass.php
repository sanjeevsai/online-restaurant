<?php

session_start();

$conn=mysqli_connect("localhost","root","","sanjeev");

if($conn==false)
	echo "connection refused";


$user=$_POST["username"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];

$a=mysqli_query($conn,"SELECT username, mobile,email,password FROM signup WHERE username = '".$user."' AND  mobile = '".$mobile."' and email='".$email."'");
if(mysqli_num_rows($a)>0)
{	$b=mysqli_fetch_array($a);
		echo"<i><b><br><br><br><br><br><br>";
		echo"<center><br><br><br> your account login details are:<br>";
		echo"username:".$b[0]."<br>";
		echo"mobile:".$b[1]."<br>";
		echo"email:".$b[2]."<br><br><br>";
		echo" your password is:".$b[3]."<br>";
		
}
else
	echo"<br><center>sorry , no information is found<br>please check the values and try again";

