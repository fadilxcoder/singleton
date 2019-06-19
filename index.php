<?php 

	require_once('Database.class.php');

	$instance = new Database();
	$conn = $instance->getConnection();
	var_dump($conn);
	
	$instance = new Database();
	$conn = $instance->getConnection();
	var_dump($conn);
	
	$instance = new Database();
	$conn = $instance->getConnection();
	var_dump($conn);
	
	$instance = new Database();
	$conn = $instance->getConnection();
	var_dump($conn);
	
	$instance = new Database();
	$conn = $instance->getConnection();
	var_dump($conn);
	
	$instance = new Database();
	$conn = $instance->getConnection();
	var_dump($conn);
	
	$instance = new Database();
	$conn = $instance->getConnection();
	var_dump($conn);
	
	/*
	
	C:\wamp64\www\singleton\index.php:7:
	object(PDO)[2]
	
	C:\wamp64\www\singleton\index.php:11:
	object(PDO)[4]
	
	C:\wamp64\www\singleton\index.php:15:
	object(PDO)[1]
	
	C:\wamp64\www\singleton\index.php:19:
	object(PDO)[3]
	
	C:\wamp64\www\singleton\index.php:23:
	object(PDO)[2]
	
	C:\wamp64\www\singleton\index.php:27:
	object(PDO)[4]
	
	C:\wamp64\www\singleton\index.php:31:
	object(PDO)[1]

	*/
	

	$instance = Database::getInstance();
	$conn = $instance->getConnection();
	var_dump($conn);

	$instance = Database::getInstance();
	$conn = $instance->getConnection();
	var_dump($conn);

	$instance = Database::getInstance();
	$conn = $instance->getConnection();
	var_dump($conn);
	
	$instance = Database::getInstance();
	$conn = $instance->getConnection();
	var_dump($conn);

	/*
	
	C:\wamp64\www\singleton\index.php:61:
	object(PDO)[2]
	
	C:\wamp64\www\singleton\index.php:65:
	object(PDO)[2]
	
	C:\wamp64\www\singleton\index.php:69:
	object(PDO)[2]
	
	C:\wamp64\www\singleton\index.php:73:
	object(PDO)[2]
	
	*/
?>