<?php 
	session_start();
	include '../php/db_function.php';

	$request['name'] = $_REQUEST['name'];
	$request['address'] = $_REQUEST['address'];
	$request['email'] = $_REQUEST['email'];
	$request['phoneNo'] = $_REQUEST['phoneNo'];
	$request['user'] = $_SESSION['email'];

	submitContactInof($request);

	header('Location: contact.php');
?>