<?php
session_start();
$link = mysqli_connect("localhost","root","","sanjeev"); 

if($link == false)
	{
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
 
	$a= $_POST["username"];
	$b=$_POST["password"];
 
 
if(isset ($a,$b)) 
    {     

        $username = $_POST["username"]; 
        $password = $_POST["password"]; 

        $result1 = mysqli_query($link,"SELECT username, password FROM signup WHERE username = '".$username."' AND  password = '".$password."'");

        if(mysqli_num_rows($result1) > 0 )
        { 
            $_SESSION["logged_in"] = true; 
            $_SESSION["name"] = $username; 
			
			header("location:logout.php");
		
		
		}
        else
        {	
				session_destroy();
            echo 'The username or password are incorrect!';
        }
	}
	

?>