<?php

	$user="";
	
	if(isset($_POST['signin']))
	{
		header("Location:SignIn.php");
	}
	else if(isset($_POST['backtologin']))
	{
		header("Location:SignIn.php");
	}
	else if(isset($_POST['email']))
	{
		$to      = 'raisulislamshovon@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
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
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					<input type="submit" value="Sign In" name="signin">&emsp;
				
					
				</div>
			</header>
			
			<nav>
				<div style="background:#0198D1; height:50px;">
							
				</div>
			</nav>
			
			<section>
				<div>
					<br/>
					<br/>
					<b><font color="#0198D1" size="6">Forgot Your Password?</font></b>
					<br/>
					<br/>
					<font color="#0198D1">Retrieve your password here</font>
					<br/>
					<br/>
					<p>Please enter your email address below. You will receive a link to reset your password.</p>
					
					<b>Email Address</b>
					<br/>
					<br/>
					<input type="text" name="user"/>
					<br/>
					<br/>
					<input type="submit" value="Back To Login" name="backtologin"/>
					<input type="submit" value="Submit" name="email"/>
					
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
				<div style="background:#222222; height:50px;" align="center">
					<p><font color="white">&copy; Copyright | DealMart.com</font></p>
				</div>
			</footer>
		</form>
	</body>
</html>