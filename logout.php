<?php
	session_start();

	if(isset($_GET['logout'])) {
		session_destroy();
		header('location: my-account.php');
	}
	else {
		header('location: my-account.php');
	}
?>