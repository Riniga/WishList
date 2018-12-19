<?php
session_start(); //we're using sessions so this is required!

include 'dbconn.php';

if($_POST['register']) {
//verify information from user input

	$username=mysql_real_escape_string($_POST['username']);
	$password1=mysql_real_escape_string($_POST['pass1']);
	$password2=mysql_real_escape_string($_POST['pass2']);
	$name=mysql_real_escape_string($_POST['name']);
	$lastname=mysql_real_escape_string($_POST['lastname']);

	if ($password1 != $password2) {
		echo "<h3 style='color:red;'>".'Lösenorden matchar ej! Försök igen!'."</h3>";
		 //login again
	} else {
		$password=sha1($password1);

		if(mysql_query("INSERT INTO users (username,password,name,lastname,familyid) VALUES('$username','$password','$name','$lastname',0)")) {
			$lastInsertId=mysql_insert_id();
			mysql_query("UPDATE users SET familyid = ".$lastInsertId." WHERE userid = ".$lastInsertId);
			header('location: /index.php'); //to login
		}
	}
}
?>

<html>
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Privat önskelistaapplikation för oss att att få möjlighet att enbart köpa nödvändiga saker till varandra.">
    <title>Julklappsönskelistan</title>
<link href="wishlist.css" rel="stylesheet" type="text/css">
</head>

<div id="div-1">
<div id="div-1-main">
<body>
<h1>Önskelistan</h1>

<p>Skapa din egen änskelista och se vad din familj änskar sig.<br>
Bocka av det du tänker köpa. Du ser ej vad som är<br> 
avbockat på din egen lista.<p>

<form action=register.php method=post>
<table border=0 cellpadding=2 cellspacing=0>
<tr><th colspan="2"><h2>Registrering</h2></th></tr>
<tr><td style="text-align:right">Användarnamn: </td><td><input type=text size=30 name=username ></td></tr>
<tr><td style="text-align:right">Lösenord: </td><td><input type="password" size=30 name=pass1></td></tr>
<tr><td style="text-align:right">Upprepa Lösenord: </td><td><input type="password" size=30 name=pass2></td></tr>
<tr><td style="text-align:right">Namn: </td><td><input type=text size=30 name=name value=<?=$name ?>></td></tr>
<tr><td style="text-align:right">Efternamn: </td><td><input type=text size=30 name=lastname value=<?=$lastname ?>></td></tr>
<tr><td></td><td><input type=submit border=0 name=register value="Registrera"></td></tr>
</table>
</form>

<a href="index.php"><small>Till inloggning</small></a>
</body>
</div>
</div>
</html>
