<?php
	session_start();
	require_once("connection.php");

	$email1 = $_POST['email1'];
	$pass1 = $_POST['password1'];

	$query = mysqli_query($db, "SELECT * FROM customer_info WHERE Email='$email1' AND Password='$pass1'");

	$fetch = mysqli_fetch_assoc($query);

	if($fetch['Email'] == $email1 AND $fetch['Password'] == $pass1){
		$_SESSION['user'] = $email;

		header("location: index2.php");
	}
	else{
		$message = 'Incorrect Username or Password.';
		echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('$message');
        window.location.replace(\"login.php\");
                </SCRIPT>";
                mysql_close();

	}
?>