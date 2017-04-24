    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">


<?php
session_start();

if (!isset($_SESSION['user_id'])) {
	require('login_tools.php'); load();
}

$_SESSION = array();

session_destroy();
include ('login.php');
?>