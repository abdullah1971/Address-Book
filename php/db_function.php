<?php
	include 'database.php';

	function submitSingUpInfo($request){
		$conn = $conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASENAME);

		$name = $request['name'];
		$email = $request['email'];
		$password = $request['password'];

		$sql = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$password')";

		$conn->query($sql);

		$conn->close();
	}

	function checkLogInInfo($request){
		$conn = $conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASENAME);

		$email = $request['email'];
		$password = $request['password'];

		$sql = "SELECT * FROM user WHERE email='$email'";

		$result = $conn->query($sql);
		$row = $result->fetch_assoc();

		if($row['email'] == $email && $row['password'] == $password)
			return true;
		else
			return false;

		$conn->close();
	}

	function submitContactInof($request){
		$conn = $conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASENAME);

		// get the user id
		$user = $request['user'];
		$sql = "SELECT * FROM user WHERE email='$user'";

		$result = $conn->query($sql);
		$row = $result->fetch_assoc();

		$userId = $row['id'];

		// insert contact info
		$name = $request['name'];
		$address = $request['address'];
		$email = $request['email'];
		$phoneNo = $request['phoneNo'];

		$sql = "INSERT INTO address (userId, name, address, email, phoneNo) VALUES ('$userId', '$name', '$address', '$email', '$phoneNo')";

		$conn->query($sql);

		$conn->close();
	}

	function getContactInfo($user){
		$conn = $conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASENAME);

		// get the user id
		
		$sql = "SELECT * FROM user WHERE email='$user'";

		$result = $conn->query($sql);
		$row = $result->fetch_assoc();

		$userId = $row['id'];

		// get contact's info
		$sql = "SELECT * FROM address WHERE userId='$userId' ORDER BY id";
		$result = $conn->query($sql);

		return $result;

	}


	function getSingleContactInfo($id){
		$conn = $conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASENAME);

		$sql = "SELECT * FROM address WHERE id='$id'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();

		return $row;
	}


	function updateContactInfo($id,$request){
		$conn = $conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASENAME);

		$name = $request['name'];
		$address = $request['address'];
		$email = $request['email'];
		$phoneNo = $request['phoneNo'];

		$sql = "UPDATE address SET name='$name', address='$address', email='$email', phoneNo='$phoneNo' WHERE id='$id'";

		//echo $sql;
		$conn->query($sql);
	}

	function deleteSingleContact($id){
		$conn = $conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASENAME);

		$sql = "DELETE FROM address WHERE id='$id'";
		$conn->query($sql);
	}

	function importContact($user,$data){
		$conn = $conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASENAME);

		$name = $data['name'];
		$address = $data['address'];
		$email = $data['email'];
		$phoneNo = $data['phoneNo'];

		// get the user id
		$sql = "SELECT * FROM user WHERE email='$user'";

		$result = $conn->query($sql);
		$row = $result->fetch_assoc();

		$userId = $row['id'];


		$sql = "INSERT INTO address (userId, name, address, email, phoneNo) VALUES ('$userId', '$name', '$address', '$email', '$phoneNo')";

		$conn->query($sql);

		$conn->close();


	}


	function getSearchResult($search){
		$conn = $conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASENAME);

		$sql = "SELECT * FROM address WHERE (name LIKE '%".$search."%')
		 OR (address LIKE '%".$search."%') OR (email LIKE '%".$search."%') OR (phoneNo LIKE '%".$search."%')";

		$result = $conn->query($sql);

		return $result;
	}

?>