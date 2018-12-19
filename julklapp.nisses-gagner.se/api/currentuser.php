<?php
	include 'api.php';
	 if (!$currentuser->loggedin){ echo(json_encode(new Result(false))); exit;}
	 echo json_encode($currentuser);
?>
