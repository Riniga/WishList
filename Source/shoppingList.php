<?php
session_start(); //we're using sessions so this is required!

if($_SESSION['loggedin'] == FALSE) {
	header('location: login.php'); //members area
}

include 'dbconn.php';
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
		
		<?='Här kan du se en samlad lista över önskningar du reserverat'?><br>
		<?='att köpa. När du köpt en present kan du klicka på present'?><br>
		<?='ikonen så den blir struken från listan.'?><br> 
		<?='(Det går bra att ångra gjorda val såsom reservationer samt köp)'?>
	<?
	$name = $_SESSION['name'];
	?>
	<p><h2><?=$name.(endsWith($name,'s') ? "" : "s").' inköpslista'?></br>
	<a href="wishList.php?do=logout"><small>[logout]</small></a></h2>
	
	<div id="div-1-main-left">

		<table border=0 cellpadding=0 cellspacing=0 >
			<tr bgcolor=#f87820>
				<td><img src=img/blank.gif width=10 height=25></td>
				<td class=tabhead><img src=img/blank.gif width=50 height=6><br> <b>Namn</b></td>
 				<td class=tabhead><img src=img/blank.gif width=10 height=6><br> </td>
				<td class=tabhead><img src=img/blank.gif width=80 height=6><br> <b>Önskan</b></td>
 				<td class=tabhead><img src=img/blank.gif width=10 height=6><br> </td>
				<td class=tabhead><img src=img/blank.gif width=50 height=6><br> <b>Avboka</b></td>
 				<td class=tabhead><img src=img/blank.gif width=10 height=6><br> </td>
 				<td class=tabhead><img src=img/blank.gif width=10 height=6><br> <b>Köpt</b></td>
				<td><img src=img/blank.gif width=10 height=25></td>
			</tr>
	<?

	if($_REQUEST['action']=="choose")
	{
		if ($_REQUEST['bought'] == 0) {
			mysql_query("UPDATE wishlists SET bought=".$_SESSION['userid']." WHERE id=".round($_REQUEST['id'])); 
		} else {
			mysql_query("UPDATE wishlists SET bought=0 WHERE id=".round($_REQUEST['id']));
		}	
	}
	
	if($_REQUEST['action'] =="bought")
	{
		if(!mysql_query("INSERT INTO bought SET wishid=".round($_REQUEST['id']).", userid=".$_SESSION['userid'])) {
			mysql_query("DELETE FROM bought WHERE wishid=".round($_REQUEST['id']));
		}
	}
	
	$result=mysql_query("SELECT w.id,w.wish,w.bought,w.link,w.userid,u.name,u.userid 
			FROM wishlists w, users u 
			WHERE w.bought=".$_SESSION['selecteduser']." 
			AND u.userid = w.userid 
			ORDER BY u.userid;");

	// Check result
	if (!$result) {
		// This shows the actual query sent to MySQL, and the error. Useful for debugging.
		$message  = 'Invalid query: ' . mysql_error() . "\n";
		//$message .= 'Whole query: ' . $query;
		die($message);
	}

	$isBoughtResult=mysql_query("SELECT wishid FROM bought WHERE userid=".$_SESSION['userid']);
	
	while($isBought=mysql_fetch_array($isBoughtResult)) {
		$wishIsBought[] = $isBought['wishid'];
	}
	
	$i=0;
	while( $row=mysql_fetch_array($result) )
	{
		if($i>0)
		{
			echo "<tr valign=bottom>";
			echo "<td bgcolor=#ffffff background='img/strichel.gif' colspan=9><img src=img/blank.gif width=1 height=1></td>";
			echo "</tr>";
		}
		
		if( in_array($row['id'], $wishIsBought)) {
			$rowstyle="tabvalsel";
			$rowcolor="#aaaaaa";
			$spanColor="";
			$linkStyle="sel";
		} else {
			$rowstyle="tabval";
			$rowcolor="#bb3902";
			$spanColor="red";
			$linkStyle="";
		}
		
		echo "<tr valign=center>";
		echo "<td class=tabval><img src=img/blank.gif width=10 height=20></td>";
		echo "<td class=tabval>".$row['name']."</td>";
		echo "<td class=tabval><img src=img/blank.gif width=10 height=20></td>";
		
		if ($row['link'] == NULL) {
			echo "<td class=".$rowstyle."><font color=".$rowcolor."><b>".$row['wish']."</b></font></td>";
		} else {
			echo "<td class=".$rowstyle."><a class='".$linkStyle."' href=".$row['link']." target='_blank'><b>".$row['wish']."</b></a></td>";
		}
		
		echo "<td class=tabval><img src=img/blank.gif width=10 height=20></td>";

		
		if($_SESSION['userid'] == $row['bought'] || $row['bought'] == 0) {
			echo "<td class=".$rowstyle."><a class='sel' onclick=\"return confirm('Avboka ".$row['wish']."?');\" href=shoppingList.php?action=choose&id=".$row['id']."&bought=".$row['bought']."><span class=".$spanColor.">[".'Bokad'."]</span></a></td>";
		} else {
			echo "<td class=".$rowstyle."><span class=".$rowcolor.">[".'Bokad'."]</span></a></td>";
		}

		echo "<td class=tabval></td>";
		echo "<td class=tabval><a class='sel' href=shoppingList.php?action=bought&id=".$row['id'].">&nbsp;&nbsp;<img src=img/gift1.jpeg height=25em></a></td>";
			
		echo "<td class=tabval></td>";
		echo "</tr>";
		$i++;

	}

	echo "<tr valign=bottom>";
	echo "<td bgcolor=#fb7922 colspan=9><img src=img/blank.gif width=1 height=8></td>";
	echo "</tr>";
	echo "</table>";
	
	?>	
	</div>

	<div id="div-1-c">
	<small><a href='wishList.php'><?=$name.(endsWith($name,'s') ? "" : "s")?> önskelista</a></small>

	</div>
</div>
</div>

</body>
</html>

<?php 
function endsWith($haystack, $needle) {
	$length = strlen($needle);
	if ($length == 0) {
		return true;
	}

	return (substr($haystack, -$length) === $needle);
}?>