<?php
session_start();
unset($_SESSION['user']);
	$_SESSION['msg'] = '<p style="color:black;">Logged out succesfully</p>';

header('Location: login.php');
?>