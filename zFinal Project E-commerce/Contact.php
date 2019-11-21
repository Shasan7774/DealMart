<?php

	if(isset($_POST['signin']))
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
	<title>Contact</title>
</head>
<body>
	<header>
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

		<table width="1000">
			<tr>
				<td align="center" colspan="2">
					<img src="images/contact/contact.jpg" width="1250" height="300">
					<font color="red"><h1>Contact <strong>Us</strong></h1></font>
				</td>

				<td>
					
				</td>
			</tr>

			<tr>

				<td>
					<fieldset>
						<legend><h2>Get in touch</h2></legend>

						<form name="contactForm" method="post">
				            
				                <input type="text" name="name" placeholder="Name"> &nbsp &nbsp
				            
				            
				                <input type="email" name="email" placeholder="Email"> <br/> <br/>
				            
				            
				                <input type="text" name="subject" placeholder="Subject"> <br/> <br/>
				            
				            
				                <textarea name="message" rows="8" placeholder="Your Message Here"></textarea> <br/>
				                                   
				            
				                <input type="submit" name="submit" value="Submit">
				            
				        </form>
					</fieldset>
				</td>


				<td>
					<fieldset>
						<legend><h2>Contact Info</h2></legend>

						<p>E-Shopper Inc.</p>
							<p>935 W. Webster Ave New Streets Chicago, IL 60614, NY</p>
							<p>Newyork USA</p>
							<p>Mobile: +2346 17 38 93</p>
							<p>Fax: 1-714-252-0026</p>
							<p>Email: info@e-shopper.com</p>
							
					</fieldset>
				</td>
			</tr>
		</table>



		<footer>
			<div style="background:#222222; height:50px;" align="center">
				<p><font color="white">&copy; Copyright | MyShop.com</font></p>
			</div>
		</footer>
	</form>	
</body>
</html>