<?php
	$serverName="localhost";
	$username="root";
	$password="";
	$databaseName="ecommerce";
	

	function executeNonQuery($query)
	{
		global $serverName,$username,$password,$databaseName;
		$result=false;
		$connection=mysqli_connect($serverName,$username,$password,$databaseName);
		if($connection)
		{
			$result=mysqli_query($connection,$query);
			mysqli_close($connection);
			//echo $result;
		}
		return $result;
	}
	
	/*function executeNonQuery2($query,$customer)
	{
		global $serverName,$username,$password,$databaseName;
		
		$customertable="SELECT * FROM customers";
		
		$result2="";
		$connection=mysqli_connect($serverName,$username,$password,$databaseName);
		
		if($connection)
		{
			$customerResult=mysqli_query($connection,$customertable);
			
			while($rows=mysqli_fetch_assoc($customerResult))
			{
					
				if($rows['email']==$customer['email'])
				{
					$result2=false;
					break;
				}
				else
				{
					$result2=true;
				}	
			}
		}
		if($result2==true)
		{
			mysqli_query($connection,$query);
			return $result2;
		}
		else
		{
			return $result2;
		}
	}*/

	function executeQuery($query)
	{
		return executeNonQuery($query);
	}
?>