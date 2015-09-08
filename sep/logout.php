<?php
	
	session_start();	// Start the session

	// remove all session variables
	session_unset(); 

	// destroy the session 
	session_destroy(); 
	
    header("location:Login.php");  // if logout success head to login page	
?>