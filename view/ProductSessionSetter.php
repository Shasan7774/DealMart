<?php
	//set url passed value in a session using data table
	session_start();
	
	include_once("controller/service.php");
	$_SESSION['id']=$_SESSION['id'];
	
    $Products=getProducts();
	
		//echo $_GET['uid'];
		
		foreach ($Products as $product)
		{
			//echo $product['productid'];
			if($product['productid']==$_GET['uid'])
			{
				$_SESSION['productId']=$product['productid'];
				//echo $_SESSION['portfolioId'];
				header("Location:ViewProduct.php");
			}
		}
		
	
	
?>