<?php
error_reporting(E_ALL); //disable for production
ini_set('display_errors', TRUE);

// Start session
session_name("Storybook");
include("/var/www/session2DB/Zebra.php");
//if(!isset($_SESSION)) { session_start(); }
include './User.class.php';
	$user = new User();

	// try to create new
	// user data table
	$userData = $user->createTable();
?>