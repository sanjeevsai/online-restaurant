<?php


$link = mysqli_connect("localhost","root","","sanjeev");
 

if($link == false)
	{
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	 

	$username = $_POST["username"];
	$mobile = mysqli_real_escape_string($link, $_REQUEST['mobile']);
	$email = mysqli_real_escape_string($link, $_REQUEST['email']);
	$password = mysqli_real_escape_string($link, $_REQUEST['password']);
	$cpassword = mysqli_real_escape_string($link, $_REQUEST['cpassword']);
	$sql=0;


	

	$a="SELECT username FROM signup WHERE username = '".$username."'";
	$b="SELECT email FROM signup WHERE email = '".$email."'";
	$c="SELECT mobile FROM signup WHERE mobile = '".$mobile."'";

	$result1 = mysqli_query($link,$a);
	$result2 = mysqli_query($link,$b);
	$result3 = mysqli_query($link,$c);

	$user=mysqli_num_rows($result1);
	$em=mysqli_num_rows($result2);
	$m=mysqli_num_rows($result3);
	
	echo"<br><br><br><br><br><br><br><br><br><br><br>";
  
if($user!=0)	
	{
	echo "<center>sorry,the username is already taken</center>";
	}


if($em!=0)
	{
	echo "<center>sorry,the email id you entered is already taken</center>";
	}


if($m!=0)
	{
	echo "<center>sorry,the mobile number is already registered</center>";
	}
	
	
if($password != $cpassword)
	{
		echo"<center>your two passwords dont match</center>";

	}
else 
	$sql = "INSERT INTO signup (username , mobile , email , password ) VALUES ('$username', '$mobile', '$email', '$password')";

if(mysqli_query($link, $sql))
	{		
	sleep(2);
	header("location:mainpage.html");
	}
	
else 
	{
		echo"<center>please try again";
		echo"<br>";
		echo"<br>";
		echo"<input type='button' value='back to homepage' onclick='back()'>";
		
		echo"
		<script>
		function back()
		{
			window.history.back();
		}
		</script>
		";
		
	}

	
mysqli_close($link);


?>


