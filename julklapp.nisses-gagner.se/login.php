<? #include("../../xampp/langsettings.php");
session_start(); //we're using sessions so this is required!

if($_SESSION['loggedin'] == TRUE) {
	header('location: wishList.php'); //members area
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
<?='Bocka av det du t�nker k�pa. Du ser ej vad andra har '?><br>
<?='bockat av (k�pt) p� din egen lista.'?>

<h2>Inloggning</h2>


<form action=validate.php method=post>
<table border=0 cellpadding=2 cellspacing=0>
<tr><td style="text-align:right">Anv�ndarnamn:&nbsp; </td><td><input type=text size=30 name=namn value=<?=$_SESSION['username'] ?>></td></tr>
<tr><td style="text-align:right">L�senord:&nbsp; </td><td><input type="password" size=30 name=pass></td></tr>
<tr><td></td><td><input type=submit border=0 value="Logga in">&nbsp;<a href="register.php"> Registrera</a></a></td></tr>
</table>
</form>

</body>
</div>
</div>

</html>