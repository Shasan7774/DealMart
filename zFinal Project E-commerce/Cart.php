<?php

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
			<br/><br/><br/>

			<table align="center" width="800" bgcolor="#ffff80">
						<thead>
							<tr>
								<td class="image">Item</td>
								<td class="description"></td>
								<td class="price">Price</td>
								<td class="quantity">Quantity</td>
								<td class="total">Total</td>
								<td></td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="cart_product">
									<a href=""><img src="images/cart/one.png" alt=""></a>
								</td>
								<td class="cart_description">
									<h4><a href="">Colorblock Scuba</a></h4>
									<p>Web ID: 1089772</p>
								</td>
								<td class="cart_price">
									<p>$59</p>
								</td>
								<td class="cart_quantity">
									
										<a class="cart_quantity_up" href=""> + </a>
										<input class="cart_quantity_input" type="text" name="quantity" value="1" size="2">
										<a class="cart_quantity_down" href=""> - </a>
									
								</td>
								<td class="cart_total">
									<p class="cart_total_price">$59</p>
								</td>
								<td class="cart_delete">
									<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
								</td>
							</tr>

							<tr>
								<td class="cart_product">
									<a href=""><img src="images/cart/two.png" alt=""></a>
								</td>
								<td class="cart_description">
									<h4><a href="">Colorblock Scuba</a></h4>
									<p>Web ID: 1089772</p>
								</td>
								<td class="cart_price">
									<p>$59</p>
								</td>
								<td class="cart_quantity">
									
										<a class="cart_quantity_up" href=""> + </a>
										<input class="cart_quantity_input" type="text" name="quantity" value="1" size="2">
										<a class="cart_quantity_down" href=""> - </a>
									
								</td>
								<td class="cart_total">
									<p class="cart_total_price">$59</p>
								</td>
								<td class="cart_delete">
									<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
								</td>
							</tr>
							<tr>
								<td class="cart_product">
									<a href=""><img src="images/cart/three.png" alt=""></a>
								</td>
								<td class="cart_description">
									<h4><a href="">Colorblock Scuba</a></h4>
									<p>Web ID: 1089772</p>
								</td>
								<td class="cart_price">
									<p>$59</p>
								</td>
								<td class="cart_quantity">
									
										<a class="cart_quantity_up" href=""> + </a>
										<input class="cart_quantity_input" type="text" name="quantity" value="1" size="2">
										<a class="cart_quantity_down" href=""> - </a>
									
								</td>
								<td class="cart_total">
									<p class="cart_total_price">$59</p>
								</td>
								<td class="cart_delete">
									<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
								</td>
							</tr>
						</tbody>
					</table>

					<table align="center" width="300" bgcolor="#b3e6ff">
						<tr>
							<td align="center">
								
								<p>Cart Sub Total:</p>
								<p>Eco Tax:</p>
								<p>Shipping Cost:</p>
								<p>Total:</p>
							
							</td>
							<td align="center">
								<p>$59</p>
								<p>$2</p>
								<p>Free</p>
								<p>$61</p>
							</td>
						</tr>
						<tr>
							<td align="center" colspan="2">
								<!-- <input type="button" name="update" value="update"> -->
								<input type="submit" name="checkout" value="Checkout">
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
