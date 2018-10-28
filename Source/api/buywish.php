<? 
	session_start();
	include 'api.php';
	if (!$currentuser->loggedin) exit;

	$wish = new Wish($_GET['wishid']);
			
	$result = Wish::ToggleBuy($wish, $currentuser);
	if ($result) echo "{result: true}";
	else echo "{result: false}";
?>
