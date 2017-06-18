<?php 
	session_start();

	include '../php/db_function.php';
	include '../php/utility_function.php';

	$firstName = $_REQUEST['firstName'];
	$lastName = $_REQUEST['lastName'];
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];
	$name = $firstName.' '.$lastName;

	$validated = true;
	$error = [];

	if(!validateEmail($email))
	{
		$error['email'] = true;
		$validated = false;
	}

	if(validatePassword($password) !== "")
	{
		$error['password'] = validatePassword($password);
		$validated = false;
	}
	

	if($validated == true)
	{
		
		$request['name'] = $name;
		$request['email'] = $email;

		$password = md5($password);
		$request['password'] = $password;

		submitSingUpInfo($request);

		$_SESSION['email'] = $request['email'];
		
		header('Location: contact.php');
	}
	else
	{
		$_SESSION['signUpError'] = $error;

		header('Location: ../index.php');
	}

?>