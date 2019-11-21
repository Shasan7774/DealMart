<?php
	include_once("model/dataaccess.php");
	
	function addNewCustomer($fname,$lname,$email,$mobile,$nPassword,$address)
	{
		$customer=array("firstname"=>$fname,"lastname"=>$lname,"email"=>$email,"mobile"=>$mobile,"password"=>$nPassword,"address"=>$address);
		return newCustomerValidation($customer);
	}

?>