<?php
	
	//for First And Last Name
	$fName="";
	$lName="";
	//for Email
	$emailError="";
	$num=0;
	$num2=0;
	$num3=0;
	//for password
	$nPassError="";
	$cPassError="";
	$opassError="";
	$space=0;
	//for File
	$file1="";
	$file2="";
	
	if(isset($_POST['update']))
	{
		
		$fn=$_POST['fname'];
		$fname=trim($fn);
		$ln=$_POST['lname'];
		$lname=trim($ln);
		
		//First Name Validation
		if($fname=="")
		{
			$fName= "Please fillup first Name";
		}
		else if(ord($fname[0])>=48 && ord($fname[0])<=57)
		{
			$fName= "First Character can not a number";
		}
		else
		{
			for($i=0; strlen($fname)>$i; $i++)
			{
				if(ord($fname[$i])>=33 && ord($fname[$i])<=64 || ord($fname[$i])>=91 && ord($fname[$i])<=96 || ord($fname[$i])>=123 && ord($fname[$i])<=126)
				{
					$fName="First Name can not contain spacial character";
					break;
				}
				else
				{
					$fName="";
				}
			}
		}
		//First Name Validation End
		
		//Last Name Validation
		if($lname=="")
		{
			$lName= "Please fillup Last Name";
		}
		else if(ord($lname[0])>=48 && ord($lname[0])<=57)
		{
			$lName= "First Character can not a number In Last Name";
		}
		else
		{
			for($i=0; strlen($lname)>$i; $i++)
			{
				if(ord($lname[$i])>=33 && ord($lname[$i])<=64 || ord($lname[$i])>=91 && ord($lname[$i])<=96 || ord($lname[$i])>=123 && ord($lname[$i])<=126)
				{
					$lName="Last Name can not contain spacial character";
					break;
				}
				else
				{
					$lName="";
				}
			}
		}
		//Last Name Validation End
		
		//Email Validation
		$email=trim($_POST['email']);
		
		if($email=="")
		{
			$emailError="Please fillup Email";
		}
		else
		{
			if(ord($email[0])>=48 && ord($email[0])<=57)
			{
				$emailError="First Character can not contain number in Email";
			}
			else
			{
				//$count=strlen($email);
				for($i=1; $i<strlen($email); $i++)
				{
					if(ord($email[$i])==64)
					{
						$num=1;	
						$num3=$i+1;
						
					}
					if(ord($email[$i])==46)
					{
						$num2=1;
					}
					
				}
				if($num==1 && $num2==1 && substr($email,$num3,9)=="gmail.com")
				{
					//echo "Your Email is : ".$email;
					//echo "<br/> substring : ".substr($email,$num3,6);
				}
				else
				{
					$emailError="Email is Invalid";
				}
				
			}
			
		}
		//Email Validation End
		
		//Password Validation
		$oPassword=$_POST['opass'];
		$nPassword=$_POST['npass'];
		$cPassword=$_POST['cpass'];
		$file=fopen("files/Admin.txt","r");
		
		$em=fgets($file);
		$pass=fgets($file);
		$nm=fgets($file);
		fclose($file);
		
		if($oPassword==rtrim($pass))
		{
			for($i=0; $i<strlen($nPassword); $i++)
			{
				if($nPassword[$i]==" ")
				{
					$space=1;
					break;
				}
			}
			if(trim($nPassword)=="" || $space==1)
			{
				$nPassError="Password can not empty <br/> or can not contain any space";
			}
			else
			{
				if(strlen($nPassword)<8)
				{
					$nPassError="Password must be in 8 character";
				}
				if($cPassword!=$nPassword)
				{
					$cPassError="New password and Confirm password must be same";
				}
			}
		}
		else
		{
			$opassError="Old Password can not match";
		}
		
		
		//Password Validation End
		
		$inputEmail=$_POST['email'];
		$inputName=$_POST['fname']." ".$_POST['lname'];
		$inputpass=$_POST['npass'];
		
		//passing value in file
		if($fName=="" && $lName=="" && $emailError=="" && $nPassError=="" && $cPassError=="" && $addressError=="" && $opassError=="")
		{
			
				$details=$inputEmail."\r\n".$inputpass."\r\n".$inputName;
				$file1=fopen("files/Admin.txt","w");
				fwrite($file1,"$details");
				fclose($file1);
				
				header("Location:AdminUpdateSuccess.php");
			
		}
		
		//passing value in file End
		
		
	}
	else if(isset($_POST['adminaccount']))
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
				<div style="background:#A0DDFA;" align="center">
					<br/>
					<br/>
					<b><font color="#0000EE" size="6">EDIT ACCOUNT INFORMATION</font></b>
					<br/>
					<br/>
					<fieldset style="width:600px" align="center">
						<legend>EDIT</legend>
						<br/>
						<br/>
						<b>First Name</b>
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
						<b>Last Name</b>
						<br/>
						<input type="text" name="fname"/>
						&emsp;&emsp;&emsp;&emsp;
						<input type="text" name="lname"/>
						<br/>
						<label><font color="red"><?= $fName; ?></font></label>
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
						<label><font color="red"><?= $lName; ?></font></label>
						<br/>
						<br/>
						<b>Email Address</b>
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
						<b>Old Password</b>
						<br/>
						<input type="text" name="email"/>
						&emsp;&emsp;&emsp;&emsp;
						<input type="password" name="opass"/>
						<br/>
						<label><font color="red"><?= $emailError; ?></font></label>
						&emsp;&emsp;&emsp;&emsp;
						<label><font color="red"><?= $opassError; ?></font></label>
						<br/>
						<br/>
						<b>New Password</b>
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;
						<b>Confirm New Password</b>
						<br/>
						<input type="password" name="npass"/>
						&emsp;&emsp;&emsp;&emsp;
						<input type="password" name="cpass"/>
						<br/>
						<label><font color="red"><?= $nPassError; ?></font></label>
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
						<label><font color="red"><?= $cPassError; ?></font></label>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						<input type="submit" value="UPDATE" name="update" style="height:35px; width:120px; background:red; color:white;"/>
						&nbsp;&nbsp;
						<input type="submit" value="Back" name="back" style="height:35px; width:120px; background:red; color:white;"/>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						
					</fieldset>
						
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
				<div style="background:#222222; height:50px;" align="center">
					<p><font color="white">&copy; Copyright | DealMart.com</font></p>
				</div>
			</footer>
			
		</form>
	</body>
</html>