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
	<title>search</title>
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

	<fieldset>
		<br/>
		<legend>Your Search Result</legend>

		<table>
			<tr>
				<td>
					<a href="images/electronics/details_a.html">
		            <img src="images/electronics/a.jpg" height="250" width="200" />
		            </a>
		            <h4>Apple Combo</h4>
		            <h3>35.5$ <strike>38.75$</strike></h3>
		            <input type="button" value="Add to cart">
				</td>

				<td>
					<a href="images/electronics/details_b.html">
		            <img src="images/electronics/b.png" height="250" width="200" />
		            </a>
		            <h4>Nikon Professional Camera</h4>
		            <h3>25.5$ <strike>28.75$</strike></h3>
		            <input type="button" value="Add to cart">
				</td>

				<td>
					<a href="images/electronics/details_c.html">
		            <img src="images/electronics/c.jpg" height="250" width="200" />
		            </a>
		            <h4>Microsoft Surface Pro</h4>
		            <h3>15.5$ <strike>18.75$</strike></h3>
		            <input type="button" value="Add to cart">
				</td>

				<td>
					<a href="images/electronics/details_d.html">
		            <img src="images/electronics/d.jpg" height="250" width="200" />
		            </a>
		            <h4>4k Action Camera</h4>
		            <h3>45.5$ <strike>58.75$</strike></h3>
		            <input type="button" value="Add to cart">
				</td>

				<td>
					<a href="images/electronics/details_e.html">
		            <img src="images/electronics/e.jpg" height="250" width="200" />
		            </a>
		            <h4>Kindle 10"</h4>
		            <h3>35.5$ <strike>38.75$</strike></h3>
		            <input type="button" value="Add to cart">
				</td>

				<td>
					<a href="images/electronics/details_f.html">
		            <img src="images/electronics/f.jpg" height="200" width="200" />
		            </a>
		            <h4>Samsung Earphone</h4>
		            <h3>35.5$</h3>
		            <input type="button" value="Add to cart">
				</td>
			</tr>

			<tr>
				<td>
					<a href="images/sports/details_a.html">
		            <img src="images/sports/a.jpg" height="250" width="200" />
		            </a>
		            <h4>Pointing Board</h4>
		            <h3>35.5$ <strike>38.75$</strike></h3>
		            <input type="button" value="Add to cart">
				</td>

				<td>
					<legend><b>New Item</b></legend>
		            <a href="images/sports/details_b.html">
		            <img src="images/sports/b.jpg" height="250" width="200" />
		            </a>
		            <h4>Weight Lifter</h4>
		            <h3>25.5$ <strike>28.75$</strike></h3>
		            <input type="button" value="Add to cart">
				</td>

				<td>
					<a href="images/sports/details_c.html">
		            <img src="images/sports/c.jpg" height="250" width="200" />
		            </a>
		            <h4>Jumping Rope</h4>
		            <h3>15.5$ <strike>18.75$</strike></h3>
		            <input type="button" value="Add to cart">
				</td>

				<td>
					<a href="images/sports/details_d.html">
		            <img src="images/sports/d.jpg" height="250" width="200" />
		            </a>
		            <h4>Tennis Bat</h4>
		            <h3>45.5$ <strike>58.75$</strike></h3>
		            <input type="button" value="Add to cart">
				</td>

				<td>
					<a href="images/sports/details_e.html">
		            <img src="images/sports/e.png" height="250" width="200" />
		            </a>
		            <h4>Tennis Ball</h4>
		            <h3>35.5$ <strike>38.75$</strike></h3>
		            <input type="button" value="Add to cart">
				</td>

				<td>
					<a href="images/sports/details_f.html">
		            <img src="images/sports/f.jpg" height="200" width="200" />
		            </a>
		            <h4>Weight Lifter</h4>
		            <h3>35.5$</h3>
		            <input type="button" value="Add to cart">
				</td>
			</tr>		
		</table>		
	</fieldset>

	<footer>
			<div style="background:#222222; height:50px;" align="center">
				<p><font color="white">&copy; Copyright | DealMart.com</font></p>
			</div>
		</footer>
	</form>
</body>
</html>