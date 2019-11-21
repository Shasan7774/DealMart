<?php
	$a="";
	$b="";
	$file=fopen("files/CustomerEmailPassword.txt","r");
	while(!feof($file))
	{
		$a=fgets($file);			
		$b=fgets($file);
		echo $a;
		echo $b;
		//echo "<br/>";
		//echo "<br/>";
	}

?>