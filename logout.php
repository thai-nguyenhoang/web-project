<?php
	session_start();
	unset($email);
	session_unset();
	session_destroy();
	header("location: index.php");
?>