<?php

	//run this to migrate table
	require_once('../connection.php');

	$sql = "CREATE TABLE IF NOT EXISTS customer_info(
		ID INT(11) NOT NULL AUTO_INCREMENT,
		Email varchar(255) NOT NULL,
		Password VARCHAR(255) NOT NULL,
		Fullname varchar(255) NOT NULL,
		DOB DATE NOT NULL,
		Gender VARCHAR(255) NOT NULL,
		Contact VARCHAR(255) NOT NULL,
		image LONGBLOB NOT NULL,
		Date_created VARCHAR(255) NOT NULL,
		PRIMARY KEY (ID)
	)";

	$createdb = mysqli_query($db,$sql);
	if($createdb){
		echo "Table successfully created";
	}
	else{
		echo "Failed to create table";
	}
?>