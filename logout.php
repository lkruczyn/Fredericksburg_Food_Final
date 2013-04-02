<?php
	session_start();
	$_SESSION['loggedIn'] = 0;
	$_SESSION['isAdmin'] = 0;
	session_destroy();
	header("Location: index.php");
?>