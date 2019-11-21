<?php
	
	if(isset($_POST['customeraccount']))
	{
		header("Location:CustomerAccount.php");
		
	}
	else if(isset($_POST['changepassword']))
	{
		header("Location:EditCustomerAccount.php");
	}
	else if(isset($_POST['changeaddress']))
	{
		header("Location:EditCustomerAccount.php");
	}
	else if(isset($_POST['logout']))
	{
		header("Location:HomePage.php");
	}
	else if(isset($_POST['gopayment']))
	{
		$method=$_POST['paymentmethod'];
		if($method=="Cash On Delivery")
		{
			header("Location:CompleteOrder.php");
		}
		else if($method=="bKash")
		{
			header("Location:PaymentBkash.php");
		}
		
	}
	else if(isset($_POST['needhelp']))
	{
		header("Location:Contact.php");
	}
	else if(isset($_POST['cart']))
	{
		header("Location:Cart.php");
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
					<input type="submit" value="My Account" name="customeraccount">&emsp;
					<input type="submit" value="Need Help" name="needhelp">&emsp;
					<input type="submit" value="Cart" name="cart">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
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
					
					<b><font color="#0198D8" size="6">Payment Method</font></b>
					<br/>
					<br/>
					<input type="radio" value="Cash On Delivery" name="paymentmethod"/>Cash On Delivery
					<br/>
					<br/>
					<input type="radio" value="bKash" name="paymentmethod"/>bKash
					<br/>
					<br/>
					<input type="submit" value="Go" name="gopayment"/>
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