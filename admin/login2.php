<?php
	session_start();
	require_once("connection.php");

	$uname = $_POST['uname'];
	$pass = $_POST['password'];

	$query = mysqli_query($db, "SELECT * FROM admin WHERE username='$uname' AND password='$pass'");

	$fetch = mysqli_fetch_assoc($query);

	if($fetch['username'] == $uname AND $fetch['password'] == $pass){
		$_SESSION['user'] = $uname;

		header("location: index2.php");
	}
	else{
		$message = 'Incorrect Username or Password.';
		echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('$message');
        window.location.replace(\"login.php\");
                </SCRIPT>";

	}
?>