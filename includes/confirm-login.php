<?php
	if ((isset($_SESSION['loggedIn']) != true) || (is_null($_SESSION['loggedIn'])))
	{
		header("Location: http://dealers.purinacheckpoint.com");
		exit;
	}
		
	

	$loggedIn = $_SESSION['loggedIn'];
	$dealerCode = $_SESSION['dealerCodeSession'];
?>