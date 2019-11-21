<?php
	
	if(isset($_POST['adminaccount']))
	{
		header("Location:AdminAccount.php");
		
	}
	else if(isset($_POST['logout']))
	{
		header("Location:HomePage.php");
	}
	else if(isset($_POST['search']))
	{
		header("Location:Search.php");
	}
	else if(isset($_POST['electronics']))
	{
		header("Location:electronics/electronics.php");
	}
	else if(isset($_POST['mensfashion']))
	{
		header("Location:mens/mens.php");
	}
	else if(isset($_POST['womensfashion']))
	{
		header("Location:womens/womens.php");
	}
	else if(isset($_POST['sports']))
	{
		header("Location:sports/sports.php");
	}

?>

<html>
	<head>
	
		<title>Online Shoping in Bangladesh</title>
		
	</head>
	
	<body>
		
		<form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>">
		
			<header>
				<div style="background:#ccffff">
				
					&emsp;&emsp;<b><font color="#800000" size="10">DealMart.com</font></b>
					&emsp;&emsp;<img src="image/search.png" style="height:15px"/>
					<input type="text" style="height:20px; width:400px"/>
					<input type="submit" value="Search" name="search"/>
					&emsp;&emsp;&emsp;&emsp;
					<input type="submit" value="Admin Account" name="adminaccount">
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					<input type="submit" value="Logout" name="logout">
					
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
			</nav>
			
			<section>
				<div>
					<br/>
					<br/>
					
					<b><font color="#0198D8" size="6">ADMIN : </font></b>
					<br/>
					<br/>
					<br/>
					<br/>
					<b>Product Name : </b>
					<input type="text" name="productname"/>
					<br/>
					<br/>
					<b>Product Code : </b>
					<input type="text" name="productcode"/>
					<br/>
					<br/>
					<b>Price : </b>
					<input type="text" name="price"/>
					<br/>
					<br/>
					<b>Availibilty : </b>
					<input type="text" name="availibilty"/>
					<br/>
					<br/>
					<b>Condition : </b>
					<input type="text" name="condition"/>
					<br/>
					<br/>
					<b>Brand : </b>
					<input type="text" name="brand"/>
					<br/>
					<br/>
					<b>Materials : </b>
					<input type="text" name="materials"/>
					<br/>
					<br/>
					<b>Add Product Photo : </b>
					<input type="file" name="imag"/>
					<br/>
					<br/>
					<b>Product Catagory : </b>
					<select name="productcatagory">
						<option>Electronics</option>
						<option>Mens Fashion</option>
						<option>Womens Fashion</option>
						<option>Sports</option>
					</select>
					<br/>
					<br/>
					<input type="submit" value="Add Product" name="addproduct"/>
					&emsp;&emsp;
					<input type="submit" value="Update Product" name="updateproduct"/>
					&emsp;&emsp;
					<input type="submit" value="Delete Product" name="deleteproduct"/>
				</div>
			</section>
			
			<footer>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<div style="background:#222222; height:50px;" align="center">
					<p><font color="white">&copy; Copyright | DealMart.com</font></p>
				</div>
			</footer>
			
		</form>
	</body>
</html>