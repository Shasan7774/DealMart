<?php
	$name="";
	$email="";
	$file=fopen("files/Admin.txt","r");
	$email=rtrim(fgets($file));
	$name2=rtrim(fgets($file));
	$name=rtrim(fgets($file));
	fclose($file);
	
	if(isset($_POST['adminaccount']))
	{
		header("Location:AdminAccount.php");
		
	}
	else if(isset($_POST['logout']))
	{
		header("Location:HomePage.php");
	}
	else if(isset($_POST['changeprofile']))
	{
		header("Location:AdminProfileSetting.php");
	}
	else if(isset($_POST['back']))
	{
		header("Location:AfterAdminLogin.php");
	}
	else if(isset($_POST['search']))
	{
		header("Location:Search.php");
	}
	else if(isset($_POST['electronics']))
	{
		header("Location:electronics/electronics.php");
	}
	else if(isset($_POST['mensfashion']))
	{
		header("Location:mens/mens.php");
	}
	else if(isset($_POST['womensfashion']))
	{
		header("Location:womens/womens.php");
	}
	else if(isset($_POST['sports']))
	{
		header("Location:sports/sports.php");
	}

?>

<html>
	<head>
	
		<title>Online Shoping in Bangladesh</title>
		
	</head>
	
	<body>
		
		<form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>">
		
			<header>
				<div style="background:#ccffff">
				
					&emsp;&emsp;<b><font color="#800000" size="10">DealMart.com</font></b>
					&emsp;&emsp;<img src="image/search.png" style="height:15px"/>
					<input type="text" style="height:20px; width:400px"/>
					<input type="submit" value="Search" name="search"/>
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
			</nav>
			
			<section>
				<div>
					<br/>
					<br/>
					
					<b><font color="#0198D8" size="6">Account Information</font></b>
					<br/>
					<br/>
					<table border="1">
						<th align="left">
							<b><font color="#EF4923">ADMIN INFORMATION</font></b>
							<br/>
							<br/>
							<b><?= $name ?></b>
							<br/>
							<b><?= $email ?></b>
							<br/>
							<br/>
							<input type="submit" value="Change Profile" name="changeprofile" style="background:#0198D1; color:white; height:30px;"/>
							&emsp;&emsp;
							<input type="submit" value="Back" name="back" style="background:#0198D1; color:white; height:30px;"/>
							<br/>
							<br/>
						</th>
					</table>
				</div>
			</section>
			
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