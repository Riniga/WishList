<?php
	session_start(); //we're using sessions so this is required!

	if($_REQUEST['do'] == "logout") {
		unset($_SESSION['loggedin']);
		unset($_SESSION['username']);
		unset($_SESSION['userid']);
		unset($_SESSION['user']);
	}

	if($_SESSION['loggedin'] == FALSE) {
		header('location: index.php'); //members area
	}

	include 'dbconn.php';

	if($_REQUEST['wish']!="")
	{
		StoreTextValueToDatabase($_REQUEST['wish'],$_REQUEST['link'],$_SESSION['selecteduser']);
	}

	if($_REQUEST['action']=="del")
	{
		mysql_query("DELETE FROM wishlists WHERE id=".round($_REQUEST['id']));
	}

	if($_REQUEST['action']=="choose")
	{
		if ($_REQUEST['bought'] == 0) {
			mysql_query("UPDATE wishlists SET bought=".$_SESSION['userid']." WHERE id=".round($_REQUEST['id'])); 
		} else {
			mysql_query("UPDATE wishlists SET bought=0 WHERE id=".round($_REQUEST['id']));
		}	
	}
	
	if($_REQUEST['action']=="edit")
	{
		$edit = TRUE;
		$editId = $_REQUEST['id'];
	} else {
		$edit = FALSE;
	}
	
	if($_REQUEST['editWish']!="")
	{
		UpdateTextValueToDatabase($_REQUEST['editWish'],$_REQUEST['editLink'],$_REQUEST['wishId']);
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
		<body onLoad="document.forms.edit.editWish.focus()">
		<h1>Önskelistan</h1>
		Skapa din egen önskelista och se vad din familj önskar sig.<br>
		Bocka av det du tänker köpa. Du ser ej vad andra har.<br>
		bockat av, reserverat, på din egen lista.<br>
		<?php
			if($_POST['selectedUser'] != "") {
			$_SESSION['selecteduser']=$_POST['selectedUser'];
			}
			
			$userList=mysql_query("SELECT userid,name FROM users ORDER BY userid");
			
			while($user=mysql_fetch_array($userList)) {
				if ($user['userid'] == $_SESSION['selecteduser']) {
					$name=$user['name'];
				}
			}
			
			if($_SESSION['userid'] == $_SESSION['selecteduser']) {
				$logedinuser=TRUE;
			} else {
				$logedinuser=FALSE;
			}
		?>
		
		<h2><?php echo $name.(endsWith($name,'s') ? "" : "s").' önskelista'?></br>
		<a href="wishList.php?do=logout"><small>[logout]</small></a></h2>
	
		<div id="div-1-main-left">
			<table border=0 cellpadding=0 cellspacing=0 >
				<tr bgcolor=#f87820>
					<td><img src=img/blank.gif width=10 height=25></td>
					<td class=tabhead><img src=img/blank.gif width=200 height=6><br> <b><?='önskan'?></b></td>
					<?php
						if($logedinuser) {
							echo "<td class=tabhead><img src=img/blank.gif width=50 height=6><br> <b>Ta bort</b></td>";
						} else {
							echo "<td class=tabhead><img src=img/blank.gif width=50 height=6><br><span colspan=2><b>Reservera</b></span></td>";
						}
						echo "<td class=tabhead><img src=img/blank.gif width=5 height=6></td>";
					?>
					<td><img src=img/blank.gif width=10 height=25></td>
				</tr>
				
				<?php
					$result=mysql_query("SELECT id,wish,bought,link,userid FROM wishlists WHERE userid=".$_SESSION['selecteduser']." ORDER BY wish;");

					if (!$result) {
						// This shows the actual query sent to MySQL, and the error. Useful for debugging.
						$message  = 'Invalid query: ' . mysql_error() . "\n";
						$message .= 'Whole query: ' . $query;
						die($message);
					}
					
					// Retrive the familyid for selected user
					$query = mysql_query("SELECT familyid FROM users WHERE userid=".$_SESSION['selecteduser']); 
					$selectedUser = mysql_fetch_array($query);
						
					$i=0;
					while( $row=mysql_fetch_array($result) )
					{
						if($i>0)
						{
							echo "<tr valign=bottom>";
							echo "<td bgcolor=#ffffff background='img/strichel.gif' colspan=6><img src=img/blank.gif width=1 height=1></td>";
							echo "</tr>";
						}
						
						if($logedinuser || $row['bought'] == 0) {
							$rowstyle="tabval";
							$rowcolor="green";
							$mark="Markera";
							$linkStyle="";
						} else {
							$rowstyle="tabvalsel";
							$rowcolor=$rowstyle;
							$mark="Avmarkera";
							$linkStyle="sel";
						}
						
						echo "<tr valign=center>";
						echo "<td class=tabval><img src=img/blank.gif width=10 height=20></td>";

						if ($row['link'] == NULL) {
							echo "<td class=".$rowstyle."><b>".$row['wish']."</b></td>";
						} else {
							echo "<td class='".$rowstyle."'><a class='".$linkStyle."' href='".$row['link']."' target='_blank'><b>".$row['wish']."</b></a></td>";
						}

						if($logedinuser || $_REQUEST['redigera']=="true") {
							echo "<td class=tabval><a onclick=\"return confirm('Ta bort önskning?');\" href=wishList.php?action=del&id=".$row['id']."><span class=red>[".'RADERA'."]</span></a></td>";
						} else {
							if($_SESSION['userid'] == $row['bought'] || $row['bought'] == 0) {
								echo "<td class=".$rowstyle."><a class='sel' onclick=\"return confirm('".$mark." ".$row['wish']." som reserverad?');\" href=wishList.php?action=choose&id=".$row['id']."&bought=".$row['bought']."><span class=".$rowcolor.">[".'KÖPA'."]</span></a></td>";
							} else {
								echo "<td class=".$rowstyle."><span class=".$rowcolor.">[".'KÖPA'."]</span></a></td>";
							}
						}
							
						echo "<td class=tabval></td>";
							
						if($logedinuser || ($selectedUser['familyid'] == $_SESSION['userid'])) {
							echo "<td class=tabval><a onclick=\"return confirm('Redigera denna önskning?\\n".$row["wish"]."')
								;\" href=wishList.php?action=edit&id=".$row['id']."><img src=img/edit.gif></a></td>";
						} else {
							echo "<td class=tabval></td>";
						}
						echo "</tr>";
						$i++;

					}

					echo "<tr valign=bottom>";
					echo "<td bgcolor=#fb7922 colspan=6><img src=img/blank.gif width=1 height=8></td>";
					echo "</tr>";
					echo "</table>";

					if(($selectedUser['familyid'] == $_SESSION['userid']) && !$logedinuser) 
					{
						echo "<a href=\"wishList.php?redigera=true\">Redigera?</a> ";
					}
					
					if ($logedinuser) 
					{
						echo "<small><a href='shoppingList.php'>".$name.(endsWith($name,'s') ? "" : "s")." inköpslista</a></small>";
						
						$select_keyword = mysql_query("SELECT COUNT(userid) AS amount FROM relatives WHERE userid='".$_SESSION['userid']."'");
						
						$keyword = mysql_fetch_assoc($select_keyword);
						$amount_found = (int)$keyword['amount']; //amount of users found by the query
						
						if($amount_found > 0) {
							echo "<small><a style='float:right;' class='sel' href='share.php'>Delad</a></small>";
						} else {
							echo "<small><a style='float:right; padding-right:2em;' href='share.php'>Dela Listan</a></small>";
						}
					}
				?>
		</div>

		<div id="div-1-main-right">
			<form action=wishList.php method=post>
				<select size="16" style="width:100px" name="selectedUser" onChange="this.form.submit()">
					<?php
						$userList=mysql_query("SELECT u.userid,u.name,u.familyid FROM users as u, relatives as r WHERE r.keyword in (SELECT keyword FROM relatives WHERE userid =".$_SESSION['userid'].") AND u.userid = r.userid ORDER by u.familyid,u.userid LIMIT 0, 30 ");
			
						while($user=mysql_fetch_array($userList)) {
							echo '<option value="'.$user['userid'].'"'.($user["userid"] == $_SESSION["selecteduser"] ? ' selected="selected"' : '').'>&nbsp;'.$user["name"].'</option>';
						}
					?>
				</select><br> 
				<input type=submit border=0 name=userlist value="Visa">
				<a href="addMember.php">Ny</a>
			</form>
		</div>

		<div id="div-1-c">
			<?php
				if($logedinuser || ($selectedUser['familyid'] == $_SESSION['userid'])) {
					
					if($edit) 
					{
						$query = mysql_query("SELECT wish,link FROM wishlists WHERE id='".$editId."'");
						$wishToEdit = mysql_fetch_array($query);
						?>
						
						<form action=wishList.php name=edit method=get>
							<input type=hidden name=wishId value=<?=$editId?>>
							<table border=0 cellpadding=2 cellspacing=0>
								<tr>
									<td style="text-align:right">önskan:</td><td><input class=edit type=text size=40 name=editWish value=<?=$wishToEdit['wish']?>></td>
								</tr>
								<tr>
									<td style="text-align:right">ev. Länk:</td><td><input class=edit type=url size=40 name=editLink value=<?=$wishToEdit['link']?>></td>
								</tr>
								<tr>
									<td></td><td><input type=submit border=0 name=editWishList value="Uppdatera"></td>
								</tr>
							</table>
						</form>
						
						<?php 
					} 
					else 
					{ ?>
				
						<form action=wishList.php method=get>
							<input type=hidden name=usrid value=<?=$usrid?>>
							<table border=0 cellpadding=2 cellspacing=0>
								<tr>
									<td style="text-align:right">önskan:</td><td><input type=text size=40 name=wish></td>
								</tr>
								<tr>
									<td style="text-align:right">ev. Länk:</td><td><input type=url size=40 name=link></td>
								</tr>
								<tr>
									<td></td><td><input type=submit border=0 name=wishlist value="Lägg till"></td>
								</tr>
							</table>
						</form>
						<?php 
					}
				} 
			?>

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
	}

	function PrintTheRequest($value)
	{
		echo "<div>Printing the result</div>";
		echo "<div>Request innehåller i klartext: " . $value . "</div>";
		echo "<div>konverterad med htmlentities: " . htmlentities($value). "</div>";
		echo "<div>konverterad med htmlentities med parametrar: " . htmlentities($value , ENT_QUOTES, 'UTF-8'). "</div>";
	}

	function StoreTextValueToDatabase($value1,$value2,$value3)
	{
		mysql_query("INSERT INTO wishlists (wish,link,userid) VALUES('".$value1."','".$value2."','".$value3."');");
		
	}

	function UpdateTextValueToDatabase($value1,$value2,$value3)
	{	
		mysql_query("UPDATE wishlists SET wish='".$value1."', link='".$value2."' WHERE id='".$value3."'");
	}
?>