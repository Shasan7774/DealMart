<?php

	include_once("controller/service.php");
	
	$productName=$_POST['productname'];
	$productCode=$_POST['productcode'];
	$productPrice=$_POST['price'];
	$productQuantity=$_POST['productquantity'];
	$productBrand=$_POST['brand'];
	$productMaterials=$_POST['materials'];
	$productCatagory=$_POST['productcatagory'];
	$aboutProduct=$_POST['aboutproduct'];
	
	$imageName=$_FILES['image']['name'];	
	//$imageName="ge.jpg";	
	$target = "images/".basename($imageName);
	
	$result=uploadProduct($productName,$productCode,$productPrice,$productQuantity,$productBrand,$productMaterials,$imageName,$productCatagory,$aboutProduct);
	
	if($result)
	{
		move_uploaded_file($_FILES['image']['tmp_name'], $target);
		echo "<script type='text/javascript'>alert('Product Uploaded Successfully');</script>";
		header("Location:AfterAdminLogin.php");
	}
	else
	{
		echo "Fail to upload";
	}
	
	
				

?>