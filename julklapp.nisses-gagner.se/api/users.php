<?php
	include 'api.php';
	if (!$currentuser->loggedin) exit;
	$users = User::GetAllUsers($currentuser);
	echo json_encode($users);
?>
