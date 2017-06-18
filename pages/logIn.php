<?php
	session_start();

	include '../php/db_function.php';
	include '../php/utility_function.php';

	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];


	$error = [];

	$request['email'] = $email;
	
	$password = md5($password);
	$request['password'] = $password;

	if(checkLogInInfo($request) == true)
	{
		$_SESSION['email'] = $request['email'];
		header('Location: contact.php');
	}
	else
	{
		$error['login'] = "Invalid Email Or Password.";
		
		$_SESSION['logInError'] = $error;
		header('Location: ../index.php');
	}

	
?>