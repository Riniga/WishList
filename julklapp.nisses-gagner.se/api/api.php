<?php
	session_start();
	include 'result.php';
	include 'user.php';
	include 'wish.php';
		
		
	$currentuser = unserialize($_SESSION['user']);
		
	header('Content-type: text/json');
	header('Content-type: application/json');
	header('Access-Control-Allow-Origin: *');
?>
