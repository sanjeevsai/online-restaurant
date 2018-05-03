<?php

session_start();
?>

<html>
		<link rel="stylesheet" href="menu.css">
		<head>
				<script src="scroll.js"> 
				</script>
		<div class="heading">
						 <i>
						 <?php 
						 
								if(isset($_SESSION['name']))
								 echo $_SESSION['name']; 
								else
								echo "login and try again";
						 ?>
						 ,choose your delicious items.
						</i>
		</div>
				<!--............................head end........................	-->		 
		</head>

		<body id="head">
		
		<div class="nav">
			<!-- ...................................nav start......................................-->
		<div class="menu"><i>MENU</i>
							<div class="hidden">		
						
								<a href="#" onclick="return false;" onmousedown="scrollingeffect('starterpage');" >STARTERS</a><br /><br />
								<a href="#" onclick="return false;" onmousedown="scrollingeffect('maindishespage');">MAIN DISHES</a><br /><br />
								<a href="#" onclick="return false;" onmousedown="scrollingeffect('ice-creams');">ICE CREAMS</a><br /><br />
								<a href="#" onclick="return false;" onmousedown="scrollingeffect('juice');">BEVERAGES</a><br /><br />
							</div>
		</div>
		<input type="button" value="LOGOUT" onclick="logout()">	
							<div class="select"><i>SELECT BY</i>
							
								<div class="selectby">
								<a href="region.php">REGION</a>	<br><br>
								<a href="popularity.php">POPULARITY</a>	<br><br>
								<a href="logout.php">RATING</a>	<br><br>
								<a href="spicy.php">SPICY</a>	<br><br>
								
								
									
												
								</div>
							</div>
		
		
					<div class="myacc"><i><a href="myaccdetails.php">MY ACCOUNT</a></i>
					</div>
		
					
					<div class="myorders"><i><a href="myorders.php">MY ORDERS</a></i>
					</div>
		
				<div class="pic">
				<img src="pics/navigationfood.jpg"width="100" height="85">
				</div>	
		
		</div>
		
		
		<!--.................................nav end.........................-->
		
		
				<div class="after-nav">
					<br/><br/><br/>
						
						<div id="starterpage" class="starters" >
						
						<div class="instarters" >
						<h1 align="center"	>STARTERS</h1>
														
								<?php
										
									$link = mysqli_connect("localhost","root","","sanjeev"); 
								
									if($link === false)
										{
											die("ERROR: Could not connect. " . mysqli_connect_error());
										}
							 
							 $data=mysqli_query($link,"select itemname,price,rating,img,name,id from menu where type='starters' order by rating desc");
								echo"<form action='order.php' method='post'>";
								echo"<table>";
								echo"<tr>";
							$count=1;
								
							while($row=mysqli_fetch_array($data))
							{		
									if($count%3!=0)
									{
								echo"<td>";

									?>     
							<img src=" 
							<?php 
							echo $row[3]; 
							?>  " width="300" height="300"> </td><td>	

							<i>
									ITEM NAME:<input style="font-family:italics; width:300;" type="text" value="<?php echo $row[0]; ?> " name="<?php echo	 $row[4];?>"><BR>
									ITEM PRICE:<input type= "text" value=" <?php echo $row[1]; ?> RS" name="<?php echo $row[1]; ?>">
									<br>RATING:<input type= "text" value=" <?php echo $row[2]; ?>" name="<?php echo $row[2]; ?>">
								</i>	
									<input type="submit"name="<?php echo $row[5];?>" value="ADD" >
									
									<?php
									echo"</td>";
									$count=$count+1;
									}
									
									if($count%3==0)
									{
									echo "</tr>";
									echo "<tr>";
									$count=$count+1;
									echo"</tr><tr  height='400'> <br><br>";
									
									}
								
							}	
								$_SESSION["order"]=$row;	
							?> 
									</tr>
									</table></form>
									
								
							</div>
							
						</div>
				
				
				<a href="#" onclick="return false;" onmousedown="goback('head');"><h5 align="center">TOP</h5></a>
				
				
				
				
				<div id="maindishespage"class="maindishes">
				
						<div ><h1 align="center"	>	MAIN DISHES</h1>
														
								<?php

							
							 $data=mysqli_query($link,"select itemname,price,rating,img,name,id from menu where type='main dish' order by rating desc");
								echo"<form action='order.php' method='post'>";
								echo"<table>";
								echo"<tr>";
							$count=1;
							while($row=mysqli_fetch_array($data))
							{
									if($count%3!=0)
									{
								echo"<td>";

							?> 
							<img src=" <?php echo $row[3]; ?>" width="300" height="300"> </td><td>	
							<i>
									ITEM NAME:<input type="text" value="<?php echo $row[0]; ?>" name=" <?php echo $row[4];?>"><BR>
									ITEM PRICE:<input type= "text" value="RS <?php echo $row[1]; ?> " name="<?php echo $row[1]; ?>">
								<br>RATING:<input type= "text" value=" <?php echo $row[2]; ?>" name="<?php echo $row[2]; ?>">
									<input type="submit"name="<?php echo $row[5];?>" value="ADD" >
								</i>
									<?php
									echo"</td>";
									$count=$count+1;
									}
									
									if($count%3==0)
									{
									echo "</tr>";
									echo "<tr>";
									$count=$count+1;
									echo"</tr><tr  height='400'><br><br>";
									
									}
								
							}	
									
							?> 
									</tr>
									</table></form>
									
								
							</div>
				
				</div>
	<a href="#" onclick="return false;" onmousedown="goback('head');"><H5 ALIGN="CENTER">TOP</H5></a>

				
				
				
				
				<div id="ice-creams" class="icecream">
				<h1 align="center"	>ICE CREAMS</h1>
				

				
						<?php

											
							 $data=mysqli_query($link,"select itemname,price,rating,img,name,id from menu where type='desert' order by rating desc");
								echo"<form action='order.php' method='post'>";
								echo"<table>";
								echo"<tr>";
							$count=1;
							while($row=mysqli_fetch_array($data))
							{
									if($count%3!=0)
									{
								echo"<td>";

							?> 
							<img src=" <?php echo $row[3]; ?>" width="300" height="300"> </td><td>	
							<i>
									ITEM NAME:<input type="text" style="width:300;" value="<?php echo $row[0]; ?>" name=" <?php echo $row[4];?>"><BR>
									ITEM PRICE:<input type= "text" value=" <?php echo $row[1]; ?> RS" name="<?php echo $row[1]; ?>">
									<br>RATING:<input type= "text" value=" <?php echo $row[2]; ?>" name="<?php echo $row[2]; ?>">
								</i>	
									<input type="submit"name="<?php echo $row[5];?>" value="ADD" >
									<?php
									echo"</td>";
									$count=$count+1;
									}
									
									if($count%3==0)
									{
									echo "</tr>";
									echo "<tr>";
									$count=$count+1;
									echo"</tr><tr  height='400'><br><br>";
									
									}
								
							}	
									
							?> 
									</tr>
									</table></form>
							
				
				</div>
			

<a href="#" onclick="return false;" onmousedown="goback('head');"><h5 align="center">  TOP</h5></a>


				
				<div id="juice" class="fruitjuice">
					<h1 align="center">BEVERAGES</h1>
				
						<?php

											
							 $data=mysqli_query($link,"select itemname,price,rating,img,name,id from menu where type='cool drink' order by rating desc");
								echo"<form action='order.php' method='post'>";	
								echo"<table>";
								echo"<tr>";
							$count=1;
							while($row=mysqli_fetch_array($data))
							{
									if($count%3!=0)
									{
									echo"<td>";

							?> 
							<img src=" <?php echo $row[3]; ?>" width="300" height="300"> </td><td>	
							<i>
									ITEM NAME:<input type="text" style="width:300;" value="<?php echo $row[0]; ?>" name=" <?php echo $row[4];?>"><BR>
									ITEM PRICE:<input type= "text" value=" <?php echo $row[1]; ?> RS" name="<?php echo $row[1]; ?>">
									<br>RATING:<input type= "text" value=" <?php echo $row[2]; ?>" name="<?php echo $row[2]; ?>">
								</i>	
									<input type="submit"name="<?php echo $row[5];?>" value="ADD" >
									<?php
									echo"</td>";
									$count=$count+1;
									}
									
									if($count%3==0)
									{
									echo "</tr>";
									echo "<tr>";
									$count=$count+1;
									echo"</tr><tr  height='400'><br><br>";
									
									}
								
							}	
									
							?> 
									</tr>
									</table> 
									</form>
				
				</div>
				
				
				<a href="#" onclick="return false;" onmousedown="goback('head');"><h5 align="center">  TOP</h5></a>
				
			</div>
			
	</body>

 </html>