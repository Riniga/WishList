<?php
	include 'api.php';

	$username = $_GET['username'];
	$password = sha1($_GET['password']);

	$user = TryLogin($username, $password, $databaseConnection );

	if ($user->loggedin)
	{
		$_SESSION['user'] = serialize($user);
		SetLegacySessionKeys($user);
		echo json_encode(new Result(true));
	}
	else echo json_encode(new Result(false));
	

	function TryLogin($username, $password,$databaseConnection) 
	{ 
		$queryresult = $databaseConnection->QuerySelect("SELECT userid,name,familyid FROM users WHERE username = '$username' AND password = '$password' ");

		if (!$queryresult) 
		{
			return null;
		}
		
		if (mysql_num_rows($queryresult) == 0) 
		{
			return null;
		}
		
		if ($row = mysql_fetch_assoc($queryresult))
		{
			$user;// = new User;
			$user->username= $username;
			$user->userid=(int)$row['userid'];
			$user->firstname=$row['name'];
			$user->familyid=(int)$row['familyid'];
			$user->loggedin=true;
			return $user;
		}
		return null;
	} 

	function SetLegacySessionKeys($user)
	{
		$_SESSION['loggedin'] = $user->loggedin;
		$_SESSION['username'] = $user->username;
		$_SESSION['name'] = $user->firstname;
		$_SESSION['userid'] = $user->userid;
		$_SESSION['familyid'] = $user->familyid;
		$_SESSION['selecteduser'] =  $user->userid;
	}	

?>
