<? 
	session_start();
	include 'api.php';
	$user = unserialize($_SESSION['user']);
	
	if ($user->loggedin)
	{
		echo json_encode(new Result(true));
	}
	else
	{
		$username = $_GET['username'];
		$password = sha1($_GET['password']);
		
		$user = User::TryLogin($username,$password);
		if ($user->loggedin)
		{
			$_SESSION['user'] = serialize($user);
			echo json_encode(new Result(true));
		}
		else
		{
			echo json_encode(new Result(false));
		}
	}

?>
