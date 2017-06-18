<?php
	include '../php/db_function.php';

	$id = $_GET['id'];

	deleteSingleContact($id);

	header('Location: contact.php');
?>