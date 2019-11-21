<?php

	session_start();
	include_once("controller/service.php");
	
	$adminId=$_SESSION['id'];
	$_SESSION['id']=$_SESSION['id'];
	
	
	$allHotProducts=getHotProducts();
	
	if(isset($_POST['search']))
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
	else if(isset($_POST['back']))
	{
		header("Location:AfterAdminLogin.php");
	}
	else if(isset($_POST['adminaccount']))
	{
		header("Location:AdminAccount.php");
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
		<br><br/><br/><br/>

			<table align="center" border="1px" style="width:1200px;">
			<tr>
				<th>Product Image</th>
				<th>Product Id</th>
				<th>Product Name</th>
				<th>Product Code</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Brand</th>
				<th>Materials</th>
				<th>Product Catagory</th>
				<th>Product Details</th>
				<th>Operation</th>
			</tr>
			<?php
				foreach($allHotProducts as $product)
				{
					
				?>		
						<tr align="center">
							<td><?php echo "<img src='images/".$product['productimage']."' style='height:80px; width:100px;'/>"; ?></td>
							<td><?php echo $product['productid']; ?></td>
							<td><?php echo $product['productname']; ?></td>
							<td><?php echo $product['productcode']; ?></td>
							<td><?php echo $product['price']; ?></td>
							<td><?php echo $product['quantity']; ?></td>
							<td><?php echo $product['brand']; ?></td>
							<td><?php echo $product['materials']; ?></td>
							<td><?php echo $product['productcatagory']; ?></td>
							<td><?php echo $product['productdetails']; ?></td>
							<td>
								<?php
								$productId=$product['productid'];
								?>
								
								<a href="DeleteHotProduct.php?uid=<?=$productId;?>">Delete</a>
							</td>
						</tr>
			<?php				
				}
			?>	
			
		</table>

					<table align="center" width="300" bgcolor="#b3e6ff">
						<tr>
							<td align="center" colspan="2">
								<br/>
								<input type="submit" name="back" value="Back" style="Height:40px; width:100px; background:red; color:white;">
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
