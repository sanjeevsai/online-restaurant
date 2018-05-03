<?php

$link = mysqli_connect("localhost","root","","sanjeev"); 

if($link === false)
	{
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
 
 $data=mysqli_query($link,"select * from img");

while($row=mysqli_fetch_array($data))
{
?> <img src=" <?php echo $row["img"]; ?>" width="100" height="100">	
<?php

		echo $row[0];
}	

?> 
<input type="hidden" value="dlsjadlsa">