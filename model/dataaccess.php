<?php

	include_once("database.php");
	
	/*function getAllHotDeals()
	{
		$query="SELECT * FROM images";
		$result=executeQuery($query);
		$productList=array();
		if($result){
		   for ($i=0; $row=mysqli_fetch_assoc($result); $i++) { 
			   $productList[$i]=$row;
		   }
		}
		return $productList;
	}*/
	
	function getAllProducts()
	{
		$query="SELECT * FROM allproducts";
		$result=executeQuery($query);
		$productList=array();
		if($result){
		   for ($i=0; $row=mysqli_fetch_assoc($result); $i++) { 
			   $productList[$i]=$row;
		   }
		}
		return $productList;
	}
	
	function getAllHotProducts()
	{
		$query="SELECT * FROM hotdealsproducts";
		$result=executeQuery($query);
		$productList=array();
		if($result){
		   for ($i=0; $row=mysqli_fetch_assoc($result); $i++) { 
			   $productList[$i]=$row;
		   }
		}
		return $productList;
	}
	
	function newCustomerValidation($customer)
	{
		$query="INSERT INTO customers(firstname,lastname,email,mobile,password,address) VALUES('$customer[firstname]','$customer[lastname]','$customer[email]','$customer[mobile]','$customer[password]','$customer[address]')";
		
		return executeNonQuery($query);
	}
	
	function newProductValidation($product)
	{
		$query="INSERT INTO allproducts(productname,productcode,price,quantity,brand,materials,productimage,productcatagory,productdetails) VALUES('$product[productName]','$product[productCode]','$product[productPrice]','$product[productQuantity]','$product[productBrand]','$product[productMaterials]','$product[imageName]','$product[productCatagory]','$product[aboutProduct]')";
		
		return executeNonQuery($query);
	}
	
	function newHotProductValidation($product)
	{
		$query="INSERT INTO hotdealsproducts(productname,productcode,price,quantity,brand,materials,productimage,productcatagory,productdetails) VALUES('$product[productName]','$product[productCode]','$product[productPrice]','$product[productQuantity]','$product[productBrand]','$product[productMaterials]','$product[imageName]','$product[productCatagory]','$product[aboutProduct]')";
		
		return executeNonQuery($query);
	}
	
	function cartProductValidation($cartProduct)
	{
		$query="INSERT INTO cartproducts(customerid,productid,productname,productimage,productprice) VALUES('$cartProduct[customerId]','$cartProduct[productId]','$cartProduct[productname]','$cartProduct[productimage]','$cartProduct[productprice]')";
		
		return executeNonQuery($query);
	}
	
	function updateCustomerValidation($customer)
	{
		$query="UPDATE customers SET firstname='$customer[firstname]',lastname='$customer[lastname]',email='$customer[email]',mobile='$customer[mobile]',password='$customer[password]',address='$customer[address]' where customerid='$customer[customerId]'";
		
		return executeNonQuery($query);
	}
	
	function updateAdminValidation($admin)
	{
		$query="UPDATE admin SET firstname='$admin[firstname]',lastname='$admin[lastname]',email='$admin[email]' where id='$admin[adminId]'";
		
		return executeNonQuery($query);
	}
	
	function updateProductValidation($product)
	{
		$query="UPDATE allproducts SET productname='$product[productName]',productcode='$product[productCode]',price='$product[productPrice]',quantity='$product[productQuantity]',brand='$product[productBrand]',materials='$product[productMaterials]',productimage='$product[imageName]',productcatagory='$product[productCatagory]',productdetails='$product[aboutProduct]' where productid='$product[productid]'";
		
		return executeNonQuery($query);
	}
	
	function getAllCustomerData()
	{
		$query="SELECT * FROM customers";
		$result=executeQuery($query);
		$customers=array();
		if($result){
		   for ($i=0; $row=mysqli_fetch_assoc($result); $i++) { 
			   $customers[$i]=$row;
		   }
		}
		return $customers;
	}
	
	function cartProducts()
	{
		$query="SELECT * FROM cartproducts";
		$result=executeQuery($query);
		$cartproducts=array();
		if($result){
		   for ($i=0; $row=mysqli_fetch_assoc($result); $i++) { 
			   $cartproducts[$i]=$row;
		   }
		}
		return $cartproducts;
	}
	
	function getAdminData()
	{
		$query="SELECT * FROM admin";
		$result=executeQuery($query);
		$admin=array();
		if($result){
		   for ($i=0; $row=mysqli_fetch_assoc($result); $i++) { 
			   $admin[$i]=$row;
		   }
		}
		return $admin;
	}
	
	function getCustomerData($customerId)
	{
		$query="SELECT * FROM customers WHERE customerid='$customerId'";
		$result=executeQuery($query);
		/*$admin=array();
		if($result){
		   for ($i=0; $row=mysqli_fetch_assoc($result); $i++) { 
			   $admin[$i]=$row;
		   }
		}*/
		$row=mysqli_fetch_assoc($result);
		return $row;
	}
	
	function getProductData($productId)
	{
		$query="SELECT * FROM allproducts WHERE productid='$productId'";
		$result=executeQuery($query);
		/*$admin=array();
		if($result){
		   for ($i=0; $row=mysqli_fetch_assoc($result); $i++) { 
			   $admin[$i]=$row;
		   }
		}*/
		$row=mysqli_fetch_assoc($result);
		return $row;
	}
	
	function getHotProductData($productId)
	{
		$query="SELECT * FROM hotdealsproducts WHERE productid='$productId'";
		$result=executeQuery($query);
		/*$admin=array();
		if($result){
		   for ($i=0; $row=mysqli_fetch_assoc($result); $i++) { 
			   $admin[$i]=$row;
		   }
		}*/
		$row=mysqli_fetch_assoc($result);
		return $row;
	}
	
	function getSearchProductData($searchtext)
	{
		$query="SELECT * FROM allproducts WHERE productname='$searchtext'";
		$result=executeQuery($query);
		/*$admin=array();
		if($result){
		   for ($i=0; $row=mysqli_fetch_assoc($result); $i++) { 
			   $admin[$i]=$row;
		   }
		}*/
		$row=mysqli_fetch_assoc($result);
		return $row;
	}
	
	function deleteProductData($productId)
	{
		$query="DELETE FROM cartproducts WHERE id='$productId'";
		return executeNonQuery($query);
		
	}
	
	function deleteProductDatas($productid)
	{
		$query="DELETE FROM allproducts WHERE productid='$productid'";
		return executeNonQuery($query);
	}
	
	function deleteHotProductDatas($productid)
	{
		$query="DELETE FROM hotdealsproducts WHERE productid='$productid'";
		return executeNonQuery($query);
	}

?>