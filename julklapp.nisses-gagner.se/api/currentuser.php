<?php
	include 'api.php';

	if (!$currentuser->loggedin) exit;
	
	echo json_encode($currentuser);
?>
