<?php
function PrintTheRequest($value)
{
	echo "<div>Printing the result</div>";
	echo "<div>Request inneh�ller i klartext: " . $value . "</div>";
	echo "<div>konverterad med htmlentities: " . htmlentities($value). "</div>";
	echo "<div>konverterad med htmlentities med parametrar: " . htmlentities($value , ENT_QUOTES, 'UTF-8'). "</div>";
}
function StoreTextValueToDatabase($value)
{
	include 'dbconn.php';	
	mysql_query("INSERT INTO test (text) VALUES('".$value."');");
	mysql_query("INSERT INTO wishlists (wish,link,userid) VALUES('".$value."','".$value."',1);");
	
}
?>

<html>
<head><title>�nskelistan - Testsida - 20180926</title><link href="wishlist.css" rel="stylesheet" type="text/css"></head>
<body>
<h1>Test av encodeing f�r att f� ��� att fungera. v1.1</h1>
<form action=test.php method=get>
	<div><label for"text">Text:</Label><input type="text" name="requestedvalue"></div>
	<div><input type=submit value="L�gg till"></div>
</form>
<article>
	<?php
	if($_REQUEST['requestedvalue']!="")
	{
		PrintTheRequest($_REQUEST['requestedvalue']);
		StoreTextValueToDatabase($_REQUEST['requestedvalue']);
		echo "<hr /><div>Klar</div>";
	}
	?>
</article>

<hr/>

<form action=test.php method=get>
	<input type=submit value="Print tabel test from database" name="printtable">
</form>

<?php
if($_REQUEST['printtable']!="")
{

	include 'dbconn.php';	
	$result=mysql_query("SELECT testid,text FROM test");
	if (!$result) {
		die('Dao! Felmeddelande: ' . mysql_error() . "<br>");
	}
	
	if ($result) {
		
	echo "<table><tr><th>Id</th><th>text</th></tr>";
		while( $row=mysql_fetch_array($result) )
		{
			
			echo "<tr><td>".$row['testid']."<td><td>".$row['text']."<td></tr>";
		}
		echo "</table>";
	}
}

echo "<hr /><div>Klar</div>";
?>


</body>
</html>