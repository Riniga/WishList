<? 
	include 'api.php';
	if (!$currentuser->loggedin) exit;
	$wish = new Wish();
	$wish->name = $_GET['name'];
	$wish->link = $_GET['link'];
				
	$result = Wish::Create($wish, $currentuser);
	if ($result) echo json_encode(new Result(true));
	else echo json_encode(new Result(false));
?>
