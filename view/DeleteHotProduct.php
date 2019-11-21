<?php
	//set url passed value in a session using data table
	session_start();
	
	include_once("controller/service.php");
	$_SESSION['id']=$_SESSION['id'];
	
	//echo $_GET['uid'];
	
    $deleteHotProduct=deleteHotProduct($_GET['uid']);	
	
	if($deleteHotProduct)
	{
		header("Location:ViewHotDeals.php");
	}
		
	
	
?>