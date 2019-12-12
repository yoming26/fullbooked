<?php
	
	//run this file to migrate database

	$conn = new mysqli("localhost", "root", "");

	$sql = "CREATE DATABASE IF NOT EXISTS project_web";

	$createdb = mysqli_query($conn,$sql);
	if($createdb){
		echo "Database successfully created";
	}
	else{
		echo "Failed to create database";
	}
	
?>