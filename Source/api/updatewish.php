<? 
	include 'api.php';
	if (!$currentuser->loggedin) exit;
	
	$wish = new Wish($_GET['wishid']);
	$wish->name = $_GET['name'];
	$wish->link = $_GET['link'];
	
	$result = Wish::Update($wish, $currentuser);
	if ($result) echo "{result: true}";
	else echo "{result: false}";
?>
