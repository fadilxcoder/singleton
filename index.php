<?php 

	require_once('Database.class.php');

	$instance = new Database();
	$conn = $instance->getConnection();
	# var_dump($conn);
	 
	$instance = new Database();
	$conn = $instance->getConnection();
	# var_dump($conn);
	 
	$instance = new Database();
	$conn = $instance->getConnection();
	# var_dump($conn);
	
	/*
	
	C:\wamp64\www\singleton\index.php:7:
	object(PDO)[2]
	
	C:\wamp64\www\singleton\index.php:11:
	object(PDO)[4]
	
	C:\wamp64\www\singleton\index.php:15:
	object(PDO)[1]
	
	*/

	$database = new Database();
	
	$instance = $database::getInstance();
	$conn = $instance->getConnection();
	# var_dump($conn);

	$instance = $database::getInstance();
	$conn = $instance->getConnection();
	# var_dump($conn);

	$instance = $database::getInstance();
	$conn = $instance->getConnection();
	# var_dump($conn);
	
	/*
	
	C:\wamp64\www\singleton\index.php:34:
	object(PDO)[6]
	
	C:\wamp64\www\singleton\index.php:38:
	object(PDO)[6]
	
	C:\wamp64\www\singleton\index.php:42:
	object(PDO)[6]
	
	*/
?>