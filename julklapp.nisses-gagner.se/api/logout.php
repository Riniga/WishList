<?php
	include 'api.php';
	session_unset();
	echo json_encode(new Result(true));
?>
