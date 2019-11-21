<?php
	
	include_once("controller/service.php");

    $allHotProducts=getHotProducts();

	if(isset($_POST['signin']))
	{
		header("Location:view/SignIn.php");
	}
	else if(isset($_POST['electronics']))
	{
		header("Location:view/SignIn.php");
	}
	else if(isset($_POST['mensfashion']))
	{
		header("Location:view/SignIn.php");
	}
	else if(isset($_POST['womensfashion']))
	{
		header("Location:view/SignIn.php");
	}
	else if(isset($_POST['sports']))
	{
		header("Location:view/SignIn.php");
	}

?>

<html>
	<head>
	
		<title>Online Shoping in Bangladesh</title>
		<meta charset=utf-8 />
		<style>
			.container {
				heigth:200px;
				width:300px;
				display:inline-block;
			}
		 </style>
		
	</head>
	
	<body>
		
		<form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>">
		
			<header>
				<div style="background:#ccffff">
				
					&emsp;&emsp;<a href="index.php" style="text-decoration:none;"><font color="#800000" size="10">DealMart.com</font></a>
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					<input type="submit" value="Sign In" name="signin">&emsp;
					
					
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
					<a href="view/SignIn.php"><img src="view/images/fashion.jpg" alt="Fashion Image" style="width:1330px; height:400px"/>
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
										echo "<a href='view/SignIn.php'><img src='view/images/".$product['productimage']."' style='height:200px; width:200px;'/></a>";
										echo "<p>"."Product Name : ".$product['productname']."</p> ";
										echo "<p>"."Brand Name : ".$product['brand']."</p> ";
										echo "<p>"."Product Materials : ".$product['materials']."</p> ";
										echo "<p>"."Product Catagory : ".$product['productcatagory']."</p> ";
										echo "<p>"."Product Price : ".$product['price']." TK"."</p> ";
									?>
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
		</form>
		
		
		<footer>
			<div style="background:#222222; height:50px;" align="center">
				<p><font color="white">&copy; Copyright |DealMart.com</font></p>
			</div>
		</footer>
			
		
	</body>
</html>