<?php
	session_start();
	$_SESSION['id']=$_SESSION['id'];
	
	
	if(isset($_POST['logout']))
	{
		header("Location:HomePage.php");
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
		header("Location:electronics.php");
	}
	else if(isset($_POST['mensfashion']))
	{
		header("Location:mens.php");
	}
	else if(isset($_POST['womensfashion']))
	{
		header("Location:womens.php");
	}
	else if(isset($_POST['sports']))
	{
		header("Location:sports.php");
	}
	else if(isset($_POST['bkashgo']))
	{
		header("Location:CompleteOrder.php");
	}
	else if(isset($_POST['customeraccount']))
	{
		header("Location:CustomerAccount.php");
	}
	else if(!isset($_SESSION['id']))
	{
		header("Location:SignIn.php");
	}
	

?>

<html>
<head>
	<title>bkash</title>
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
			</nav><br>

		<table>
			<tr>
				<td align="center" colspan="2">
					<img src="images/bkash.png" style="width:1000px; height:300px;">
					<font color="red"><h1>Payment with Bkash</h1></font>
				</td>

				<td>
					
				</td>
			</tr>

			<tr>
				<td>
					<fieldset>
						<legend><h2>Bkash</h2></legend>

				            
				                Enter Your Bkash Account Number: &nbsp<input type="text" name="number" placeholder="01*********"> <br/> <br/>
				            
				            
				                Bkash pin: &nbsp<input type="text" name="pin" placeholder="pin"> &nbsp
				          
				                <input type="submit" name="submit" value="Enter">
								<br/>
								<br/>
				            
				        	Enter Your Bkash Verification Code: &nbsp<input type="text" name="number" placeholder="verification code"> &nbsp
				        	<input type="submit" name="bkashgo" value="GO"/>

					</fieldset>
				</td>
			</tr>

		</table>

		<footer>
			<div style="background:#222222; height:50px;" align="center">
				<p><font color="white">&copy; Copyright | DealMart.com</font></p>
			</div>
		</footer>
	</form>	
</body>
</html>