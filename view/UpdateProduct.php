<?php
	//set url passed value in a session using data table
	session_start();
	
	include_once("controller/service.php");
	$_SESSION['id']=$_SESSION['id'];
	
	$productId=$_SESSION['productId'];
	
	//echo $_GET['uid'];
	
    $UpdateProduct=getProductForUpdate($productId);
		
	$productName="";
	$productCode="";
	$productPrice="";
	$productQuantity="";
	$productBrand="";
	$productMaterials="";
	$productCatagory="";
	$aboutProduct="";
	
	$error="";
	
	if(isset($_POST['addproduct']))
	{
		$productName=$_POST['productname'];
		$productCode=$_POST['productcode'];
		$productPrice=$_POST['price'];
		$productQuantity=$_POST['productquantity'];
		$productBrand=$_POST['brand'];
		$productMaterials=$_POST['materials'];
		$productCatagory=$_POST['productcatagory'];
		$aboutProduct=$_POST['aboutproduct'];
		
		if($productName!="" && $productCode!="" && $productPrice!="" && $productQuantity!=""&& $productBrand!="" && $productMaterials!="" && $productCatagory!="" && $aboutProduct!="")
		{
			$imageName=$_FILES['image']['name'];
					
			$target = "images/".basename($imageName);

			$result=updateProduct($productName,$productCode,$productPrice,$productQuantity,$productBrand,$productMaterials,$imageName,$productCatagory,$aboutProduct,$productId);
	 
			if($result) 
			{
				move_uploaded_file($_FILES['image']['tmp_name'], $target);
				
				echo "<script type='text/javascript'>alert('Product Uploaded Successfully');</script>";
				//header("Location:CheckInventory.php");
			}
			else
			{
				echo "Failed to update Product";
			}
		}
		else
		{
			$error="Field is required";
		}
		
	  
	}
	else if(isset($_POST['addtohotdeals']))
	{
		$productName=$_POST['productname'];
		$productCode=$_POST['productcode'];
		$productPrice=$_POST['price'];
		$productQuantity=$_POST['productquantity'];
		$productBrand=$_POST['brand'];
		$productMaterials=$_POST['materials'];
		$productCatagory=$_POST['productcatagory'];
		$aboutProduct=$_POST['aboutproduct'];
		
		if($productName!="" && $productCode!="" && $productPrice!="" && $productQuantity!=""&& $productBrand!="" && $productMaterials!="" && $productCatagory!="" && $aboutProduct!="")
		{
			$imageName=$_FILES['image']['name'];
					
			$target = "images/".basename($imageName);

			$result=newHotdealsProduct($productName,$productCode,$productPrice,$productQuantity,$productBrand,$productMaterials,$imageName,$productCatagory,$aboutProduct);
	 
			if($result) 
			{
				move_uploaded_file($_FILES['image']['tmp_name'], $target);
				
				echo "<script type='text/javascript'>alert('Product Uploaded Successfully to Hotdeals');</script>";
				//header("Location:CheckInventory.php");
			}
			else
			{
				echo "Failed to update Product";
			}
		}
		else
		{
			$error="Field is required";
		}
		
	  
	}
	else if(isset($_POST['back']))
	{
		header("Location:CheckInventory.php");
	}
	else if(!isset($_SESSION['id']))
	{
		header("Location:LogIn.php");
	}
		
	
	
?>

<html>
	<head>
	
		<title>Online Shoping in Bangladesh</title>
		
	</head>
	
	<body>
		
		<form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>" enctype="multipart/form-data">
			<div align="center">
				<br/>
				<br/>
				
				<b><font color="#0198D8" size="6">ADMIN : </font></b>
				<br/>
				<br/>
				<br/>
				<br/>
				<b>Product Name : </b>
				<input id="pname" type="text" value="<?=$UpdateProduct['productname'];?>" name="productname"/>
				<span id="error1" style="color:red;"></span>
				<br/>
				<br/>
				<b>Product Code : </b>
				<input type="text" id="productcode" value="<?=$UpdateProduct['productcode'];?>" name="productcode"/>
				<span id="error2" style="color:red;"></span>
				<br/>
				<br/>
				<b>Price : </b>
				<input type="text" id="price" value="<?=$UpdateProduct['price'];?>" name="price"/>
				<span id="error3" style="color:red;"></span>
				<br/>
				<br/>
				<b>Product Quantity : </b>
				<input type="text" id="productquantity" value="<?=$UpdateProduct['quantity'];?>" name="productquantity"/>
				<span id="error4" style="color:red;"></span>
				<br/>
				<br/>
				<b>Brand : </b>
				<input type="text" id="brand" value="<?=$UpdateProduct['brand'];?>" name="brand"/>
				<span id="error5" style="color:red;"></span>
				<br/>
				<br/>
				<b>Materials : </b>
				<input type="text" id="materials" value="<?=$UpdateProduct['materials'];?>" name="materials"/>
				<span id="error6" style="color:red;"></span>
				<br/>
				<br/>
				<b>Add Product Photo : </b>
				<input id="image" type="file" name="image"/>
				<span id="error7" style="color:red;"></span>
				<br/>
				<br/>
				<b>Product Catagory : </b>
				<select id="productcatagory" value="<?=$UpdateProduct['productcatagory'];?>" name="productcatagory">
					<option>Electronics</option>
					<option>Mens Fashion</option>
					<option>Womens Fashion</option>
					<option>Sports</option>
				</select>
				<span id="error8" style="color:red;"></span>
				<br/>
				<br/>
				<b>About Product : </b>
				<br/>
				<input type="text" id="aboutproduct" value="<?=$UpdateProduct['productdetails'];?>" name="aboutproduct"  style="height:50px; width:200px;"/>
				<span id="error9" style="color:red;"></span>
				<br/>
				<br/>
				<label><font color="red"><?= $error; ?></font></label>
				<br/>
				<br/>
				<input type="submit" name="addproduct" value="Update This Product" style="height:50px; width:200px; font-size:20px;"/>
				&emsp;
				<input type="submit" name="addtohotdeals" value="Add To HotDeals" style="height:50px; width:200px; font-size:20px;"/>
				&emsp;
				<input type="submit" name="back" value="Back" style="height:50px; width:90px; font-size:20px; background:red; color:white;"/>
			</div>
			
			<footer>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<div style="background:#222222; height:50px;" align="center">
					<p><font color="white">&copy; Copyright | DealMart.com</font></p>
				</div>
			</footer>
		</form>
	</body>
</html>