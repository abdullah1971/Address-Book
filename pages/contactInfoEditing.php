<?php
	include '../php/db_function.php';

	$id = $_GET['id'];

	updateContactInfo($id,$_REQUEST);

	header('Location: contact.php');

?>