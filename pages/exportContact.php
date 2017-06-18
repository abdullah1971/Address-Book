<?php
	session_start();
	include '../php/db_function.php';

	$user = $_SESSION['email'];

	$result = getContactInfo($user);

	$fp = fopen('contact.txt', 'w');

	while ($row = $result->fetch_assoc()) {

		fprintf($fp, "%s\n", $row['name']);
		fprintf($fp, "%s\n", $row['address']);
		fprintf($fp, "%s\n", $row['email']);
		fprintf($fp, "%s\n", $row['phoneNo']);
		fprintf($fp, "====\n");
	}

	fclose($fp);

	header('Content-disposition: attachment; filename=contact.txt');
	header('Content-type: text/plain');
	readfile('contact.txt');
	unlink('contact.txt');


?>