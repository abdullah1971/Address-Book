<?php 
	/*$uploaddir = '/pages';
	$uploadfile = $uploaddir . basename($_FILES['fileToUpload']['name']);
	if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadfile)) {
	    echo "File is valid, and was successfully uploaded.\n";
	} else {
	    echo "Possible file upload attack!\n";
	}*/


	$file = $_FILES['fileToUpload']['tmp_name'];
	$fileName = $_FILES['fileToUpload']['name'];
	echo "$file ";
	echo "$fileName";

	$uploads_dir = 'pages/';
	$name = $_FILES['fileToUpload']['name'];
	if (is_uploaded_file($_FILES['fileToUpload']['tmp_name']))
	{       
	    //in case you want to move  the file in uploads directory
	     move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploads_dir.$name);
	     echo 'moved file to destination directory';
	     exit;
	}

	


	include '../php/db_function.php';
	session_start();

	$user = $_SESSION['email'];


	$handle = fopen("contact.txt", "r");
	while ($userinfo = fscanf($handle, "%s",$input)) {
	    if($input !== "====")
	    {
	    	$data['name'] = $input;
	    	$userinfo = fscanf($handle, "%s",$input);
	    	$data['address'] = $input;

	    	$userinfo = fscanf($handle, "%s",$input);
	    	$data['email'] = $input;

	    	$userinfo = fscanf($handle, "%s",$input);
	    	$data['phoneNo'] = $input;

	    	importContact($user,$data);
	    }
	}
	fclose($handle);
	unlink('contact.txt');




	/*$tmp_name = $_FILES["fileToUpload"]["tmp_name"];
	$name = basename($_FILES["fileToUpload"]["name"]);
	echo "$tmp_name";
	echo "<br>$name";*/
	//move_uploaded_file($tmp_name, "$uploads_dir/$name");
?>