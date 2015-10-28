<?php
session_start(); //we're using sessions so this is required!

include 'dbconn.php';

if($_POST['register']) {
//verify information from user input

	$name=mysql_real_escape_string($_POST['name']);
	$lastname=mysql_real_escape_string($_POST['lastname']);
	$familyid = $_SESSION['familyid'];
	
	if( mysql_query("INSERT INTO users (username,name,lastname,familyid) VALUES('$name','$name','$lastname',$familyid)")) {
		$lastInsertId=mysql_insert_id();
		$relatives = mysql_fetch_array(mysql_query("SELECT keyword FROM relatives WHERE userid='".$_SESSION['userid']."'"));
		mysql_query("INSERT INTO relatives (userid,keyword) VALUES('".$lastInsertId."','".$relatives['keyword']."')");
			header('location: wishList.php'); //to wishlist
	}
}
?>

<html>
<head>
<title>Önskelistan</title>
<link href="wishlist.css" rel="stylesheet" type="text/css">
</head>

<div id="div-1">
<div id="div-1-main">
<body>
<h1><?='Önskelistan'?></h1>
<?='Lägg till ny anv&auml;ndare. Du loggar fortfarande in'?><br>
<?='med ditt konto men du administrerar och kan lägga till '?><br>
<?='önskningar på den nya personens lista.'?><p>

<form action=addMember.php method=post>
<table border=0 cellpadding=2 cellspacing=0>
<tr><th colspan="2"><h2>Registrering</h2></th><td></td></tr>
<tr><td style="text-align:right">Namn: </td><td><input type=text size=30 name=name value=<?=$name ?>></td></tr>
<tr><td style="text-align:right">Efternamn: </td><td><input type=text size=30 name=lastname value=<?=$lastname ?>></td></tr>
<tr><td></td><td><input type=submit border=0 name=register value="Registrera"></td></tr>
</table>
</form>

<a href="wishList.php"><small>Till önskelistor</small></a>
</body>
</div>
</div>
</html>
