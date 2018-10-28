<?php
$conn = mysql_connect("mydb19.surftown.se","linux_julklapp","zvSmJKrCYq3m");
//mysql_set_charset('latin1_swedish_ci', $conn);
//$charset = mysql_client_encoding($conn);
//echo "The current character set is: $charset\n";
if(!$conn)
{
	echo "<h2>".'Database Connection ERROR'."</h2>";
	die();
}

mysql_select_db("linux_julklapp");
mysql_query("SET NAMES latin1_swedish_ci");
mysql_query("SET CHARACTER SET latin1_swedish_ci");
?>

