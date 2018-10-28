<?
session_start(); //we're using sessions so this is required!

include 'dbconn.php';

if($_SESSION['loggedin'] == FALSE) {
	header('location: index.php'); //members area
}

if($_POST['keyword'] != "" ) {
	
	$keyword = sha1(mysql_real_escape_string($_POST['keyword']));
	
	$query = "INSERT INTO relatives (userid,keyword) VALUES('".$_SESSION['userid']."','".$keyword."');";
	
	if(!mysql_query($query)) {
		mysql_query("UPDATE relatives SET keyword='".$keyword."' WHERE userid='".$_SESSION['userid']."'");
	}
	header('location: wishList.php'); //to wishlist
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

<?='F�r att g�ra din �nskelista tillg�nglig f�r �vriga i'?><br>
<?='din familj m�ste du l�gga till ett gemensamt nyckel-ord'?><br>
<?='som ni gemensamt kommit �verens om. Alla som angett detta'?><br>
<?='ord kommer kunna ta del av varandras �nskelistor'?>

<h2>Ange familjens nyckel-ord</h2>


<form action=share.php method=post>
<table border=0 cellpadding=0 cellspacing=0>
<tr><td style="text-align:right">Nyckel-ord:&nbsp; </td><td><input type=text size=30 name=keyword></td></tr>
<tr><td></td><td><input type=submit border=0 value="Ange">&nbsp;<a href="wishList.php">Tillbaka</a></a></td></tr>
</table>
</form>

</body>
</div>
</div>

</html>