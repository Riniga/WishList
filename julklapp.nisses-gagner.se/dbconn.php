<?php
	include 'settings.php';
	if(!mysql_connect($hostname,$username, $password))
	{
		echo "<h2>".'Database Connection ERROR'."</h2>";
		die();
	}
	mysql_select_db($database);
	mysql_query("SET NAMES latin1_swedish_ci");
	mysql_query("SET CHARACTER SET latin1_swedish_ci");
?>

