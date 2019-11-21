<?php
	session_start();

	include_once("controller/service.php");
	$_SESSION['id']=$_SESSION['id'];

    $Products=getProducts();

	
	if(isset($_POST['search']))
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
	<title>DealMart|Men's</title>
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
		</nav><br>


	<h1 align="left">Sports</h1>
	<h2 align="center">DealMart Today's Deal</h2>

  <?php
		foreach ($Products as $product)
		{
			if($product['productcatagory']=="Sports")
			{
	?>
				<div class="container">
					<fieldset >
						<legend><b>Hot Deal</b></legend>
							<?php
								$productId=$product['productid'];
								echo "<img src='images/".$product['productimage']."' style='height:200px; width:200px;'/>";
								echo "<p>"."Product Name : ".$product['productname']."</p> ";
								echo "<p>"."Brand Name : ".$product['brand']."</p> ";
								echo "<p>"."Product Materials : ".$product['materials']."</p> ";
								echo "<p>"."Product Catagory : ".$product['productcatagory']."</p> ";
								echo "<p>"."Product Price : ".$product['price']." TK"."</p> ";
								//echo $product['image'];
								
							?>
							&emsp;&emsp;&emsp;<a href="ProductSessionSetter.php?uid=<?=$productId;?>">View Product</a>
					</fieldset>
				</div>
	<?php
			}
		}
	?>
  
  
  
		<footer>
			<div style="background:#222222; height:50px;" align="center">
				<p><font color="white">&copy; Copyright | DealMart.com</font></p>
			</div>
		</footer>

  
	</div>
	</form>
</body>
</html>