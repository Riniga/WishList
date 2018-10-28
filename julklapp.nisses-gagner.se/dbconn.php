<?php
    $hostname="[HOSTNAME]";
    $database="[DATABASE]";
    $username="[USERNAME]";
    $password="[PASSWORD]";

	if(!mysql_connect($hostname,$username, $password))
	{
		echo "<h2>".'Database Connection ERROR'."</h2>";
		die();
	}
	mysql_select_db($database);
	mysql_query("SET NAMES utf8");
?>

