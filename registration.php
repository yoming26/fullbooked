<?php
	session_start();
	header('location: register.php');
	require_once("connection.php");

	$fname = $_GET['fname'];
	$dob = $_GET['dob'];
	$gender = $_GET['gender'];
	$email = $_GET['email'];
	$pw = $_GET['pw'];
	$date = date("m/d/Y");

	$checkAccount = "select * from customer_info where Email = '$email'";

	$result = mysqli_query($db, $checkAccount);

	$num = mysqli_num_rows($result);

	if($num == 1) {
		echo "Username is already taken";
	}
	else{
		$reg = "INSERT INTO customer_info (Email, Password, Fullname, DOB, Gender, Date_created) VALUES ('$email', '$pw', '$fname', '$dob', '$gender', '$date')";
		$insert = mysqli_query($db,$reg);
		if($insert){
			echo "Successfully Saved";
		}
		else{
			echo "Failed to save";
		}
	}
?>