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
		echo "<h3 style='color:red;'>".'L�senorden matchar ej! F�rs�k igen!'."</h3>";
		 //login again
	} else {
		$password=sha1($password1);

		if(mysql_query("INSERT INTO users (username,password,name,lastname,familyid) VALUES('$username','$password','$name','$lastname',0)")) {
			$lastInsertId=mysql_insert_id();
			mysql_query("UPDATE users SET familyid = ".$lastInsertId." WHERE userid = ".$lastInsertId);
			header('location: login.php'); //to login
		}
	}
}
?>

<html>
<head>
<title>�nskelistan</title>
<link href="wishlist.css" rel="stylesheet" type="text/css">
</head>

<div id="div-1">
<div id="div-1-main">
<body>
<h1><?='�nskelistan'?></h1>

<?='Skapa din egen �nskelista och se vad din familj �nskar sig.'?><br>
<?='Bocka av det du t�nker k�pa. Du ser ej vad som �r '?><br> 
<?='avbockat p� din egen lista.'?><p>

<form action=register.php method=post>
<table border=0 cellpadding=2 cellspacing=0>
<tr><th colspan="2"><h2>Registrering</h2></th></tr>
<tr><td style="text-align:right">Anv�ndarnamn: </td><td><input type=text size=30 name=username value=<?=$username ?>></td></tr>
<tr><td style="text-align:right">L�senord: </td><td><input type="password" size=30 name=pass1></td></tr>
<tr><td style="text-align:right">Upprepa L�senord: </td><td><input type="password" size=30 name=pass2></td></tr>
<tr><td style="text-align:right">Namn: </td><td><input type=text size=30 name=name value=<?=$name ?>></td></tr>
<tr><td style="text-align:right">Efternamn: </td><td><input type=text size=30 name=lastname value=<?=$lastname ?>></td></tr>
<tr><td></td><td><input type=submit border=0 name=register value="Registrera"></td></tr>
</table>
</form>

<a href="login.php"><small>Till inloggning</small></a>
</body>
</div>
</div>
</html>
