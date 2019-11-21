<?php

	if(isset($_POST['signin']))
	{
		header("Location:../SignIn.php");
	}
	else if(isset($_POST['needhelp']))
	{
		header("Location:../Contact.php");
	}
	else if(isset($_POST['cart']))
	{
		header("Location:../Cart.php");
	}
	else if(isset($_POST['search']))
	{
		header("Location:../Search.php");
	}
	else if(isset($_POST['electronics']))
	{
		header("Location:../electronics/electronics.php");
	}
	else if(isset($_POST['mensfashion']))
	{
		header("Location:mens.php");
	}
	else if(isset($_POST['womensfashion']))
	{
		header("Location:../womens/womens.php");
	}
	else if(isset($_POST['sports']))
	{
		header("Location:../sports/sports.php");
	}

?>

<html>
	<head>
	
		<title>DealMart|Men's</title>
		
	</head>
	
	<body>
		<form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>">
		<header>
			<div style="background:#ccffff">
						
				&emsp;&emsp;<b><font color="#800000" size="10">DealMart.com</font></b>
				&emsp;&emsp;<img src="image/search.png" style="height:15px"/>
				<input type="text" style="height:20px; width:400px"/>
				<input type="submit" value="Search" name="search">
				&emsp;&emsp;&emsp;&emsp;
				<input type="submit" value="Sign In" name="signin">&emsp;
				<input type="submit" value="Need Help" name="needhelp">&emsp;
				<input type="submit" value="Cart" name="cart">
							
			</div>
		</header>
			
		<nav>
			<div style="background:#0198D1; height:50px;">
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				<input type="submit" value="Electronics" name="electronics" style="background:#0198D1; height:50px; color:white"/>
				&emsp;
				<input type="submit" value="Mens Fashion" name="mensfashion" style="background:#0198D1; height:50px; color:white"/>
				&emsp;
				<input type="submit" value="Womens Fashion" name="womensfashion" style="background:#0198D1; height:50px; color:white"/>
				&emsp;
				<input type="submit" value="Sports" name="sports" style="background:#0198D1; height:50px; color:white"/>		
			</div>
		</nav><br>
		
		<div align="center">
			<img src="gm.jpeg" >
			<p><i><b>New Arrival</b></i></p>
			<h2>Mens Polo T-Shirt</h2>
			<p>Product Code: HERI35</p>
			<p><b>Bdt: 1750 Tk</b></p>
			<p><b>Availibilty:</b> In Stock</p>
			<p><b>Condition:</b> Band New</p>
			<p><b>Brand:</b> H&M</p>
			<p><b>Materials:</b> 99.1% Cotton and .9% Polyster</p>
			<label>Quantity:</label>
			<input type="text" value="1">
			<input type="button" value="Add to cart">
		</div>
		<section>
			<div>
				<h4>Product Description:</h4>
				<p>This T-Shirt will give you the day long comfortability. Its made of pure 99.1% Cotton and .9% Polyster, that will ensure the air passing perfectly into body. Its very easy to wash and iron. Four different colors are available: Red, Blue, Green, Sky Blue. From five differrent sizes you can choose your perfect size that will suit in your body perfectly. </p>
			</div>
			
		</section>
	
		
		<footer>
			<div style="background:#222222; height:50px;" align="center">
				<p><font color="white">&copy; Copyright | DealMart.com</font></p>
			</div>
		</footer>
		</form>
	</body>
		
		
</html>