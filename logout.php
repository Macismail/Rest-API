<?php
	ob_start();
	include_once 'connDB.php';
	session_start();
	session_destroy();
	header("Location: index.php?you_have_been_logged_out");
?>
