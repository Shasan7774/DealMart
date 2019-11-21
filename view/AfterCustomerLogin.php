<?php

	session_start();
	$_SESSION['id']=$_SESSION['id'];
	include_once("controller/service.php");

    $allHotProducts=getHotProducts();
	
	$searchtext="Shoe";
	$searchProduct=getSearchProduct($searchtext);
	$num=0;
	

	if(isset($_POST['customeraccount']))
	{
		header("Location:CustomerAccount.php");
	}
	else if(isset($_POST['logout']))
	{
		header("Location:Logout.php");
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
		$searchtext=$_POST['searchtext'];
		
		if($searchtext=="")
		{
			$searchtext=="Shoe";
		}
		
		$searchProduct=getSearchProduct($searchtext);
		//$num=1;
		//header("Location:Search.php");
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
	else if(!isset($_SESSION['id']))
	{
		header("Location:SignIn.php");
	}

?>

<html>
	<head>
	
		<title>Online Shoping in Bangladesh</title>
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
					&emsp;&emsp;
					<input type="text" name="searchtext" style="height:20px; width:400px"/>
					<input type="submit" value="Search" name="search">
					&emsp;&emsp;&emsp;&emsp;
					<input type="submit" value="My Account" name="customeraccount">&emsp;
					<input type="submit" value="Need Help" name="needhelp">&emsp;
					<input type="submit" value="Cart" name="cart">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
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
			</nav>
			
			<section>
				<div align="center">
					<img src="images/fashion2.jpg" alt="Fashion Image" style="width:1330px; height:400px"/>
					
					<br/>
					<br/>
					<div>
					<div class="container">
						<fieldset >
							<legend><b>Search Result</b></legend>
								<?php
								
									$productId=$searchProduct['productid'];
									echo "<a href='view/SignIn.php'><img src='images/".$searchProduct['productimage']."' style='height:200px; width:200px;'/></a>";
									echo "<p>"."Product Name : ".$searchProduct['productname']."</p> ";
									echo "<p>"."Brand Name : ".$searchProduct['brand']."</p> ";
									echo "<p>"."Product Materials : ".$searchProduct['materials']."</p> ";
									echo "<p>"."Product Catagory : ".$searchProduct['productcatagory']."</p> ";
									echo "<p>"."Product Price : ".$searchProduct['price']." TK"."</p> ";
								
								?>
								&emsp;&emsp;&emsp;<a href="ProductSessionSetter.php?uid=<?=$productId;?>">View Product</a>
						</fieldset>
					</div>	
				</div>
					<br/>
					<br/>
					<b><font color="#0198D1" size="6">** HOT DEALS **</font></b>
					<br/>
					<br/>
				</div>
			</section>
			
			<div style="background:white">
				<div>
					<article>
						<?php
							foreach ($allHotProducts as $product) {
						?>
						<div class="container">
							<fieldset >
								<legend><b>Hot Deal</b></legend>
									<?php
										$productId=$product['productid'];
										echo "<a href='view/SignIn.php'><img src='images/".$product['productimage']."' style='height:200px; width:200px;'/></a>";
										echo "<p>"."Product Name : ".$product['productname']."</p> ";
										echo "<p>"."Brand Name : ".$product['brand']."</p> ";
										echo "<p>"."Product Materials : ".$product['materials']."</p> ";
										echo "<p>"."Product Catagory : ".$product['productcatagory']."</p> ";
										echo "<p>"."Product Price : ".$product['price']." TK"."</p> ";
									?>
									&emsp;&emsp;&emsp;<a href="HotProductSessionSetter.php?uid=<?=$productId;?>">View Product</a>
							</fieldset>
						</div>
						<?php
							}
						?>
					</article>
			
				</div>
				
				
				<div id="sidebar">
					<aside>
						
					</aside>
				</div>
				
			</div>
			
			<footer>
				<div style="background:#222222; height:50px;" align="center">
					<p><font color="white">&copy; Copyright | DealMart.com</font></p>
				</div>
			</footer>
			
		</form>
		
		<script>
			/*let searchtext=document.getElementById('searchtext');
            let searchbutton=document.getElementById('search');
			
			function searchArea()
			{
				let para=document.getElementById('para');
				let productName=document.getElementById('productName');
				let brandName=document.getElementById('brandName');
				let productMaterials=document.getElementById('productMaterials');
				let productCatagory=document.getElementById('productCatagory');
				let productPrice=document.getElementById('productPrice');
				
				para.innerHTML="";
				productName.innerHTML="";
				brandName.innerHTML="";
				productMaterials.innerHTML="";
				productCatagory.innerHTML="";
				productPrice.innerHTML="";
				
				let ajax=new XMLHttpRequest();
				
				ajax.onreadystatechange=function()
				{
                    if(this.readyState==4 && this.status==200)
                    {
                       
                        let areaData=JSON.parse(ajax.responseText); 
                        for (let index = 0; index < areaData.length; index++) {
                            para.innerHTML=areaData[index];
                            productName.innerHTML=areaData[index];
                            productMaterials.innerHTML=areaData[index];
                            productCatagory.innerHTML=areaData[index];
                            productPrice.innerHTML=areaData[index];
                        }
                        
                    }
                }
				
				console.log(searchtext.value);
				
				ajax.open("GET","server.php?str="+searchtext.value,true);
                ajax.send();
				
			});*/
			
        </script>
	</body>
</html>