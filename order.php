

<?php
		session_start();
			
		$link = mysqli_connect("localhost","root","","sanjeev"); 
	
	$user=$_SESSION['name'];
	
	if (isset($_POST['1']))
	{
			$name=$_POST["KakoriKebabs"];
			$x=mysqli_query($link,"select price,type from menu where itemname='$name'");
			if($name)
			{
				$print=mysqli_fetch_array($x);
				$query="insert into orders(cname,itemname,price,type) values('$user','$name','$print[0]','$print[1]')";
				mysqli_query($link,$query);
				echo "<script type='text/javascript'>alert('YOU ORDER WAS SUCCCESSFUL.YOU CAN ORDER MORE ITEMS');</script>";
				echo" <script>window.history.back();</script>";
			}
	}
	
	if (isset($_POST['2']))
	{
	$name=$_POST["StirFriedChilliChicken"];
	$x=mysqli_query($link,"select price,type from menu where itemname='$name'");
	if($name)
	{
		$print=mysqli_fetch_array($x);
		$query="insert into orders values('$user','$name','$print[0]','$print[1]')";
		mysqli_query($link,$query);
				echo "<script type='text/javascript'>alert('YOU ORDER WAS SUCCCESSFUL.YOU CAN ORDER MORE ITEMS');</script>";
				echo" <script>window.history.back();</script>";	
		}
	}

	
	
	if (isset($_POST['3']))
	{
			$name=$_POST["MicrowavePaneerTikkas"];
			$x=mysqli_query($link,"select price,type from menu where itemname='$name'");
			if($name)
			{
				$print=mysqli_fetch_array($x);
				$query="insert into orders values('$user','$name','$print[0]','$print[1]')";
				mysqli_query($link,$query);
				echo "<script type='text/javascript'>alert('YOU ORDER WAS SUCCCESSFUL.YOU CAN ORDER MORE ITEMS');</script>";
				echo" <script>window.history.back();</script>";
			
			}
	}
	
	
	
	
	if (isset($_POST['4']))
	{
			$name=$_POST["AlooandDalkiTikki"];
			$x=mysqli_query($link,"select price,type from menu where itemname='$name'");
			if($name)
			{
				$print=mysqli_fetch_array($x);
				$query="insert into orders values('$user','$name','$print[0]','$print[1]')";
				mysqli_query($link,$query);
				echo "<script type='text/javascript'>alert('YOU ORDER WAS SUCCCESSFUL.YOU CAN ORDER MORE ITEMS');</script>";
				echo" <script>window.history.back();</script>";
			
			}
	}
	
	if (isset($_POST['5']))
	{
			$name=$_POST["CheeseBalls"];
			$x=mysqli_query($link,"select price,type from menu where itemname='$name'");
			if($name)
			{
				$print=mysqli_fetch_array($x);
				$query="insert into orders values('$user','$name','$print[0]','$print[1]')";
				mysqli_query($link,$query);
				echo "<script type='text/javascript'>alert('YOU ORDER WAS SUCCCESSFUL.YOU CAN ORDER MORE ITEMS');</script>";
				echo" <script>window.history.back();</script>";
			
			}
	}
	
	
	if (isset($_POST['6']))
	{
			$name=$_POST["ChickenSatay"];
			$x=mysqli_query($link,"select price,type from menu where itemname='$name'");
			if($name)
			{
				$print=mysqli_fetch_array($x);
				$query="insert into orders values('$user','$name','$print[0]','$print[1]')";
				mysqli_query($link,$query);
				echo "<script type='text/javascript'>alert('YOU ORDER WAS SUCCCESSFUL.YOU CAN ORDER MORE ITEMS');</script>";
				echo" <script>window.history.back();</script>";
			
			}
	}
	
	if (isset($_POST['7']))
	{
			$name=$_POST["HotBasilChickenCups"];
			$x=mysqli_query($link,"select price,type from menu where itemname='$name'");
			if($name)
			{
				$print=mysqli_fetch_array($x);
				$query="insert into orders values('$user','$name','$print[0]','$print[1]')";
				mysqli_query($link,$query);
echo "<script type='text/javascript'>alert('YOU ORDER WAS SUCCCESSFUL.YOU CAN ORDER MORE ITEMS');</script>";
				echo" <script>window.history.back();</script>";
			
			}
	}
	
	if (isset($_POST['8']))
	{
			$name=$_POST["CrumbFriedChicken"];
			$x=mysqli_query($link,"select price,type from menu where itemname='$name'");
			if($name)
			{
				$print=mysqli_fetch_array($x);
				$query="insert into orders values('$user','$name','$print[0]','$print[1]')";
				mysqli_query($link,$query);
echo "<script type='text/javascript'>alert('YOU ORDER WAS SUCCCESSFUL.YOU CAN ORDER MORE ITEMS');</script>";
				echo" <script>window.history.back();</script>";
			
			}
	}
	
	
	
	if (isset($_POST['9']))
	{
			$name=$_POST["VegetableLasagne"];
			$x=mysqli_query($link,"select price,type from menu where itemname='$name'");
			if($name)
			{
				$print=mysqli_fetch_array($x);
				$query="insert into orders values('$user','$name','$print[0]','$print[1]')";
				mysqli_query($link,$query);
echo "<script type='text/javascript'>alert('YOU ORDER WAS SUCCCESSFUL.YOU CAN ORDER MORE ITEMS');</script>";
				echo" <script>window.history.back();</script>";			
			}
	}
	if (isset($_POST['10']))
	{
			$name=$_POST["SweetPotatoRice"];
			$x=mysqli_query($link,"select price,type from menu where itemname='$name'");
			if($name)
			{
				$print=mysqli_fetch_array($x);
				$query="insert into orders values('$user','$name','$print[0]','$print[1]')";
				mysqli_query($link,$query);
echo "<script type='text/javascript'>alert('YOU ORDER WAS SUCCCESSFUL.YOU CAN ORDER MORE ITEMS');</script>";
				echo" <script>window.history.back();</script>";			
			}
	}
	if (isset($_POST['11']))
	{
			$name=$_POST["TomatoPulao"];
			$x=mysqli_query($link,"select price,type from menu where itemname='$name'");
			if($name)
			{
				$print=mysqli_fetch_array($x);
				$query="insert into orders values('$user','$name','$print[0]','$print[1]')";
				mysqli_query($link,$query);
echo "<script type='text/javascript'>alert('YOU ORDER WAS SUCCCESSFUL.YOU CAN ORDER MORE ITEMS');</script>";
				echo" <script>window.history.back();</script>";
			
			}
	}
	if (isset($_POST['12']))
	{
			$name=$_POST["OliveParatha"];
			$x=mysqli_query($link,"select price,type from menu where itemname='$name'");
			if($name)
			{
				$print=mysqli_fetch_array($x);
				$query="insert into orders values('$user','$name','$print[0]','$print[1]')";
				mysqli_query($link,$query);
				echo "<script type='text/javascript'>alert('YOU ORDER WAS SUCCCESSFUL.YOU CAN ORDER MORE ITEMS');</script>";
				echo" <script>window.history.back();</script>";
			}
	}
	if (isset($_POST['13']))
	{
			$name=$_POST["CholeBhature"];
			$x=mysqli_query($link,"select price,type from menu where itemname='$name'");
			if($name)
			{
				$print=mysqli_fetch_array($x);
				$query="insert into orders values('$user','$name','$print[0]','$print[1]')";
				mysqli_query($link,$query);
				echo "<script type='text/javascript'>alert('YOU ORDER WAS SUCCCESSFUL.YOU CAN ORDER MORE ITEMS');</script>";
				echo" <script>window.history.back();</script>";
			}
	}
	if (isset($_POST['14']))
	{
			$name=$_POST["ChickenDumBiryani"];
			$x=mysqli_query($link,"select price,type from menu where itemname='$name'");
			if($name)
			{
				$print=mysqli_fetch_array($x);
				$query="insert into orders values('$user','$name','$print[0]','$print[1]')";
				mysqli_query($link,$query);
				echo "<script type='text/javascript'>alert('YOU ORDER WAS SUCCCESSFUL.YOU CAN ORDER MORE ITEMS');</script>";
				echo" <script>window.history.back();</script>";
			
			}
	}
	if (isset($_POST['15']))
	{
			$name=$_POST["AloorDum"];
			$x=mysqli_query($link,"select price,type from menu where itemname='$name'");
			if($name)
			{
				$print=mysqli_fetch_array($x);
				$query="insert into orders values('$user','$name','$print[0]','$print[1]')";
				mysqli_query($link,$query);
echo "<script type='text/javascript'>alert('YOU ORDER WAS SUCCCESSFUL.YOU CAN ORDER MORE ITEMS');</script>";
				echo" <script>window.history.back();</script>";
			
			}
	}
	if (isset($_POST['16']))
	{
			$name=$_POST["noodles"];
			$x=mysqli_query($link,"select price,type from menu where itemname='$name'");
			if($name)
			{
				$print=mysqli_fetch_array($x);
				$query="insert into orders values('$user','$name','$print[0]','$print[1]')";
				mysqli_query($link,$query);
echo "<script type='text/javascript'>alert('YOU ORDER WAS SUCCCESSFUL.YOU CAN ORDER MORE ITEMS');</script>";
				echo" <script>window.history.back();</script>";
			
			}
	}
	
	if (isset($_POST['17']))
	{
			$name=$_POST["ChocolateIceCream"];
			$x=mysqli_query($link,"select price,type from menu where itemname='$name'");
			if($name)
			{
				$print=mysqli_fetch_array($x);
				$query="insert into orders values('$user','$name','$print[0]','$print[1]')";
				mysqli_query($link,$query);
echo "<script type='text/javascript'>alert('YOU ORDER WAS SUCCCESSFUL.YOU CAN ORDER MORE ITEMS');</script>";
				echo" <script>window.history.back();</script>";
			
			}
	}if (isset($_POST['18']))
	{
			$name=$_POST["MasalaChaiIceCream"];
			$x=mysqli_query($link,"select price,type from menu where itemname='$name'");
			if($name)
			{
				$print=mysqli_fetch_array($x);
				$query="insert into orders values('$user','$name','$print[0]','$print[1]')";
				mysqli_query($link,$query);
				echo "<script type='text/javascript'>alert('YOU ORDER WAS SUCCCESSFUL.YOU CAN ORDER MORE ITEMS');</script>";
				echo" <script>window.history.back();</script>";
			
			}
	}if (isset($_POST['19']))
	{
			$name=$_POST["MangoIceCream"];
			$x=mysqli_query($link,"select price,type from menu where itemname='$name'");
			if($name)
			{
				$print=mysqli_fetch_array($x);
				$query="insert into orders values('$user','$name','$print[0]','$print[1]')";
				mysqli_query($link,$query);
echo "<script type='text/javascript'>alert('YOU ORDER WAS SUCCCESSFUL.YOU CAN ORDER MORE ITEMS');</script>";
				echo" <script>window.history.back();</script>";
			
			}
	}if (isset($_POST['20']))
	{
			$name=$_POST["VanillaIceCream"];
			$x=mysqli_query($link,"select price,type from menu where itemname='$name'");
			if($name)
			{
				$print=mysqli_fetch_array($x);
				$query="insert into orders values('$user','$name','$print[0]','$print[1]')";
				mysqli_query($link,$query);
echo "<script type='text/javascript'>alert('YOU ORDER WAS SUCCCESSFUL.YOU CAN ORDER MORE ITEMS');</script>";
				echo" <script>window.history.back();</script>";
			
			}
	}if (isset($_POST['21']))
	{
			$name=$_POST["ApricotIcecream"];
			$x=mysqli_query($link,"select price,type from menu where itemname='$name'");
			if($name)
			{
				$print=mysqli_fetch_array($x);
				$query="insert into orders values('$user','$name','$print[0]','$print[1]')";
				mysqli_query($link,$query);
echo "<script type='text/javascript'>alert('YOU ORDER WAS SUCCCESSFUL.YOU CAN ORDER MORE ITEMS');</script>";
				echo" <script>window.history.back();</script>";
			
			}
	}
	if (isset($_POST['22']))
	{
			$name=$_POST["CerealMilkIce-Cream"];
			$x=mysqli_query($link,"select price,type from menu where itemname='$name'");
			if($name)
			{
				$print=mysqli_fetch_array($x);
				$query="insert into orders values('$user','$name','$print[0]','$print[1]')";
				mysqli_query($link,$query);
echo "<script type='text/javascript'>alert('YOU ORDER WAS SUCCCESSFUL.YOU CAN ORDER MORE ITEMS');</script>";
				echo" <script>window.history.back();</script>";
			
			}
	}if (isset($_POST['23']))
	{
			$name=$_POST["JamunMintPopsicles"];
			$x=mysqli_query($link,"select price,type from menu where itemname='$name'");
			if($name)
			{
				$print=mysqli_fetch_array($x);
				$query="insert into orders values('$user','$name','$print[0]','$print[1]')";
				mysqli_query($link,$query);
		
echo "<script type='text/javascript'>alert('YOU ORDER WAS SUCCCESSFUL.YOU CAN ORDER MORE ITEMS');</script>";
				echo" <script>window.history.back();</script>";
			
			}
	}
	
	if (isset($_POST['24']))
	{
			$name=$_POST["MangoandCoconut"];
			$x=mysqli_query($link,"select price,type from menu where itemname='$name'");
			if($name)
			{
				$print=mysqli_fetch_array($x);
				$query="insert into orders values('$user','$name','$print[0]','$print[1]')";
				mysqli_query($link,$query);
		
echo "<script type='text/javascript'>alert('YOU ORDER WAS SUCCCESSFUL.YOU CAN ORDER MORE ITEMS');</script>";
				echo" <script>window.history.back();</script>";
			
			}
	}
	
	
	if (isset($_POST['25']))
	{
			$name=$_POST["WatermelonandMintJuice"];
			$x=mysqli_query($link,"select price,type from menu where itemname='$name'");
			if($name)
			{
				$print=mysqli_fetch_array($x);
				$query="insert into orders values('$user','$name','$print[0]','$print[1]')";
				mysqli_query($link,$query);
		
echo "<script type='text/javascript'>alert('YOU ORDER WAS SUCCCESSFUL.YOU CAN ORDER MORE ITEMS');</script>";
				echo" <script>window.history.back();</script>";
			
			}
	}
	
	
	
	if (isset($_POST['26']))
	{
			$name=$_POST["CoolKiwiJuice"];
			$x=mysqli_query($link,"select price,type from menu where itemname='$name'");
			if($name)
			{
				$print=mysqli_fetch_array($x);
				$query="insert into orders values('$user','$name','$print[0]','$print[1]')";
				mysqli_query($link,$query);
		
echo "<script type='text/javascript'>alert('YOU ORDER WAS SUCCCESSFUL.YOU CAN ORDER MORE ITEMS');</script>";
				echo" <script>window.history.back();</script>";
			
			}
	}
	
	
	
	if (isset($_POST['27']))
	{
			$name=$_POST["mangojuice"];
			$x=mysqli_query($link,"select price,type from menu where itemname='$name'");
			if($name)
			{
				$print=mysqli_fetch_array($x);
				$query="insert into orders values('$user','$name','$print[0]','$print[1]')";
				mysqli_query($link,$query);
		
echo "<script type='text/javascript'>alert('YOU ORDER WAS SUCCCESSFUL.YOU CAN ORDER MORE ITEMS');</script>";
				echo" <script>window.history.back();</script>";
			
			}
	}
	
	
	
	if (isset($_POST['28']))
	{
			$name=$_POST["pineapplejuice"];
			$x=mysqli_query($link,"select price,type from menu where itemname='$name'");
			if($name)
			{
				$print=mysqli_fetch_array($x);
				$query="insert into orders values('$user','$name','$print[0]','$print[1]')";
				mysqli_query($link,$query);
		
echo "<script type='text/javascript'>alert('YOU ORDER WAS SUCCCESSFUL.YOU CAN ORDER MORE ITEMS');</script>";
				echo" <script>window.history.back();</script>";
			
			}
	}
	
	
	
	if (isset($_POST['29']))
	{
			$name=$_POST["LycheeandDillJuice"];
			$x=mysqli_query($link,"select price,type from menu where itemname='$name'");
			if($name)
			{
				$print=mysqli_fetch_array($x);
				$query="insert into orders values('$user','$name','$print[0]','$print[1]')";
				mysqli_query($link,$query);
		
echo "<script type='text/javascript'>alert('YOU ORDER WAS SUCCCESSFUL.YOU CAN ORDER MORE ITEMS');</script>";
				echo" <script>window.history.back();</script>";
			
			}
	}
	
	
	
	if (isset($_POST['30']))
	{
			$name=$_POST["BerryKhatta"];
			$x=mysqli_query($link,"select price,type from menu where itemname='$name'");
			if($name)
			{
				$print=mysqli_fetch_array($x);
				$query="insert into orders values('$user','$name','$print[0]','$print[1]')";
				mysqli_query($link,$query);
		
echo "<script type='text/javascript'>alert('YOU ORDER WAS SUCCCESSFUL.YOU CAN ORDER MORE ITEMS');</script>";
				echo" <script>window.history.back();</script>";
			
			}
	}
	
	
	
	if (isset($_POST['31']))
	{
			$name=$_POST["VirginPunch"];
			$x=mysqli_query($link,"select price,type from menu where itemname='$name'");
			if($name)
			{
				$print=mysqli_fetch_array($x);
				$query="insert into orders values('$user','$name','$print[0]','$print[1]')";
				mysqli_query($link,$query);
		
echo "<script type='text/javascript'>alert('YOU ORDER WAS SUCCCESSFUL.YOU CAN ORDER MORE ITEMS');</script>";
				echo" <script>window.history.back();</script>";
			
			}
	}
	
	
	
	if (isset($_POST['32']))
	{
			$name=$_POST["GrapeNectar"];
			$x=mysqli_query($link,"select price,type from menu where itemname='$name'");
			if($name)
			{
				$print=mysqli_fetch_array($x);
				$query="insert into orders values('$user','$name','$print[0]','$print[1]')";
				mysqli_query($link,$query);
		
echo "<script type='text/javascript'>alert('YOU ORDER WAS SUCCCESSFUL.YOU CAN ORDER MORE ITEMS');</script>";
				echo" <script>window.history.back();</script>";
			
			}
	}
	
?>
	