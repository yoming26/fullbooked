<?php
	require_once("connection.php");
	$id = $_GET['id'];

	echo "<script>alert('Are you sure you want to delete?');</script>";

	if(mysqli_query($db, "delete from product where ID='$id'")){
		echo "<script>alert('Successfully deleted');</script>";
	}

?>