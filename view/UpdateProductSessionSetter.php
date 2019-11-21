<?php
	//set url passed value in a session using data table
	session_start();
	
	include_once("controller/service.php");
	$_SESSION['id']=$_SESSION['id'];
	
    $Products=getProducts();
	//$id=$_SESSION['id'];
	//$_SESSION['id']=$_SESSION['id'];
	
	//database connection
	/*$con=mysqli_connect("localhost","root","","mydatabase");
	$sql="SELECT *FROM portfolio";
	$result=mysqli_query($con,$sql);
	mysqli_close($con);*/
	
		//echo $_GET['uid'];
		
		foreach ($Products as $product)
		{
			//echo $product['productid'];
			if($product['productid']==$_GET['uid'])
			{
				$_SESSION['productId']=$product['productid'];
				//echo $_SESSION['portfolioId'];
				header("Location:UpdateProduct.php");
			}
		}
		
	
	
?>