<?php
include 'settings.php';

if(!mysql_connect($hostname,$username, $password))
{
	echo "<h2>".'Database Connection ERROR'."</h2>";
	die();
}
mysql_select_db("linux_julklapp");
?>