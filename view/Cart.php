<?php

	session_start();
	include_once("controller/service.php");
	
	$customerId=$_SESSION['id'];
	$_SESSION['id']=$_SESSION['id'];
	
	$totalPrice=0;
	
	$cartProducts=getAllCartProducts();
	
	if(isset($_POST['checkout']))
	{
		header("Location:PaymentMethod.php");
	}
	else if(isset($_POST['signin']))
	{
		header("Location:SignIn.php");
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
	else if(isset($_POST['customeraccount']))
	{
		header("Location:CustomerAccount.php");
	}
	else if(isset($_POST['logout']))
	{
		header("Location:Logout.php");
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
				&emsp;&emsp;<img src="image/search.png" style="height:15px"/>
				<input type="text" style="height:20px; width:400px"/>
				<input type="submit" value="Search" name="search">
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
		<br><br/><br/><br/>

			<table align="center" border="1px" style="width:1000px;">
			<tr>
				<th>Product Image</th>
				<th>Product Name</th>
				<th>Product Price</th>
				<th>Operation</th>
			</tr>
			<?php
				foreach($cartProducts as $product)
				{
					if($product['customerid']==$customerId)
					{
						$totalPrice=$totalPrice+$product['productprice'];
				?>		
						<tr align="center">
							<td><?php echo "<img src='images/".$product['productimage']."' style='height:100px; width:100px;'/>"; ?></td>
							<td><?php echo $product['productname']; ?></td>
							<td><?php echo $product['productprice']; ?></td>
							<td>
								<?php
								$productId=$product['id'];
								?>
								<a href="DeleteCartProduct.php?uid=<?=$productId;?>">Delete</a>
							</td>
						</tr>
			<?php	
					}			
				}
			?>	
			
		</table>

					<table align="center" width="300" bgcolor="#b3e6ff">
						<tr>
							<td align="center">
								
								<p>Shipping Cost:</p>
								<p>Total:</p>
							
							</td>
							<td align="center">
								<p>50</p>
								<p><?=$totalPrice+50;?></p>
							</td>
						</tr>
						<tr>
							<td align="center" colspan="2">
								<br/>
								<input type="submit" name="checkout" value="Checkout" style="Height:40px; width:100px; background:red; color:white;">
							</td>
						</tr>
					</table>
					<br/>
				

			<footer>
				<div style="background:#222222; height:50px;" align="center">
					<p><font color="white">&copy; Copyright | MyShop.com</font></p>
				</div>
			</footer>
		</form>
    </body>		
 </html>
