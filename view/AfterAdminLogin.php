<?php
	
	session_start();
	$_SESSION['id']=$_SESSION['id'];
	
	
	if(isset($_POST['adminaccount']))
	{
		header("Location:AdminAccount.php");
		
	}
	else if(isset($_POST['logout']))
	{
		header("Location:Logout.php");
	}
	else if(isset($_POST['search']))
	{
		header("Location:Search.php");
	}
	else if(isset($_POST['electronics']))
	{
		header("Location:AdminElectronics.php");
	}
	else if(isset($_POST['mensfashion']))
	{
		header("Location:AdminMensFashion.php");
	}
	else if(isset($_POST['womensfashion']))
	{
		header("Location:AdminWomensFashion.php");
	}
	else if(isset($_POST['sports']))
	{
		header("Location:AdminSports.php");
	}
	else if(isset($_POST['addproduct']))
	{
		header("Location:AddProduct.php");
	}
	else if(isset($_POST['checkinventory']))
	{
		header("Location:CheckInventory.php");
	}
	else if(isset($_POST['viewhotdeals']))
	{
		header("Location:ViewHotDeals.php");
	}
	else if(!isset($_SESSION['id']))
	{
		header("Location:SignIn.php");
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
					
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
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
			
			<section style="margin-top:30px;">
				<div style="margin-left:545px;">
					<input type="submit" value="Add Product" name="addproduct" style="height:50px; width:200px; font-size:20px;"/>
				</div>
				<div style="margin-left:545px; margin-top:50px;">
					<input type="submit" value="Check Inventory" name="checkinventory" style="height:50px; width:200px; font-size:20px;"/>
				</div>
				<div style="margin-left:545px; margin-top:50px;">
					<input type="submit" value="View HotDeals" name="viewhotdeals" style="height:50px; width:200px; font-size:20px;"/>
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