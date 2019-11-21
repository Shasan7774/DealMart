<?php
	
	$num1=0;
	$num2=0;
	$num3=0;
	$error="";
	$emailPass="aaaaa";
	if(isset($_POST['login']))
	{
		$userName=$_POST['user'];
		$password=$_POST['pass'];
		
		//Pick Value from File
		if($userName!="" && $password!="")
		{	
			$file=fopen("files/CustomerEmailPassword.txt","r");
			$file2=fopen("files/Admin.txt","r");
			while(!feof($file))
			{
				$email=fgets($file);
				$pass=fgets($file);
				
				if($userName==rtrim($email) && $password==rtrim($pass))
				{
					$num1=1;
					$file=fopen("files/OnlyWriteUserName.txt","w");
					fwrite($file,"$userName");
					fclose($file);
					break;
				}
				
			}
			
			while(!feof($file2))
			{
				$email=fgets($file2);
				$pass=fgets($file2);
				
				if($userName==rtrim($email) && $password==rtrim($pass))
				{
					$num2=1;
					break;
				}
				
			}
			
			if($num1==1)
			{
				//echo $email;
				header("Location:AfterCustomerLogin.php");
				//header("Location:SignIn.php");
			}
			else if($num2==1)
			{
				//echo $email;
				header("Location:AfterAdminLogin.php");
				//header("Location:SignIn.php");
			}
			else
			{
				$error= "Username or Password is Invalid";
			}
			fclose($file);
			fclose($file2);
			
		}
		else
		{
			$error= "Please give Email and Password both";
		}
		//Pick Value from File End
	}
	
	

?>



<html>

	<head>
		<title>Online Shoping in Bangladesh</title>
	</head>
	
	<body>
		<div align="center">
			<form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>" style="width:400px" align="center">
				<fieldset>
					<legend>SIGN IN</legend>
					<b>Email</b>
					<br/>
					<br/>
					<input type="text" name="user"/>
					<br/>
					<br/>
					<b>Password</b>
					<br/>
					<br/>
					<input type="password" name="pass"/>
					<br/>
					<br/>
					<label><font color="red"><?= $error; ?></font></label>
					<br/>
					<hr>
					<br/>
					<input type="submit" value="SIGN IN" name="login" style="height:30px; width:100px; background:red; color:white;"/>
					&nbsp;&nbsp;
					<a href="ForgotPassword.php">Forgot Password ?</a>
					<br/>
					<br/>
					<b>Not a member ? </b>
					<a href="SignUp.php">Sign Up Now</a>
				</fieldset>
					
			</form>
		</div>
	</body>

</html>