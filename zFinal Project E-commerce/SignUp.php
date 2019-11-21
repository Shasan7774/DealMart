<?php
	//for First And Last Name
	$fName="";
	$lName="";
	//for Email
	$emailError="";
	$num=0;
	$num2=0;
	$num3=0;
	//for mobile
	$mobError="";
	//for password
	$nPassError="";
	$cPassError="";
	$space=0;
	//for Address
	$addressError="";
	//for File
	$file1="";
	$file2="";
	//for User Name exist or not
	$sameIdError="";
	$num1=0;
	
	if(isset($_POST['register']))
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
		
		//Phone Number Validation
		$mobile=trim($_POST['mobile']);
		if($mobile=="")
		{
			$mobError="Fillup Mobile number";
		}
		else
		{
			for($i=0; $i<strlen($mobile); $i++)
			{
				if(ord($mobile[$i])>=48 && ord($mobile[$i])<=57)
				{
					
				}
				else
				{
					$mobError="Mobile number is Invalid";
					break;
				}
				
			}
		}
	
		//Phone Number Validation End
		
		//Password Validation
		$nPassword=$_POST['npass'];
		$cPassword=$_POST['cpass'];
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
		
		//Password Validation End
		
		//Address Validation
		$address=trim($_POST['address']);
		$city=trim($_POST['city']);
		if($address=="")
		{
			$addressError="Please Fillup Address";
		}
		//Address Validation End
		
		//passing value in file
		if($fName=="" && $lName=="" && $emailError=="" && $mobError=="" && $nPassError=="" && $cPassError=="" && $addressError=="")
		{
			$file=fopen("files/CustomerEmailPassword.txt","r");
			while(!feof($file))
			{
				$fileEmail=fgets($file);
				
				if($email==rtrim($fileEmail))
				{
					$num1=1;
					break;
				}
				
			}
			
			if($num1==1)
			{
				$sameIdError=$email.", This user name Allready Exist <br/>"."Please try different Email as Username";
			}
			else
			{
				$details="\r\n"."\r\n".$email."\r\n".$fname." ".$lname."\r\n".$mobile."\r\n".$address."\r\n".$city;
				$emailPass="\r\n"."\r\n".$email."\r\n".$cPassword;
				$file1=fopen("files/CustomerDetails.txt","a");
				fwrite($file1,"\r\n$details");
				$file2=fopen("files/CustomerEmailPassword.txt","a");
				fwrite($file2,"\r\n$emailPass");
				fclose($file);
				fclose($file1);
				fclose($file2);
				
				header("Location:RegisterComplete.php");
			}	
			
		}
		//passing value in file End
		
		
	}
	else if(isset($_POST['signin']))
	{
		header("Location:SignIn.php");
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
					<input type="submit" value="Sign In" name="signin"/>&emsp;
					<input type="submit" value="Need Help" name="needhelp"/>&emsp;
					<input type="submit" value="Cart" name="cart"/>
					
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
				<div style="background:#A0DDFA;">
					<br/>
					<br/>
					<b><font color="#0000EE" size="6">REGISTER</font></b>
					<br/>
					<br/>
					<img src="image/creat.jpg" style="height:350px; width:600px; float:left;"/>
					<br/>
						<label><font color="red"><?= $sameIdError; ?></font></label>
					<fieldset style="width:600px" align="center">
						<legend>SIGN UP</legend>
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
						<b>Email as Username</b>
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
						<b>Mobile</b>
						<br/>
						<input type="text" name="email"/>
						&emsp;&emsp;&emsp;&emsp;
						<input type="text" name="mobile"/>
						<br/>
						<label><font color="red"><?= $emailError; ?></font></label>
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
						<label><font color="red"><?= $mobError; ?></font></label>
						<br/>
						<br/>
						<b>Password</b>
						&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;
						<b>Confirm Password</b>
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
						<b>Address</b>
						<br/>
						<input type="text" name="address" style="width:400px; height:30px;"/>
						<br/>
						<label><font color="red"><?= $addressError; ?></font></label>
						<br/>
						<br/>
						<b>City : </b>
						&emsp;
						<select name="city">
							<option>Dhaka</option>
							<option>Chitagang</option>
							<option>Comilla</option>
						</select>
						<br/>
						<br/>
						<br/>
						<input type="submit" value="REGISTER" name="register" style="height:35px; width:120px; background:red; color:white;"/>
						&nbsp;&nbsp;
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
				<div style="background:#222222; height:50px;" align="center">
					<p><font color="white">&copy; Copyright | DealMart.com</font></p>
				</div>
			</footer>
		</form>
	</body>
</html>