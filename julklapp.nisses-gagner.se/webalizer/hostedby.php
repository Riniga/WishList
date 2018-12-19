<?php  
	// Surftown Website Parked Page 
	// Replace this file with your own index file  
	$ch	= curl_init(); 
	$timeout = 10; 
	$url	= $_SERVER['SERVER_NAME'];  

	curl_setopt($ch, CURLOPT_URL, 'http://go.surftown.com/parked/'); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout); 
	curl_setopt($ch, CURLOPT_POST, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, array(domain => $url));  

	$data = curl_exec($ch); 
	echo($data); 
	curl_close($ch);  
?>
