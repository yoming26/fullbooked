<?php
	session_start();
	require_once("connection.php");

	$email =  $_POST['emailid'];
	$pass = $_POST['password'];

	$query = mysqli_query($db, "SELECT * FROM customer_info WHERE Email='$email' AND Password='$pass'");

	$fetch = mysqli_fetch_assoc($query);

	if($fetch['Email'] == $email AND $fetch['Password'] == $pass){
		$_SESSION['user'] = $email;
		header("location: user-index-2.php");
	}
	else{
		$message = 'Incorrect Email ID or Password.';
		echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('$message');
        window.location.replace(\"my-account.php\");
                </SCRIPT>";
	}
?>