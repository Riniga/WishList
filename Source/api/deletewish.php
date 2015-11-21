<? 
	include 'api.php';
	if (!$currentuser->loggedin) exit;
		
	$wish = new Wish($_GET['wishid']);
			
	$result = Wish::Delete($wish);
	if ($result) echo "{result: true}";
	else echo "{result: false}";
?>
