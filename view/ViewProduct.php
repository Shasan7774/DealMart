<?php
	session_start();
	include_once("controller/service.php");
	//product Id
	$productId=$_SESSION['productId'];
	//customer ID
	$customerId=$_SESSION['id'];
	$_SESSION['id']=$_SESSION['id'];
    $Product=getProduct($productId);
	
	//echo $productId;
	
	//$_SESSION['id']=$_SESSION['id'];
	
	//database connection
	
	//php file located
	if(isset($_POST['addtocart']))
	{
		$result=addToCart($customerId,$productId,$Product['productname'],$Product['productimage'],$Product['price']);
		
		if($result)
		{
			echo "<script type='text/javascript'>alert('Product Added To Cart');</script>";
			
			
		}
		else
		{
			echo "Error in Added Product";
		}
		//header("Location:EditImage.php");
		//header("Location:AfterCustomerLogin.php");
	}
	else if(isset($_POST['back']))
	{
		header("Location:AfterCustomerLogin.php");
	}
	else if(!isset($_SESSION['id']))
	{
		header("Location:SignIn.php");
	}
	
	/*if(isset($_POST['deletephoto']))
	{
		header("Location:DeleteImage.php");
	}
	else if(isset($_POST['back']))
	{
		header("Location:PhotoAlbum.php");
	}
	else if(!isset($_SESSION['id']))
	{
		header("Location:Login.php");
	}*/

?>

<html>

	<head>
		<title>Photo Album</title>
	</head>
	
	<body>
		<form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>" enctype="multipart/form-data">
		
			<header>
				<div style="height:100px;" align="center">
					<b><font color="#0198D8" size="10">Product</font></b>
				</div>
			</header>
			
			<nav>
				<div style="margin-top:5px;" align="center">
					<?php
						echo "<img src='images/".$Product['productimage']."' style='height:250px; width:300px;'/>";
						echo "<p>"."Product Name : ".$Product['productname']."</p> ";
						echo "<p>"."Brand Name : ".$Product['brand']."</p> ";
						echo "<p>"."Product Price : ".$Product['price']." TK"."</p> ";
						echo "<p>"."Product Price : ".$Product['productdetails']." TK"."</p> ";
					?>
				</div>
				
				<div style="height:100px;" align="center">
					<input type="submit" value="Add To Cart" name="addtocart" style="background:red; height:40px; width:160px; color:white; font-size:25px;"/>	
					&emsp;
					<input type="submit" value="Back" name="back" style="background:red; height:40px; width:100px; color:white; font-size:20px;"/>					
				</div>
				
			</nav>	
		</form>
		
		
		<footer>
			<div style="background:#222222; padding:10px; text-align:center;">
				<p><font color="white">&copy; Copyright |CO2 Evaluation for OBE </font></p>
			</div>
		</footer>
	</body>

</html>