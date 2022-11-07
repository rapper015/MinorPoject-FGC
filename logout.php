<?php
	session_start();
	session_unset();
	session_destroy();
	$check=false;
	header("location:login.php");
?>