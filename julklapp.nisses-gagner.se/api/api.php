<?php
	session_start();
	require_once(dirname(__FILE__) . '\..\business\Loader.php' );
	include '../model/result.php';
	include '../model/user.php';
		
	$currentuser = unserialize($_SESSION['user']);
		
	header('Content-type: text/json');
	header('Content-type: application/json');
	header('Access-Control-Allow-Origin: *');
?>
