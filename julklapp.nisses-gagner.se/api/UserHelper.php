<?php
class User
{
	public $loggedin = false; 
    public $username; 
	public $firstname; 
	public $familyid; 
	public $iscurrentuser; 
   
    
	
	static function GetAllUsers($currentuser) 
	{ 
		include '../dbconn.php';
		$queryresult = mysql_query("SELECT u.userid,u.name,u.familyid FROM users as u, relatives as r WHERE r.keyword in (SELECT keyword FROM relatives WHERE userid =".$currentuser->userid.") AND u.userid = r.userid ORDER by u.familyid,u.userid");

		if (!$queryresult) 
		{
			return null;
		}
		if (mysql_num_rows($queryresult) == 0) 
		{
			return null;
		}
		
		$result = array();
		
		while($row=mysql_fetch_array($queryresult)) 
		{
			$user = new User;
			$user->firstname=$row['name'];
			$user->userid=(int)$row['userid'];
			$user->familyid=(int)$row['familyid'];
			
			if ($user->userid==$currentuser->userid) $user->iscurrentuser=true;
			else $user->iscurrentuser=false;
			array_push($result, $user);
		}
		return $result;
    } 
}
?>
