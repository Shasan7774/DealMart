<?php
	include_once("model/dataaccess.php");

	/*function getHotDeals()
	{
		return getAllHotDeals();
	}*/
	function getProducts()
	{
		return getAllProducts();
	}
	
	function getHotProducts()
	{
		return getAllHotProducts();
	}
	
	function getAllCartProducts()
	{
		return cartProducts();
	}
	
	function addNewCustomer($fname,$lname,$email,$mobile,$nPassword,$address)
	{
		$customer=array("firstname"=>$fname,"lastname"=>$lname,"email"=>$email,"mobile"=>$mobile,"password"=>$nPassword,"address"=>$address);
		return newCustomerValidation($customer);
	}
	
	function addToCart($customerId,$productId,$productname,$productimage,$productprice)
	{
		$cartProduct=array("customerId"=>$customerId,"productId"=>$productId,"productname"=>$productname,"productimage"=>$productimage,"productprice"=>$productprice);
		return cartProductValidation($cartProduct);
	}
	
	function newHotdealsProduct($productName,$productCode,$productPrice,$productQuantity,$productBrand,$productMaterials,$imageName,$productCatagory,$aboutProduct)
	{
		$product=array("productName"=>$productName,"productCode"=>$productCode,"productPrice"=>$productPrice,"productQuantity"=>$productQuantity,"productBrand"=>$productBrand,"productMaterials"=>$productMaterials,"imageName"=>$imageName,"productCatagory"=>$productCatagory,"aboutProduct"=>$aboutProduct);
		
		return newHotProductValidation($product);
	}
	
	function updateCustomer($fname,$lname,$email,$mobile,$nPassword,$address,$customerId)
	{
		$customer=array("firstname"=>$fname,"lastname"=>$lname,"email"=>$email,"mobile"=>$mobile,"password"=>$nPassword,"address"=>$address,"customerId"=>$customerId);
		return updateCustomerValidation($customer);
	}
	
	function updateAdmin($fname,$lname,$email,$nPassword,$adminId)
	{
		$admin=array("firstname"=>$fname,"lastname"=>$lname,"email"=>$email,"adminId"=>$adminId);
		return updateAdminValidation($admin);
	}
	
	function updateProduct($productName,$productCode,$productPrice,$productQuantity,$productBrand,$productMaterials,$imageName,$productCatagory,$aboutProduct,$productid)
	{
		$product=array("productName"=>$productName,"productCode"=>$productCode,"productPrice"=>$productPrice,"productQuantity"=>$productQuantity,"productBrand"=>$productBrand,"productMaterials"=>$productMaterials,"imageName"=>$imageName,"productCatagory"=>$productCatagory,"aboutProduct"=>$aboutProduct,"productid"=>$productid);
		
		return updateProductValidation($product);
	}
	
	function getAllCustomers()
	{
		return getAllCustomerData();
	}
	
	function getCustomerDetails($customerId)
	{
		return getCustomerData($customerId);
	}
	
	function getProduct($productId)
	{
		return getProductData($productId);
	}
	
	
	function getSearchProduct($searchtext)
	{
		return getSearchProductData($searchtext);
	}
	
	function getHotProduct($productId)
	{
		return getHotProductData($productId);
	}
	
	/*function getSearchProduct($searchtext)
	{
		return getSearchProductData($searchtext);
	}*/
	
	function deleteCartProduct($productid)
	{
		return deleteProductData($productid);
	}
	
	function deleteProduct($productid)
	{
		return deleteProductDatas($productid);
	}
	
	function deleteHotProduct($productid)
	{
		return deleteHotProductDatas($productid);
	}
	
	function getProductForUpdate($productid)
	{
		return getProductData($productid);
	}
	
	function getAdmin()
	{
		return getAdminData();
	}
	
	function uploadProduct($productName,$productCode,$productPrice,$productQuantity,$productBrand,$productMaterials,$imageName,$productCatagory,$aboutProduct)
	{
		$product=array("productName"=>$productName,"productCode"=>$productCode,"productPrice"=>$productPrice,"productQuantity"=>$productQuantity,"productBrand"=>$productBrand,"productMaterials"=>$productMaterials,"imageName"=>$imageName,"productCatagory"=>$productCatagory,"aboutProduct"=>$aboutProduct);
		return newProductValidation($product);
	}
	

?>