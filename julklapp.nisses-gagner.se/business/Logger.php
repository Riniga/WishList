<?php
class Logger
{
	function __construct( $loglevel) 
	{
		$this->loglevel = $loglevel;
	}
	
    // static function Log($Level,$Message) 
	// { 
	// 	$queryresult = mysql_query("INSERT INTO Log userid,name,familyid FROM users WHERE username = '$username' AND password = '$password' ");

	// 	if (!$queryresult) 
	// 	{
	// 		return null;
	// 	}
		
	// 	if (mysql_num_rows($queryresult) == 0) 
	// 	{
	// 		return null;
	// 	}
    // } 
}

if ( !isset( $logger ) ) 
{
	$logger = new Logger("Info");
}

?>
