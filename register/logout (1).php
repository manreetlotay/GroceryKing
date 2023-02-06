<?php
	session_start();
	
	//destroy all session variable and redirect to the home page
	session_destroy();
	header('Location: index.php');

?>