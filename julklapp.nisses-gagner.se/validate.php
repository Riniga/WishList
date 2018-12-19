<?php
session_start();

include 'dbconn.php';
include 'model/user.php';

$username = mysql_real_escape_string($_POST['namn']);
$password = sha1(mysql_real_escape_string($_POST['pass']));

$select_user = mysql_query("SELECT userid,name,familyid,COUNT(userid) AS amount FROM users WHERE username = '$username' AND password = '$password' ");


$user = mysql_fetch_assoc($select_user);
$amount_found = (int)$user['amount']; //amount of users found by the query

if($amount_found > 0) {
	$login_attempt = 1; //successful login attempt
	$_SESSION['loggedin'] = TRUE;
	$_SESSION['username'] = $username;
	$_SESSION['name'] = $user['name'];
	$_SESSION['userid'] = (int)$user['userid'];
	$_SESSION['familyid'] = (int)$user['familyid'];
	$_SESSION['selecteduser'] = (int)$user['userid'];

	$user = new User;
	$user->username = $username;
	//$user->userid = (int)$user['userid'];
	//$user->firstname = $user['name'];
	//$user->familyid=(int)$user['familyid'];
	$user->loggedin=true;
	$_SESSION['user'] = serialize($user);

	header('location: wishList.php'); //to the wishlist
}else{
	$login_attempt = 0; //invalid login attempt
	$_SESSION['username'] = $username;
	header('location: index.html'); //login again
}

?>