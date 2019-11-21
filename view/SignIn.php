<?php
	session_start();
	
	include_once("controller/service.php");
	$allcustomer=getAllCustomers();
	$admin=getAdmin();
	
	$num1=0;
	$num2=0;
	$num3=0;
	$error="";
	$emailPass="aaaaa";
	if(isset($_POST['login']))
	{
		$userName=trim($_POST['user']);
		$password=trim($_POST['pass']);
		
		//$allcustomer=getAllCustomers();
			
		foreach ($allcustomer as $customers)
		{
			if($customers['email']==$userName && $customers['password']==$password)
			{
				$_SESSION['id']=$customers['customerid'];
				$num1=1;
				break;
			}
			//echo $customers['email'];
		}
		foreach ($admin as $adminData)
		{
			if($adminData['email']==$userName && $adminData['password']==$password)
			{
				$_SESSION['id']=$adminData['id'];
				$num2=1;
				break;
			}
			//echo $customers['email'];
		}
		
		if($userName!="" && $password!="")
		{
			if($num1==1)
			{
				header("Location:AfterCustomerLogin.php");
				
			}
			else if($num2==1)
			{
				header("Location:AfterAdminLogin.php");
			}
			else
			{
				$error="Username or Password is Invalid";
			}
		}
		else
		{
			$error="Username or Password is equired";
		}
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