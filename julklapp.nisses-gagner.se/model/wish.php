<?php
class Wish
{
	public $id; 
    public $name; 
	public $link; 
	public $bought; 
	function __construct($id)
	{
		$this->id=$id;
		include '../dbconn.php';
		$queryresult=mysql_query("SELECT id,wish,bought,link FROM wishlists WHERE id=".$id.";");

		if (!$queryresult) 
		{
			return null;
		}
		if (mysql_num_rows($queryresult) == 0) 
		{
			return null;
		}
		
		$result = array();
		
		if($row=mysql_fetch_array($queryresult)) 
		{
			$this->name=$row['wish'];
			$this->bought=$row['bought'];
			$this->link=$row['link'];
			array_push($result, $wish);
		}
		
	}
      
	static function GetAllWishes($user, $currentuser) 
	{ 
		include '../dbconn.php';
		$queryresult=mysql_query("SELECT id,wish,bought,link,userid FROM wishlists WHERE userid=".$user->userid." ORDER BY wish;");

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
			$wish = new Wish;
			$wish->id=$row['id'];
			$wish->name=$row['wish'];
			if ($user->userid!=$currentuser->userid) $wish->bought=$row['bought'];
			$wish->link=$row['link'];
			array_push($result, $wish);
		}
		return $result;
    } 
	
	static function Create($wish,$currentuser) 
	{
		$result = mysql_query("INSERT INTO wishlists (wish,link,bought,userid) VALUES('".$wish->name."','".$wish->link."',0,".$currentuser->userid.");");
		
		if (!$result) 
		{
			return false;
		}
		
		return true;
	}

	static function Update($wish) 
	{
		$result = mysql_query("UPDATE wishlists SET wish='".$wish->name."', link='".$wish->link."' WHERE id='".$wish->id."'");
		if (!$result) 
		{
			return false;
		}
		
		return true;
	}
	
	static function Delete($wish) 
	{
		$result = mysql_query("DELETE FROM wishlists WHERE id=".round($wish->id));
		
		if (!$result) 
		{
			return false;
		}
		
		return true;
	}
	
	static function ToggleBuy($wish,$currentuser) 
	{
		if ($wish->bought == 0) 
		{
			$result = mysql_query("UPDATE wishlists SET bought=".$currentuser->userid." WHERE id=".$wish->id); 
		} 
		else 
		{
			$result = mysql_query("UPDATE wishlists SET bought=0 WHERE id=".$wish->id); 
		}
		
		if (!$result) 
		{
			return false;
		}
		
		return true;
	}
}
?>
