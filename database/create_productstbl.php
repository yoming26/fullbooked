<?php
	
	require_once('../connection.php');

	$sql = "CREATE TABLE IF NOT EXISTS product(
		ID INT(11) NOT NULL AUTO_INCREMENT,
		Product_name varchar(255) NOT NULL,
		Product_price DECIMAL(6,4) NOT NULL,
		Product_image LONGBLOB NOT NULL,
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