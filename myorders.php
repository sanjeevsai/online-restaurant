<html>

<center>
<script>
function myf()
{
		
	window.open("final.php","_self");
	
}

</script>


<div style="background:red; font-size:70;"   >
<i><b>
	eat healthy,be healthy</div>
	</i></b><i><b>you selected these items.</b></i>
		<div style="font-size:1;">
		
		<?php 
		
		
		session_start();
		$user=$_SESSION['name']; 
			$tot[0]=0;
		$link = mysqli_connect("localhost","root","","sanjeev"); 
		
		$order=mysqli_query($link,"select itemname,price,type from orders where cname='".$user."'");
			
			$num=mysqli_num_rows($order);
			echo $num;
			
			$_SESSION["numr"] = $num;
			
			echo "<table border='1'>";
			
			echo "<tr>";
			
				echo"<th> ITEM NAME:</th>";
				echo"<th> ITEM PRICE:(Rs.) </th>";
				echo"<th> ITEM TYPE:</th></tr><tr>";
			
			
			while($a=mysqli_fetch_array($order))
			{
				
			echo"<td>".$a[0]."</td>";
			echo "<td align='right'>".$a[1]."&nbsp;&nbsp; </td>";
			echo "<td>".$a[2]."</td></tr>";
			
			echo "<br>";
			}
			echo"<tr><td align='center' colspan='3'>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				total=";
			
		$sum=mysqli_query($link,"select sum(price) from orders where cname='".$user."'");
		$tot=mysqli_fetch_array($sum);
		
		echo "&nbsp;".$tot[0];
		$_SESSION["total"]=$tot[0];
		
		echo"</td></tr>";
			
			
			
			echo "</table>";
			
			?>
		
		<input type="button" value="DELETE ITEMS" onclick="document.getElementById('hide').style.display='block'">
		
		
	
		</div>
		
		
		<div style="display:none;" id="hide">
			<form action="" method="post" onsubmit="
			
			
			<?php
			if (isset($_POST['submit'])){
				$item=$_POST["item"];

			mysqli_query($link,"delete from orders where itemname='".$item."'");
			echo"successfully deleted.go back and order your favourite food";
			}
			?>">
			enter the item you want to delete	
			<input type="text" value="" name="item">
			<input type="submit" name="submit" value="delete">
			</form>
			
		
		</div>
		<br><br>
		
		<?php
		
		?>
		
		
		<br>
		
		you cannot cancel once you have confirmed your order 
<br>		
		
		<input type="button" value="confirm my order" onclick="myf()">
		
</center>

</html>