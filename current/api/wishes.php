<? 
	include 'api.php';
	if (!$currentuser->loggedin) exit;
	$user = new User;
	$user->userid=$_GET['userid'];
	
	$wishes = Wish::GetAllWishes($user , $currentuser);
	echo json_encode($wishes);
?>
