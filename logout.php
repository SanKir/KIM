<?php 
	session_start();
	session_unset($_SESSION['logged_user']);
	session_destroy();
	header("Location:/");
?>