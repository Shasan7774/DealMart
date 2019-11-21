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
		header("Location:../mens/mens.php");
	}
	else if(isset($_POST['womensfashion']))
	{
		header("Location:womens.php");
	}
	else if(isset($_POST['sports']))
	{
		header("Location:../sports/sports.php");
	}

?>

<html>
<head>
	<title>DealMart|Women's</title>
	<meta charset=utf-8 />
 <style>
    div.container {
      display:inline-block;
    }

    p {
      text-align:center;
    }
  </style>
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


	<h1 align="left">Women's Fashion</h1>
	<h2 align="center">DealMart Today's Deal</h2>

  <div class="container">
	<fieldset >
		<legend><b>Hot Deal</b></legend>
		<a href="details_aw.php">
		<img src="aw.jpg" height="250" width="200" />
		</a>
		<h4>White Dress</h4>
		<h3>35.5$ <strike>38.75$</strike></h3>
		<input type="button" value="Add to cart">
		</fieldset>
  </div>
  
  <div class="container">
	<fieldset >
		<legend><b>New Item</b></legend>
		<a href="details_bw.php">
		<img src="bw.jpg" height="250" width="200" />
		</a>
		<h4>Pink Dress</h4>
		<h3>25.5$ <strike>28.75$</strike></h3>
		<input type="button" value="Add to cart">
	</fieldset>
  </div>
  
  <div class="container">

	<fieldset >
		<legend><b>Exclusive Item</b></legend>
		<a href="details_cw.php">
		<img src="cw.jpg" height="250" width="200" />
		</a>
		<h4>Teddy Bear</h4>
		<h3>15.5$ <strike>18.75$</strike></h3>
		<input type="button" value="Add to cart">
	</fieldset>
   
  </div>
  
  <div class="container">
	<fieldset >
		<legend><b>Hot Deal</b></legend>
		<a href="details_dw.php">
		<img src="dw.jpg" height="250" width="200" />
		</a>
		<h4>White Gown</h4>
		<h3>45.5$ <strike>58.75$</strike></h3>
		<input type="button" value="Add to cart">
	</fieldset>
    
  
  </div>
  
  <div class="container">
   <fieldset>
		<legend><b>Limited Item</b></legend>
		<a href="details_ew.php">
		<img src="ew.jpg" height="250" width="200" />
		</a>
		<h4>Cowboy Shoe</h4>
		<h3>35.5$ <strike>38.75$</strike></h3>
		<input type="button" value="Add to cart">
	</fieldset>
  </div>
  
	<h2 align ="center">Regular Products</h2>
	
  <div class="container">
    <fieldset>
		<a href="details_fw.php">
		<img src="fw.jpg" height="200" width="200" />
		</a>
		<h4>Red Valvet Shoe</h4>
		<h3>35.5$</h3>
		<input type="button" value="Add to cart">
	</fieldset>
  </div>
  
  <div class="container">
   <fieldset>
		<a href="details_gw.php">
		<img src="gw.jpg" height="200" width="200" />
		</a>
		<h4>Goggles</h4>
		<h3>32$</h3>
		<input type="button" value="Add to cart">
	</fieldset>
  </div>
  
  <div class="container">
  <fieldset>
		<a href="details_hw.php">
		<img src="hw.jpg" height="200" width="200" />
		</a>
		<h4>Style Frame</h4>
		<h3>15.5$</h3>
		<input type="button" value="Add to cart">
	</fieldset>
  </div>
  
  <div class="container">
    <fieldset>
		<a href="details_iw.php">
		<img src="iw.jpg" height="200" width="200" />
		</a>
		<h4>Leather Pouch</h4>
		<h3>18$</h3>
		<input type="button" value="Add to cart">
	</fieldset>
  </div>
  
  <div class="container">
   <fieldset>
		<a href="details_jw.php">
		<img src="jw.jpg" height="200" width="200" />
		</a>
		<h4>Cowboy Hat</h4>
		<h3>95$</h3>
		<input type="button" value="Add to cart">
	</fieldset>
 
  </div>
  
		<footer>
			<div style="background:#222222; height:50px;" align="center">
				<p><font color="white">&copy; Copyright | DealMart.com</font></p>
			</div>
		</footer>

  
	</div>
	</form>
</body>
</html>